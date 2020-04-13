<?php

namespace App\Http\Controllers\Dashboard;

use App\Team;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class TeamsController extends Controller
 {  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::paginate(10);;
        return view('dashboard.teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = Team::all();
        return view('dashboard.teams.create', compact('teams'));
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
        ];
        foreach (config('translatable.locales') as $locale) {

            $rules += [$locale . '.name' => 'required|unique:team_translations,name'];
            $rules += [$locale . '.job' => 'required'];

        }//end of  for each

      

        $request->validate($rules);

        $request_data = $request->all();

        if ($request->image) {

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/team_images/' . $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();

        }//end of if

        Team::create($request_data);
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.teams.index');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('dashboard.teams.edit', compact('team'));
    }

    
    
    public function update(Request $request, Team $team)
    {
        $rules = [
        ];

        foreach (config('translatable.locales') as $locale) {

            $rules += [$locale . '.name' => ['required', Rule::unique('team_translations', 'name')->ignore($team->id, 'team_id')]];
            $rules += [$locale . '.job' => 'required'];

        }//end of  for each

       

        $request->validate($rules);

        $request_data = $request->all();

        if ($request->image) {

           
            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/team_images/' . $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();

        }//end of if
        
        $team->update($request_data);
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.teams.index');

    }//end of update

    public function destroy(Team $team)
    {

            //Storage::disk('public_uploads')->delete('/product_images/' . $team->image);


        $team->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.teams.index');

    }//end of
}

