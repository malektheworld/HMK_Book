@extends('layouts.admin') 







@section('content')
<h1>Edit Users</h1>
<div class="row">
<div class="col-sm-3">

        <img src="{{ asset( $user->photo ? $user->photo->file : 'https://via.placeholder.com/300/09f/fff.png' )}} " 
        
        alt="" class="img-responsive img-rounded">

</div>

<div class="col-sm-9">



{!! Form::model($user, ['method'=>'Patch', 'action'=>['AdminUsersController@update', $user->id ] , 'files'=>true]    )            !!}

<div class="form-group">
    {!! Form::label('name' , 'Name') !!}
    {!! Form::text('name' , null , ['class'=>'form-control']) !!}

</div>
<div class="form-group">
    {!! Form::label('email' , 'Email') !!}
    {!! Form::email('email' , null , ['class'=>'form-control']) !!}

</div>

<div class="form-group">
    {!! Form::label('role_id' , 'Role') !!}
{!! Form::select('role_id' ,  $roles, null , ['class'=>'form-control']) !!}

</div>
<div class="form-group">
    {!! Form::label('is_active' , 'Status') !!}
    {!! Form::select('is_active' , array(1 =>'Active', 0 =>'Not Active'),null, ['class'=>'form-control']) !!}

</div>
<div class="form-group">
    {!! Form::label('photo_id' , 'Photo') !!}

    {!! Form::file('photo_id',null   , ['class'=>'form-control']) !!}

</div>



<div class="form-group">
    {!! Form::label('password' , 'Password') !!}
    {!! Form::password('password'  , ['class'=>'form-control']) !!}

</div>


<div class="form-group">
    {!! Form::submit('Edit User'  , ['class'=>'btn btn-primary col-sm-6']) !!}

</div>


    {!! Form::close() !!}


    {!! Form::open(['method'=>'DELETE' ,'action' =>['AdminUsersController@destroy', $user->id] ])    !!}

    <div class="form-group">
        {!!   Form::submit('Delete user' , ['class'=>'btn btn-danger pull-right  col-sm-6 '])             !!}

    </div>
</div>
</div> 


<div class="row">

    @include('includes.form_errors')

<div>






@stop