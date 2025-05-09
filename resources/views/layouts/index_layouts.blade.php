<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Puskesmas Paal 5</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Health Care Medical Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Novena HTML Template v1.0">
  
  <!-- theme meta -->
  <meta name="theme-name" content="novena" />

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ url('layoutswebsite', []) }}/images/Logo-Puskermas.jpg" />

  <!-- 
  Essential stylesheets
  =====================================-->
  <link rel="stylesheet" href="{{ url('layoutswebsite', []) }}/plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="{{ url('layoutswebsite', []) }}/plugins/icofont/icofont.min.css">
  <link rel="stylesheet" href="{{ url('layoutswebsite', []) }}/plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="{{ url('layoutswebsite', []) }}/plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ url('layoutswebsite', []) }}/css/style.css">

</head>

<body id="top">

<header>
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html">
				<img src="{{ url('layoutswebsite', []) }}/images/Logo-Puskermas.jpg" alt="" class="size_image">
			</a>

			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
				aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
				<span class="icofont-navigation-menu"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarmain">
				<ul class="navbar-nav ml-auto">
					
						
						
						@guest
                            @if (Route::has('login'))
								<li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
								<li class="nav-item navbar-button">
									<a href="/register" class="btn btn-main-2 btn-round-full">Register</a>
								</li>
                            @endif
                        @else
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="department.html" id="dropdown02" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">Department <i class="icofont-thin-down"></i></a>
								<ul class="dropdown-menu" aria-labelledby="dropdown02">
									<li><a class="dropdown-item" href="department.html">Departments</a></li>
									<li><a class="dropdown-item" href="department-single.html">Department Single</a></li>
									
									<li class="dropdown dropdown-submenu dropright">
										<a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0301" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>
										
										<ul class="dropdown-menu" aria-labelledby="dropdown0301">
											<li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
											<li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
										</ul>
									</li>
								</ul>
							</li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
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
                                </div>
                            </li>
                        @endguest
				</ul>
			</div>
		</div>
	</nav>
</header>


<section class="section about">
	@yield('content')
</section>
<!-- footer Start -->
<footer class="footer gray-bg">
	<div class="container">

		<div class="footer-btm py-1 mt-1">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6">
					<div class="copyright">
						Copyright &copy; 2021, Designed &amp; Developed by <a href="https://themefisher.com/">Themefisher</a>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4">
					<a class="backtop scroll-top-to" href="#top">
						<i class="icofont-long-arrow-up"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</footer>

   

    <!-- 
    Essential Scripts
    =====================================-->
    <script src="{{ url('layoutswebsite', []) }}/plugins/jquery/jquery.js"></script>
    <script src="{{ url('layoutswebsite', []) }}/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="{{ url('layoutswebsite', []) }}/plugins/slick-carousel/slick/slick.min.js"></script>
    <script src="{{ url('layoutswebsite', []) }}/plugins/shuffle/shuffle.min.js"></script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA"></script>
    <script src="{{ url('layoutswebsite', []) }}/plugins/google-map/gmap.js"></script>
    
    <script src="{{ url('layoutswebsite', []) }}/js/script.js"></script>

  </body>
  </html>
