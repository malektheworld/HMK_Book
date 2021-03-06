@extends('layouts.blog-post')










@section('content')



                <!-- Blog Post -->

                <!-- Title -->
                <h2> <span class="badge badge-pill badge-dark">   {{$post->title}}  </span></h2>

                <!-- Author -->
                <p class="lead">
                    by {{$post->user->name}} <i class="fa fa-id-card"></i>
                </p>

                <hr>

                <!-- Date/Time -->
                <p><i class="fa fa-history"> </i> {{$post->created_at->diffForHumans()}}</p>

                <hr>

                <!-- Preview Image -->
                <img class="img-fluid" src="{{asset($post->photo->file)}}" alt="">

                <hr>

                <!-- Post Content -->
                <p class="lead"> {{$post->body}} </p>

                <hr>

                <!-- Blog Comments -->
                <div id="disqus_thread"></div>
                <script>
                    /**
                    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                    /*
                    var disqus_config = function () {
                    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                    };
                    */
                    (function() { // DON'T EDIT BELOW THIS LINE
                    var d = document, s = d.createElement('script');
                    s.src = 'https://hmkbook.disqus.com/embed.js';
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                    })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


                <script id="dsq-count-scr" src="//hmkbook.disqus.com/count.js" async></script>


@stop 

@section('scripts')
<script>
    $('#toggle-reply').click(function () {
        $(this).next().slideToggle('slow') ;

    });
</script>



@stop