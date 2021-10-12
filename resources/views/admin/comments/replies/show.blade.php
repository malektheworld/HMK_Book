@extends('layouts.admin')











@section('content')

  
<h1>Replies</h1>


      
    
  <table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">reply_id</th>
        <th scope="col">author</th>
        <th scope="col">Email</th>
        <th scope="col">Body</th>
        <th scope="col">Created at</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($replies as $reply )

      <tr>
            
          
        <td> {{($reply->id)}} </td>
        <td> {{$reply->comment_id}} </td>
        <td> {{$reply->author}} </td>
        <td> {{$reply->email}} </td>
        <td> {{$reply->body}} </td>
        <td> {{$reply->created_at}} </td>

        <td> <a href="{{route('home.post' , $reply->comment->post->id )}} "> View Post <i class="fas fa-eye"></i></a>  </td>


 <td>

@if ($reply->is_active==1)
        
{!! Form::open(['method'=>'PATCH' , 'action'=>['CommentRepliesController@update', $reply->id ]])    !!}

<input type="hidden" name="is_active" value="0">


<div class="form-group">
    {!! Form::submit('Unapprove' , ['class'=>'btn btn-warning'])   !!}
</div>







{!! Form::close()         !!}
@else

{!! Form::open(['method'=>'PATCH' , 'action'=>['CommentRepliesController@update', $reply->id ]])    !!}

<input type="hidden" name="is_active" value="1">


<div class="form-group">
    {!! Form::submit('approve' , ['class'=>'btn btn-success'])   !!}
</div>






{!! Form::close()         !!}
        
@endif

 </td>
 <td>
  {!! Form::open(['method'=>'DELETE' , 'action'=>['CommentRepliesController@destroy', $reply->id ]])    !!}

  
  
  <div class="form-group">
      {!! Form::submit('Delete' , ['class'=>'btn btn-danger'])   !!}
  </div>
 </td>
 
 @endforeach
      </tr>

     
    </tbody>
  </table>




  





@stop