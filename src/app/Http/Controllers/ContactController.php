<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
  public function index()
  {
    $categories = Category::all();
    $contacts = Contact::with('category')->get();
    return view('index',compact('categories','contacts'));
  }
  

  public function order(Request $request)
  {
    $contact =$request->all();
    // dd($contact);

    $category = Category::findOrFail($contact['category']);
    $contact['category_content'] = $category->content;

    $categories = Category::all();

    return view('order', compact('contact','categories'));
  }
  




}