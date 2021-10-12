@extends('layouts.admin')











@section('content')
<h1>Replies</h1>


  @if ($replies)
      
    
  <table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">comment_id</th>
        <th scope="col">author</th>
        <th scope="col">Email</th>
        <th scope="col">Body</th>
        <th scope="col">Created at</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($replies as $reply )

        <td> {{$reply->id}} </td>
        <td> {{$reply->comment_id}} </td>
        <td> {{$reply->author}} </td>
        <td> {{$reply->email}} </td>
        <td> {{$reply->body}} </td>
        <td> {{$reply->created_at}} </td>

        <td> <a href="{{route('home.post' , $reply->comment->id )}} "> View Post <i class="fas fa-eye"></i></a>  </td>

 <td>
@if ($reply->is_active==1)
        
{!! Form::open(['method'=>'PATCH' , 'action'=>['PostreplysController@update', $reply->id ]])    !!}

<input type="hidden" name="is_active" value="0">


<div class="form-group">
    {!! Form::submit('Unapprove' , ['class'=>'btn btn-warning'])   !!}
</div>






{!! Form::close()         !!}

@else
{!! Form::open(['method'=>'PATCH' , 'action'=>['PostreplysController@update', $reply->id ]])    !!}

<input type="hidden" name="is_active" value="1">


<div class="form-group">
    {!! Form::submit('approve' , ['class'=>'btn btn-success'])   !!}
</div>






{!! Form::close()         !!}
        
@endif

 </td>
 <td>
  {!! Form::open(['method'=>'DELETE' , 'action'=>['PostreplysController@destroy', $reply->id ]])    !!}

  
  
  <div class="form-group">
      {!! Form::submit('Delete' , ['class'=>'btn btn-danger'])   !!}
  </div>
 </td>
      </tr>
      @endforeach

    
    </tbody>
  </table>

  @endif








@stop