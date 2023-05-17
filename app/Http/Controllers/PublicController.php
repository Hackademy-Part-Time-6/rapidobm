<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;

class PublicController extends Controller
{
    //
    public function index()
    {
       $ads = Ad::orderBy('created_at','desc')->take(6)->get();
       return view ('welcome',compact('ads'));
    }
    public function adsByCategory(Category $category)
    {
       $ads = $category->ads()->latest()->paginate(6);
       return view ('ad.by-category', compact('category','ads'));
    }

  


}




