<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produit;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produit= new \App\Models\Produit();
        $produit->name="simpy";
        $produit->prixht=25;
        $produit->description=" tshirt simpson";
        $produit->photo_principale="simpy.jpg";
        $produit->updated_at=25_12_2021;
        $produit->created_at=25_12_2021;
        $produit->category_id=1;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->name="london tshirt";
        $produit->prixht=25;
        $produit->description=" tshirt from london";
        $produit->photo_principale="london.jpg";
        $produit->updated_at=25_12_2021;
        $produit->created_at=25_12_2021;
        $produit->category_id=2;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->name="tshirt_enfant";
        $produit->prixht=25;
        $produit->description="tshirt for kids";
        $produit->photo_principale="enfant.jpg";
        $produit->updated_at=25_12_2021;
        $produit->created_at=25_12_2021;
        $produit->category_id=5;
        $produit->save();
 
        $produit= new \App\Models\Produit();
        $produit->name="tshirt_neon";
        $produit->prixht=25;
        $produit->description="tshirt that shine from behind";
        $produit->photo_principale="neon.jpg";
        $produit->updated_at=25_12_2021;
        $produit->created_at=25_12_2021;
        $produit->category_id=5;
        $produit->save();
       
        $produit= new \App\Models\Produit();
        $produit->name="simpson";
        $produit->prixht=25;
        $produit->description=" tshirt from simpson comic";
        $produit->photo_principale="simpson.jpg";
        $produit->updated_at=25_12_2021;
        $produit->created_at=25_12_2021;
        $produit->category_id=1;
        $produit->save();

     
 
        $produit= new \App\Models\Produit();
        $produit->name="fleurdelys";
        $produit->prixht=25;
        $produit->description=" tshirt on red";
        $produit->photo_principale="fleur.jpg";
        $produit->updated_at=25_12_2021;
        $produit->created_at=25_12_2021;
        $produit->category_id=2;
        $produit->save();

    } 
}
