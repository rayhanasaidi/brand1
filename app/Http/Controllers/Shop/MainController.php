<?php

namespace App\Http\Controllers\Shop;
use App\Models\Produit;
use App\Models\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $produits=Produit::all();
      //$categories=Category::where('is_online',1)->get();->3malna viewcomposer

        //dd($produits);
        return view('shop.index',compact('produits'));

    }

    public function produit(Request $request)

       {  $produit=Produit::find($request->id);
       // $categories=Category::where('is_online',1)->get();

          return view('shop.produit',compact('produit'));

                    }
    public function bycategory(Request $request){
     //$categories=Category::where('is_online',1)->get();
     $produits=Produit::where('category_id',$request->id)->get();
     return view('shop.categorie',compact('produits'));
       }
}