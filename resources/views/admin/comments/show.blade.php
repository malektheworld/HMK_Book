@extends('layouts.admin')











@section('content')

  
<h1>Comments</h1>


      
    
  <table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">post_id</th>
        <th scope="col">author</th>
        <th scope="col">Email</th>
        <th scope="col">Body</th>
        <th scope="col">Created at</th>

      </tr>
    </thead>
    <tbody>
      @foreach ($comments as $comment )

      <tr>
            
          
        <td> {{($comment->id)}} </td>
        <td> {{$comment->post_id}} </td>
        <td> {{$comment->author}} </td>
        <td> {{$comment->email}} </td>
        <td> {{$comment->body}} </td>
        <td> {{$comment->created_at}} </td>

        <td> <a href="{{route('home.post' , $comment->post->id )}} "> View Post <i class="fas fa-eye"></i></a>  </td>

 <td>

@if ($comment->is_active==1)
        
{!! Form::open(['method'=>'PATCH' , 'action'=>['PostCommentsController@update', $comment->id ]])    !!}

<input type="hidden" name="is_active" value="0">


<div class="form-group">
    {!! Form::submit('Unapprove' , ['class'=>'btn btn-warning'])   !!}
</div>







{!! Form::close()         !!}
@else

{!! Form::open(['method'=>'PATCH' , 'action'=>['PostCommentsController@update', $comment->id ]])    !!}

<input type="hidden" name="is_active" value="1">


<div class="form-group">
    {!! Form::submit('approve' , ['class'=>'btn btn-success'])   !!}
</div>






{!! Form::close()         !!}
        
@endif

 </td>
 <td>
  {!! Form::open(['method'=>'DELETE' , 'action'=>['PostCommentsController@destroy', $comment->id ]])    !!}

  
  
  <div class="form-group">
      {!! Form::submit('Delete' , ['class'=>'btn btn-danger'])   !!}
  </div>
 </td>
 
 @endforeach
      </tr>

     
    </tbody>
  </table>




  





@stop