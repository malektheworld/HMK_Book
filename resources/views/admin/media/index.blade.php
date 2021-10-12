@extends('layouts.admin')












@section('content')


<h1>Media</h1>

@if ($photos)
    
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Created date</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($photos as $photo  )
            
      <tr>
        <td>{{$photo->id}}</td>
        <td> <img src="{{asset( $photo->file )}}" alt="" width="100px" height="100px"> </td>
        <td>{{$photo->created_at ? $photo->created_at : 'no date' }}</td>
        <td>
          
{!! Form::open( ['method'=>'DELETE' , 'action' => ['PhotosAdminController@destroy', $photo->id ]   ]) !!}



<div class="form-group">

    {!! Form::submit('Delete' , ['class' => 'btn btn-danger'])  !!}

</div>
{!! Form::close()  !!}

        </td>

      </tr>
      @endforeach

     
    </tbody>
  </table>
  <div class="row">

    <div class="col-sm-6 col-sm-offset-5">
        {{$photos->render()}}
    </div>
</div>
  @endif







@stop