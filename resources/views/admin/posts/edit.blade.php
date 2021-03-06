@extends('layouts.admin')







@section('content')


<h1>Edit Posts</h1>



<div class="row">
    <div class="col-sm-3">

        <img src="{{asset($post->photo->file) }}" alt="" class="img-responsive">
    </div>
    
    <div class="col-sm-9">

{!! Form::model($post,['method'=>'PATCH', 'action'=>['AdminPostsController@update' , $post->id ] , 'files'=>true])               !!}

<div class="form-group">
    {!! Form::label('title' , 'Title') !!}
    {!! Form::text('title' , null , ['class'=>'form-control']) !!}

</div>

<div class="form-group">
    {!! Form::label('category_id' , 'Role') !!}
{!! Form::select('category_id' , $categories, null , ['class'=>'form-control']) !!}

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
    {!! Form::submit('Update Post'  , ['class'=>'btn btn-primary col-sm-6']) !!}

</div>


    {!! Form::close() !!}

    {!! Form::open(['method'=>'DELETE' ,'action' =>['AdminPostsController@destroy', $post->id] ])    !!}

    <div class="form-group">
        {!!   Form::submit('Delete Post' , ['class'=>'btn btn-danger pull-right  col-sm-6 '])             !!}

    </div>
{!! Form::close() !!}
</div>
</div>

    @include('includes.form_errors')





@stop