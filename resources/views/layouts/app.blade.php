<!-- View Master - Base para outras View construidas por extenção desta. -->
<!DOCTYPE HTML>
<!--
	Photon by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		
		<meta charset="utf-8" />
		<meta name="description" content="Cidade Verde" />
		<meta name="Author" content="Maytê Araújo" />
		<meta name="keywords" content="Cidade Verde, zero waste, Ecoponto, Reciclagem" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

		<!-- CSRF Token -->
			<meta name="csrf-token" content="{{ csrf_token() }}">

		<!-- Tiutulo da Página -->
			
			<title>
				Cidade Verde @yield('title')
			</title>

		<!-- Styles -->
			<link href="{{ asset('css/app.css') }}" rel="stylesheet">
			<link rel="stylesheet" href="{{ asset('css/main.css') }}" />
			<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-grid.css') }}">
			<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-reboot.css') }}">
			<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
			<noscript><link rel="stylesheet" href="{{ asset('css/noscript.css') }}" /></noscript>
	</head>
	<body class="is-preload">
		<div id="app">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container-fluid">

					<a class="navbar-brand" href="{{ route('inicio') }}"><img src="{{ asset('images/logo.png') }}" alt="Logo"></a>

					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<!-- Menu -->                    				
						<div class="collapse navbar-collapse" id="navbarSupportedContent">

							<!-- Lado esquerdo da barra de navegação -->	
								<ul class="navbar-nav me-auto mb-2 mb-lg-0">
									<li class="nav-item">
										<a class="nav-link" aria-current="page" href="{{ route('inicio') }}">Home</a> 
									</li>
									
									<li class="nav-item">
										<a class="nav-link" href="/contato">Fale Conosco</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" href="/ponto_coleta">Pontos de Coleta</a>
									</li>
								<!--
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
											Reciclagem
										</a>
										<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
											<li><a class="dropdown-item" href="#">Papel</a></li>
											<li><a class="dropdown-item" href="#">Plástico</a></li>
											<li><a class="dropdown-item" href="#">Vidro</a></li>
											<li><hr class="dropdown-divider"></li>
											<li><a class="dropdown-item" href="#">Outros</a></li>
										</ul>
									</li>-->
								</ul>

							<!-- Lado Direiro da barra de navegação -->
								<ul class="navbar-nav ms-auto">
									<!-- Authentication Links -->
									@guest
										@if (Route::has('login'))
											<li class="nav-item">
												<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
											</li>
										@endif

										@if (Route::has('register'))
											<li class="nav-item">
												<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
											</li>
										@endif
									@else
										<li class="nav-item dropdown">
											<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
												{{ Auth::user()->name }}
											</a>

											<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

												<a class="dropdown-item" href="{{ route('home') }}" >												
													{{ __('Dashboard') }}
												</a>												

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
			<main class="py-4">
				@yield('content')
			</main>
		</div>
       
		<!-- Footer -->
			<section id="footer">
				<ul class="icons">
					<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
					<li><a href="#" class="icon solid alt fa-envelope"><span class="label">Email</span></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; Cidade Verde</li>
					<li>{{ date('Y') }} </li>
					<li>Design: <a href="http://html5up.net" target="_blank" rel="noopener noreferrer">HTML5 UP</a></li>
				</ul>
			</section>

		<!-- Scripts -->
			<script src="{{ asset('js/jquery.min.js') }}"></script>
			<script src="{{ asset('js/jquery.scrolly.min.js') }}"></script>
			<script src="{{ asset('js/browser.min.js') }}"></script>
			<script src="{{ asset('js/breakpoints.min.js') }}"></script>
			<script src="{{ asset('js/util.js') }}"></script>
			<script src="{{ asset('js/main.js') }}"></script>
			<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
			@yield('scripts')
		
	</body>
</html>