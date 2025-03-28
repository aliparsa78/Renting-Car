<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Car<span>Book</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="car.html" class="nav-link">Cars</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
			  
			  		<li class="nav-item dropdown">
						  @if (Route::has('login'))
							@auth
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                           
							<img src="{{asset('profile/'.Auth::user()->profile_path)}}" width="40px" height="40px" style="border-radius:50%;" alt="">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
							<a href="user_profile" class="dropdown-item">
								Profile
							</a>
                        </div>
						@else
					</li>
				
	          <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
	          <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
				@endauth
			@endif

	        </ul>
	      </div>
	    </div>
	  </nav>