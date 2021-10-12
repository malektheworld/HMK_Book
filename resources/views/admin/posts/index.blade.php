@extends('layouts.admin')




@section('content')


<h1>Posts</h1>


<table class="table table-striped">
    <thead>
      <tr class="table-secondary">
        <th scope="col">Id</th>
        <th scope="col">Owner</th>
        <th scope="col">Category</th>
        <th scope="col">Photo</th>
        <th scope="col">title</th>
        <th scope="col">Created</th>
        <th scope="col">Updated</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
        <th scope="col">View Post</th>
        <th scope="col">Comments</th>


        


      </tr>
    </thead>
    <tbody>
        @if ($posts)
            
        @foreach ( $posts as $post )
            
        
      <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->user->name}}</td>
        <td>{{$post->category ? $post->category->name : 'uncategorized'}}</td>
        <td> <img src="{{ asset( $post->photo ? $post->photo->file : 'https://via.placeholder.com/300/09f/fff.png' ) }}" alt="" height="50px" width="50px" class="" > </td>
        <td>{{$post->title}}</td>
     

        <td>{{$post->created_at->diffForHumans()}}</td>
        <td>{{$post->updated_at->diffForHumans()}}</td>
        <td> <a href="{{route('admin.posts.edit', $post->id)}}"><i class="fas fa-edit"></i>  </a> </td>
        <td> 
          {!! Form::open( ['method'=>'DELETE' , 'action' => ['AdminPostsController@destroy', $post->id ]   ]) !!}

          <div class="form-groub row">
            <button type="submit" class="btn-danger btn-xs">
           <i class="fas fa-trash-alt" ></i> </button>
          </div>
           {!! Form::close()  !!}
          
        
        </td>

        <td><a href="{{route('home.post',$post->id)}}"> <i class="fas fa-eye"></i>  </a> </td>


        <td><a href="{{route('admin.comments.show', $post->id)}}">  <i class="fas fa-eye"></i>  </a> </td>

      </tr>

      @endforeach
      @endif
      <tr>
      
    </tbody>
  </table>

  <div class="row">

      <div class="col-sm-6 col-sm-offset-5">
          {{$posts->render()}}
      </div>
  </div>







@stop 