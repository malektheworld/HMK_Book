<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route ;



Route::get('/','HomeController@index');
Route::get('/sendemail','SendEmailController@index');
Route::post('/sendemail/send','SendEmailController@send');


Route::get('/search','HomeController@search');
Route::get('/cat/{id}' ,'HomeController@cat' ) ;



Route::get('/logout', 'Auth\LoginController@logout');
Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/post/{id}', ['as' => 'home.post', 'uses'=> 'AdminPostsController@post'  ]  );





Route::group( [
        'middleware' => ['admin' ]]  , function() {

    Route::get('/admin' , 'AdminController@index') ; 
    
    
        Route::resource('/admin/users','AdminUsersController',['names'=> [
            'index' => 'admin.users.index',
            'create' => 'admin.users.create',
            'store' => 'admin.users.store' ,
            'edit'  =>  'admin.users.edit' ,
            'delete'  =>  'admin.users.destroy'

    ]] ) ;
        Route::resource('/admin/posts','AdminPostsController',['names'=>[

            'index' => 'admin.posts.index',
            'create' => 'admin.posts.create',
            'store' => 'admin.posts.store' ,
            'edit'  =>  'admin.posts.edit' ,
            'delete'  =>  'admin.posts.destroy' ,
            'show'   => 'admin.comments.show'


        ]] ) ;






        Route::resource('admin/categories', 'AdminCategoriesController', ['names' => [

            'index' => 'admin.categories.index',
            'create' => 'admin.categories.create',
            'store' => 'admin.categories.store' ,
            'edit'  =>  'admin.categories.edit' ,
            'delete'  =>  'admin.categories.destroy' 


             
        ]]
    
    
    
    );
  
        Route::resource('admin/media', 'PhotosAdminController' , ['names' => [


            'index' => 'admin.media.index',
            'create' => 'admin.media.create',
            'store' => 'admin.media.store' ,
            'edit'  =>  'admin.media.edit' ,
            'delete'  =>  'admin.media.destroy'



        ]]);





        Route::resource('/admin/comments', 'PostCommentsController' , ['names' => [


            'index' => 'admin.comments.index',
            'create' => 'admin.comments.create',
            'store' => 'admin.comments.store' ,
            'edit'  =>  'admin.comments.edit' ,
            'delete'  =>  'admin.comments.destroy' ,
            'show'    => 'admin.comments.replies.show'


        ]]);



        Route::resource('/admin/comments/replies', 'CommentRepliesController' , ['names' => [
            
            'index' => 'admin.replies.index',
            'create' => 'admin.replies.create',
            'store' => 'admin.replies.store' ,
            'edit'  =>  'admin.replies.edit' ,
            'delete'  =>  'admin.replies.destroy'



        ]]);


 
}  );

Route::group(['middleware'=>'auth'] , function() {

    Route::post('comment/reply' , 'CommentRepliesController@createReply') ;
}  )  ;

// facebook login 
Route::get('/redirect/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('/callback/facebook', 'Auth\LoginController@handleProviderCallback');
//google login
Route::get('/redirect/google', 'Auth\LoginController@redirectToProviderGoogle');
Route::get('/callback/google', 'Auth\LoginController@handleProviderCallbackGoogle');


