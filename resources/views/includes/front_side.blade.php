<style>
  .r1{
    color: red ;
  }
</style>

<div class="card border-dark mb-3" style="max-width: 18rem;margin:10px;">
    <div class=" r1" >
        <h4> Blog Srearch</h4> 
</div>
        <div class="card-body">

          {!! Form::open(array('url' => '/search', 'method' => 'get'))   !!}
        <div class="input-group mb-3">
            <input name="search" class="form-control" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button type="submit"><span class="input-group-text"><i class="fa fa-search"></i></span> </button> 
              </div> 
          </div>
       


    </div>
{!! Form::close() !!} 
</div>
<!-- Blog Categories Well -->
    <div class="card border-dark mb-3" style="width: 18rem;margin:10px; ">
        <div class="card-header">
            <h4> Blog Categories </h4> 
    </div>
    <ul class="list-group list-group-flush">
      @foreach ($categories as $cat )
                    
     <a href="{{action('HomeController@cat', $cat->id)}}">
        <li class="list-group-item"> {{ $cat->name  }}</li> 
    </a>
       @endforeach

    </ul>
  </div>

