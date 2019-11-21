
	<!-- START NAV -->
	<nav class="navbar">
	    <div class="container">
	        <div class="navbar-brand">
	            <a class="navbar-item" href="{{url('/')}}">
                    Loofow
                </a>
	            <span class="navbar-burger burger" data-target="navbarMenu">
	            <span></span>
	            <span></span>
	            <span></span>
	            </span>
	        </div>
	        <div id="navbarMenu" class="navbar-menu">
	            <div class="navbar-end">
	            	<!-- Authentication Links -->
	                <a href="{{url('/')}}" class="navbar-item is-active">
	                        Home
	                    </a>
	                @guest
	                <a class="navbar-item is-active" href="{{url('/login')}}">
	                        Login
	                    </a>
	                <a class="navbar-item is-active" href="{{url('/register')}}">
	                        Register
	                    </a>
	                @else
	                <div class="navbar-item has-dropdown is-hoverable">
	                    <a class="navbar-link">
	                            {{ Auth::user()->name }}
	                        </a>
	                    <div class="navbar-dropdown">
	                        <a class="navbar-item" href="{{url('/dashboard')}}">
	                                Dashboard
	                            </a>
	                        <a class="navbar-item" href="{{url('/profile')}}">
	                                Profile
	                            </a>
	                        <a class="navbar-item" href="{{url('/create-post')}}">
	                                Create Post
	                            </a>
	                        <hr class="navbar-divider">
	                        <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
	                    </div>
	                </div>
	                @endguest
	            </div>
	        </div>
	    </div>
	</nav>
	<!-- END NAV -->
