<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use Illuminate\Support\Facades\Auth;

class PostCommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comments = Comment::paginate(2) ;
        return view('admin.comments.index', compact('comments')) ; 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user = Auth::user() ;
        $data = [
            'post_id' => $request->post_id ,
            'author' => $user->name ,
            'email' => $user->email ,
            'photo' => $user->photo->file ,
            'body' => $request->body 

        ] ;

        Comment::create($data);


        $request->session()->flash('comment_message' , 'Your message has been sumbitted') ;


        return redirect()->back()  ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     //  $post = Posts::findOrFail(1) ;
     //  $comments = $post->comments; 
      //  echo $comments = Posts::find(1)->comments;
      $comments = Post::find(1)->comments;
       return view('admin.comments.show' , compact('comments')) ;
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        Comment::findOrFail($id)->update($request->all()) ;
        return redirect('/admin/comments') ; 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Comment::find($id)->delete() ; 
        return redirect()->back() ; 

    }
}
