<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Photo;

class PhotosAdminController extends Controller
{
    //


    public function index () {

        $photos = Photo::paginate(5); 

        return view('admin.media.index', compact('photos')) ; 
    }

    public function create() {



        return view('admin.media.create') ;
    }


    public function store(Request $request) {

        $file = $request->file('file') ; 
        $name = time() . $file->getClientOriginalName() ;
        $file->move('images' , $name) ; 
        Photo::create(['file'=>$name]) ;
    }

    public function destroy($id) {

      $photos =    Photo::find($id) ;
      unlink(public_path(). $photos->file);
      $photos->delete() ;
      return redirect('/admin/media') ;


    }
}
