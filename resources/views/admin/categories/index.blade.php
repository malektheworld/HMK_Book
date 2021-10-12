@extends('layouts.admin')













@section('content')

<h1>Categories</h1>




    <div class="col-sm-6">

            {!! Form::open(['method'=>'POST' , 'action'=>'AdminCategoriesController@store' ])    !!}
                
                    <div class="form-group">
                    {!! Form::label('name' , 'Name')           !!}
                    {!! Form::text('name', null , ['class'=>'form-control'])                                    !!}
                    </div>


                    <div class="form-group">
                        {!! Form::submit('Create Category' , ['class'=>'btn btn-primary'])         !!}
                    </div>

    </div>
    {!! Form::close()  !!}
        <div class="col-sm-6">
            @if ($categories)
                
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Created date</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category  )
                        
                  <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->created_at}}</td>
                    <td> <a href="{{route('admin.categories.edit', $category->id)}}"><i class="fas fa-edit"></i> </a> </td>

                    <td> 
                      {!! Form::open( ['method'=>'DELETE' , 'action' => ['AdminCategoriesController@destroy', $category->id ]   ]) !!}

                      <div class="form-groub row">
                        <button type="submit" class="btn-danger btn-xs">
                       <i class="fas fa-trash-alt" ></i> </button>
                      </div>
                       {!! Form::close()  !!}
                   </td>

                  </tr>
                  @endforeach
            
                 
                </tbody>
              </table>
    </div>
  @endif


@stop 