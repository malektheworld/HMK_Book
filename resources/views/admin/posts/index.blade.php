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
        <th scope="col">body</th>
        <th scope="col">Created</th>
        <th scope="col">Updated</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
        


      </tr>
    </thead>
    <tbody>
        @if ($posts)
            
        @foreach ( $posts as $post )
            
        
      <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->user->name}}</td>
        <td>{{$post->category_id}}</td>
        <td> <img src="{{ asset( $post->photo ? $post->photo->file : 'https://via.placeholder.com/300/09f/fff.png' ) }}" alt="" height="50px" width="50px" class="" > </td>
        <td>{{$post->title}}</td>
        <td>{{$post->body}}</td>
     

        <td>{{$post->created_at->diffForHumans()}}</td>
        <td>{{$post->updated_at->diffForHumans()}}</td>
        <td> <a href="{{route('admin.posts.edit', $post->id)}}"><i class="fas fa-user-edit"></i> Edit </a> </td>
        <td> <a style="color: red" href="{{route('admin.posts.destroy', $post->id)}}"><i class="fas fa-user-times"></i> Delete </a> </td>


      </tr>

      @endforeach
      @endif
      <tr>
      
    </tbody>
  </table>







@stop 