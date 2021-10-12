

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <img src="{{asset('images/hmk.jpg')}}" width="100px" height="50px">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/sendemail/')}}">Contact Us</a>
        </li>



        @if (Auth::guest()) 

        <li class="nav-item">
            <a href="{{url('/login' )}}" class="nav-link"> Login </a> </li>

        <li class="nav-item">
            <a href="{{url('/register')}}" class="nav-link"> Register </a> </li>
            @else 
            <li class="nav-item">
            <a href="{{url('/logout' )}}" class="nav-link"> Logout </a> </li>
            <li class="nav-item">
            <a href="{{url('/admin')}}" class="nav-link"> Admin </a> </li>
  
  
  
  
             @endif
  
      </ul>
    </div>
  
  
  </nav>


