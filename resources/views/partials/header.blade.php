<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
 

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link
        @if (Request::route()->getName()==='home')
            active-item
        @endif
        " href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link
        @if (Request::route()->getName()==='movies')
             active-item
        @endif
        " 
        href="{{route('movies')}}">Movies</a>
      </li>
    </ul>
    
  </div>
</nav>
</header>