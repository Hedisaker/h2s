<?php

use Illuminate\Database\Seeder;

class HomesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Home::create([
            'ar' => ['address' => 'address ar'],
            'en' => ['address' => 'address en'],
            'fr' => ['address' => 'address fr'],
            
            'phone' => '26744845',
            'mail' => 'email@gmail.com',
            'clients' => 125,
            'completedproject' => 10,
            'activeproject' => 12,
         
        ]);
    }
}
