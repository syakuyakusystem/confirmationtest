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
  

  public function order(ContactRequest $request)
  {

    $contact =$request->all();

    $category = Category::findOrFail($contact['category']);
    $contact['category_content'] = $category->content;

    $categories = Category::all();

    return view('order', compact('contact','categories'));
    
  }
  

  public function store(ContactRequest $request)
  {
    $contact =$request->all();


    $contact = Contact::create($request->all());

    return view('thanks', compact('contact'));
  }

  public function login()
  {
    return view('auth.login');
  }

  public function register()
  {
    return view('auth.register');
  }

  public function home()
  {
    return view('home');
  }

  // public function thanks()
  // {
  //   return view('thanks');
  // }

  
  public function admin(Request $request)
  {
    $contact = new Contact();
    $data = $contact->all();

    $users = Contact::paginate(7);
   
    return view('admin', ['users' => $users, 'data' => $data]);
  }

  // public function search(Request $request)
  // {
  //   $contacts = Contact::with('category')->CategorySearch($request->category_id)->KeywordSearch($request->keyword)->get();
  //   $categories = Category::all();

  //   return view('admin', compact('contacts', 'categories'));
  // }


  

}