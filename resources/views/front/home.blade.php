@extends('layouts.blog-home')

@section('content')
<div class="container-fluid"  style="padding:10px;">


<div class="row">

    <div class="col-md-8">
        

        @foreach ($posts as $post )


        <div class="container">
            <div class="card-body">
              <h5 class="card-title"><span class="badge badge-pill badge-dark"> {{strtoupper( $post->title)}} </span></h5>
              <p>
                by {{$post->user->name}}
                <i class="fa fa-id-card"></i>
            </p>
              <p class="card-text"><small class="text-muted"><i class="fa fa-history"> </i>   {{$post->created_at->diffForHumans()}} </small></p>
            </div>
            <img class="rounded float-left float-right card-img-bottom" src="{{ asset( $post->photo ? $post->photo->file : 'https://via.placeholder.com/300/09f/fff.png' ) }}" alt="" height="300px" width="600px">
            
            <p class="card-text">  {!! str_limit($post->body, 200)  !!}</p> 
            <a class="btn btn-primary" href="{{route('home.post',$post->id)}}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

          </div>
            
       
        <!-- First Blog Post -->
       

        <hr>
        @endforeach
      

       <!-- paggination -->
     <div class="row justify-content-center" style="margin-left: 200px;">
       <div class="col-sm-6 ">
         {{$posts->links()}}
       </div>
     </div>

      

    </div>

    <!-- Blog Sidebar Widgets Column -->
    <div class="col-md-4">
      

            @include('includes.front_side')

       

    </div>

</div>
<!-- /.row -->

</div>
@endsection
