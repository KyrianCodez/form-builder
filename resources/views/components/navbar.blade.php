<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <x-responsive-nav-link :href="route('index')" :active="request()->routeIs('index')" class="nav-link" >Home <span class="sr-only">(current)</span></x-responsive-nav-link>
      </li>
      <li class="nav-item">
        <x-responsive-nav-link  :href="route('login')" :active="request()->routeIs('login')" class="nav-link" >Login<span class="sr-only">(current)</span></x-responsive-nav-link>
      </li>
      <li class="nav-item">
        <x-responsive-nav-link  :href="route('register')" :active="request()->routeIs('register')" class="nav-link" >Sign up<span class="sr-only">(current)</span></x-responsive-nav-link>
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
</nav>