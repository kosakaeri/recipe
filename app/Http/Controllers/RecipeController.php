<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;
use Illuminate\Support\Facades\Auth;
use App\Material;
use App\HowTo;
use App\Alcohol;

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
        $this->validate($request, Alcohol::$rules);
        
        $recipe = new Recipe;
        $recipe->title=$request->title;
        $recipe->user_id=1;//Auth::user()->id;
        
        if (isset($form['image'])) {
        $path = $request->hasFile('image')->store('public/image');
        $recipe->image_path = basename($path);
      } else {
          $recipe->image_path = null;
      }       
      
        $recipe->save();
        // $recipe->alcohol=$request->alcohol;
        // $recipe->flag=false;

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
        
        for ($i = 0; $i < count($request->alcohol); $i++) {
        $recipe_alcohol = new Alcohol;
        $recipe_alcohol->recipes_id = $recipe->id;
        $recipe_alcohol->alcohol = $request->alcohol[$i];
        $recipe_alcohol->save();
        }
        
        return redirect('recipes/create');
        
    } 
    
}