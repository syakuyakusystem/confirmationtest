<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class ContactController extends Controller
{
  public function index()
  {
    $categories = Category::all();
    return view('index',compact('categories'));
  }

  public function order(Request $request)
  {
    $contact =$request->all();
    // dd($contact);
    return view('order');
  }


}