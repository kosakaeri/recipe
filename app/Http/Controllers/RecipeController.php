<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    
}
