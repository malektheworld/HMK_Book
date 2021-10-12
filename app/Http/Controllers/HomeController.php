<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests;
use App\Mail\Contact;
use App\Post;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(2) ; 
        $categories = Category::all() ;
        return view('front.home' , compact('posts' , 'categories'));
    }
   
/*
    public function contact(Request $request ) {


     
     // Mail::to($request->email)->send(new Contact());


     
        return view('/') ;
    }*/
  

    public function search(Request $request) {
      $categories = Category::all() ;
          $search = $request['search'];
      $posts = Post::where('title', 'like' ,'%'.$search.'%'  )->paginate(2);
     
     
      
      
      return view('front.home' , compact('posts', 'categories')) ; 


    }
    public function cat($id) {

      $posts = Post::where('category_id', $id  )->paginate(2) ; 
      $categories = Category::all();
      return view('front.home' , compact('posts' , 'categories'));
      
    }
}

