@extends('layouts.admin')




@section('content')

<h1>Users </h1>


<table class="table table-striped">
    <thead>
      <tr class="table-secondary">
        <th scope="col">Id</th>
        <th scope="col">Photo</th>

        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Role</th>
        <th scope="col">Active</th>
        <th scope="col">Created</th>
        <th scope="col">Updated</th>
        <th scope="col">Edit</th>
        


      </tr>
    </thead>
    <tbody>
        @if ($users)
            
        @foreach ( $users as $user )
            
        
      <tr>
        <td>{{$user->id}}</td>
        <td> 
             <img width="50px;" height="50px" src="{{ asset( $user->photo ? $user->photo->file : 'https://via.placeholder.com/300/09f/fff.png' ) }}" alt="">
          </td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->role['name']}}</td>
        <td>
            {{$user->is_active ==1 ? 'Active': 'Not Active' }}
            
           </td>
           

        <td>{{$user->created_at->diffForHumans()}}</td>
        <td>{{$user->updated_at->diffForHumans()}}</td>
        <td> <a href="{{route('admin.users.edit', $user->id)}}"><i class="fas fa-user-edit"></i></a> </td>

      </tr>

      @endforeach
      @endif
      <tr>
      
    </tbody>
  </table>







@stop 