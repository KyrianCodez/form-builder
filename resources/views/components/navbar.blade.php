{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      x
      
    </ul>
  </div>
</nav> --}}
<nav class="navbar navbar-expand-lg">
  <div class="container">
      <a class="navbar-brand" href="index.html">
        {{-- <i class="fa fa-line-chart"></i>
        Digital Trend --}}
        
        <x-icon-logo-small {{-- class=" w-80 h-80" --}}/>
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <x-navbar-link href="{{route('index')}}" :active="request()->routeIs('index')">Home</x-navbar-link>
            </li>
            <li class="nav-item">
              <x-navbar-link  href="{{route('login')}}" :active="request()->routeIs('login')"  >Login</x-navbar-link>
            </li>
            <li class="nav-item">
              <x-navbar-link  href="{{route('register')}}" :active="request()->routeIs('register')" >Sign up</x-navbar-link>
            </li>
            @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown link
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <x-nav-link class="dropdown-item" :href="route('dashboard')">Dashboard</x-nav-link>
                <x-nav-link class="dropdown-item" >Profile</x-nav-link>
                <form method="post" action="{{ route('logout') }}">
                  @csrf
      
                  <x-nav-link class="dropdown-item" :href="route('logout')"
                          onclick="event.preventDefault();
                                      this.closest('form').submit();">
                      {{ __('Log Out') }}
                  </x-nav-link>
              </form>
              </div>
            </li>
            @endauth
          </ul>
      </div>
  </div>
</nav>