@include('includes.header') 

<body>

    <!-- Navigation -->
    @include('includes.front_nav')

    <!-- Page Content -->
    <div class="container-fluid" style="padding:10px;margin:10px;">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">
                     
                @yield('content')
            </div>

            <div class="col-md-4">

                @include('includes.front_side')
 
             
            </div>

        </div>
        <!-- /.row -->

        <hr>

     
    </div>

    <!-- /.container -->

    
        <!-- Footer -->
    @include('includes.footer')
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('js/libs.js')}}"></script>


        @yield('scripts') 
</body>

</html>
