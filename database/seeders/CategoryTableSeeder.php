<?php

namespace Database\Seeders;
 
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category=new \App\Models\Category();
        $category->name="Films";
        $category->is_online=1;
        $category->save();


        
        $category=new \App\Models\Category();
        $category->name="Séries tv";
        $category->is_online=1;
        $category->save();

        
        $category=new \App\Models\Category();
        $category->name="Musique";
        $category->is_online=1;
        $category->save();

        $category=new \App\Models\Category();
        $category->name="Jeux-vidéos";
        $category->is_online=1;
        $category->save();

        
        $category=new \App\Models\Category();
        $category->name="Sport";
        $category->is_online=1;
        $category->save();

    }
}
