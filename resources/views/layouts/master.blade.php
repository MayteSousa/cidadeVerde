<!DOCTYPE HTML>
<!--
	Photon by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Cidade Verde</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-grid.css">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-reboot.css">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <div class="container-fluid">

		    <a class="navbar-brand" href="{{ route('home') }}"><img src="assets/images/logo.png" alt="Logo"></a>		    
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link {{ (Route::current()->getName() == 'home' ? 'active' : '') }} " aria-current="page" href="{{ route('home') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ (Route::current()->getName() == 'site.ecoponto' ? 'active' : '') }} " href="{{ route('site.ecoponto') }}">Ecoponto</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link {{ (Route::current()->getName() == 'site.contato' ? 'active' : '') }} " href="{{ route('site.contato') }}">Contato</a>
                </li>
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
              </li>
            </ul>
            <form class="d-flex">
                     <ul class="actions special">
                      <li><a href="cadastro.html" class="button scrolly">Cadastre-se</a></li>
                      <li><a href="login.html"class="button scrolly">Login</a></li>
                  </ul>
            </form>
          </div>
        </div>
      </nav>

        @yield('content')

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
                    <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
				</ul>
			</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script type="text/javascript" src="assets/js/bootstrap.js"></script>

	</body>
</html>