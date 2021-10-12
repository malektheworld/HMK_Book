<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Post;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{


    public function index() {
        $postcount = Post::count() ;
        $catcount = Category::count() ;
        $commentcount = Comment::count() ;
        $userscount = User::count() ;



        return view('admin.index' , compact('postcount', 'catcount' , 'commentcount' ,'userscount') ) ; 
    }

}
