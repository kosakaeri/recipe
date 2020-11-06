<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;
use Illuminate\Support\Facades\Auth;
use App\Material;
use App\HowTo;


class RecipeController extends Controller
{
    public function search()
    {
        return view('public.search');
    }   
    
    public function show(Request $request)
    {
        $recipe = Recipe::find($request->recipe);
        return view('public.recipes');
    }
    
    public function create()
    {
        return view('public.create');
    } 

    public function store(Request $request)
    {
        $this->validate($request, Recipe::$rules);
        $this->validate($request, Material::$rules);
        $this->validate($request, HowTo::$rules);
        
        $recipe = new Recipe;
        $recipe->title=$request->title;
        $recipe->alcohol=$request->alcohol;
        $recipe->flag=false;
        $recipe->user_id=1;//Auth::user()->id;
        $recipe->save();
        
        if (isset($form['image'])) {
        $path = $request->hasFile('image')->store('public/image');
        $recipe->image_path = basename($path);
      } else {
          $recipe->image_path = null;
      }
          
        // materialとamountが同じ数でくる前提で考える
        for ($i = 0; $i < count($request->material); $i++) {
            $recipe_material = new Material;
            $recipe_material->recipes_id = $recipe->id;
            $recipe_material->material=$request->material[$i];
            $recipe_material->amount=$request->amount[$i];
            $recipe_material->save();
        }
        
        $recipe_howto = new HowTo;
        $recipe_howto->recipes_id = $recipe->id;
        $recipe_howto->howto=$request->howto;
        $recipe_howto->save();
        
        return redirect('recipes/create');
        
    } 
    
}