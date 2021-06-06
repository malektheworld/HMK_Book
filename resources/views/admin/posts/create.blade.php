@extends('layouts.admin') 







@section('content')
<h1>Craete Posts</h1>



{!! Form::open(['method'=>'Post', 'action'=>'AdminPostsController@store' , 'files'=>true])               !!}

<div class="form-group">
    {!! Form::label('title' , 'Title') !!}
    {!! Form::text('title' , null , ['class'=>'form-control']) !!}

</div>

<div class="form-group">
    {!! Form::label('category_id' , 'Role') !!}
{!! Form::select('category_id' , [1 =>'PHP',2=>'JS',3=>'WebDev'] , null , ['class'=>'form-control']) !!}

</div>


<div class="form-group">
    {!! Form::label('photo_id' , 'Photo') !!}

    {!! Form::file('photo_id',null   , ['class'=>'form-control']) !!}

</div>

<div class="form-group">
    {!! Form::label('body' , 'Description') !!}
    {!! Form::textarea('body' , null , ['class'=>'form-control', 'row'=>3]) !!}

</div>



<div class="form-group">
    {!! Form::submit('Create Post'  , ['class'=>'btn btn-primary']) !!}

</div>


    {!! Form::close() !!}


    @include('includes.form_errors')








@stop