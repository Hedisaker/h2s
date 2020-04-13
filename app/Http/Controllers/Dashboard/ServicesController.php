<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;

use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
class ServicesController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::paginate(10);;
        return view('dashboard.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::all();
        return view('dashboard.services.create', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'icon'=>'required'
        ];
        foreach (config('translatable.locales') as $locale) {

            $rules += [$locale . '.name' => 'required|unique:service_translations,name'];
            $rules += [$locale . '.description' => 'required'];

        }//end of  for each

      

        $request->validate($rules);

        $request_data = $request->all();

      

        Service::create($request_data);
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.services.index');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('dashboard.services.edit', compact('service'));
    }

    
    
    public function update(Request $request, Service $service)
    {
        $rules = [
            'icon'=>'required'
        ];

        foreach (config('translatable.locales') as $locale) {

            $rules += [$locale . '.name' => ['required', Rule::unique('product_translations', 'name')->ignore($service->id, 'product_id')]];
            $rules += [$locale . '.description' => 'required'];

        }//end of  for each

       

        $request->validate($rules);

        $request_data = $request->all();

        if ($request->image) {

            if ($service->image != 'default.png') {

                Storage::disk('public_uploads')->delete('/product_images/' . $service->image);
                    
            }//end of if

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/product_images/' . $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();

        }//end of if
        
        $service->update($request_data);
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.services.index');

    }//end of update

    public function destroy(Service $service)
    {

            //Storage::disk('public_uploads')->delete('/product_images/' . $service->image);


        $service->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.Services.index');

    }//end of
}
