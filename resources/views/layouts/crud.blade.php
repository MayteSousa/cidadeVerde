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
			<title>{{ config('app.name', 'Cidade Verde') }}</title>
			@yield('title')
		<!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
      <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-grid.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-reboot.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
      <noscript><link rel="stylesheet" href="{{ asset('css/noscript.css') }}" /></noscript>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="http://maps.google.com/maps/api/js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>

      <style type="text/css">
        #mymap {
            
            height: 500px;
        }
      </style>

      <link rel='stylesheet' href='{{ asset('assets/css/style.css') }}' type='text/css' />
      <link rel='stylesheet' href='{{ asset('assets/css/jquery.mmenu.css') }}' type='text/css' />
      <link rel='stylesheet' href='{{ asset('assets/css/responsive.css') }}' type='text/css' />
      <link rel='stylesheet' href='//fonts.googleapis.com/css?family=Lato:400,700' type='text/css' />
      <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.11.2/css/all.css?wpfas=true' type='text/css' />
      <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.11.2/css/v4-shims.css?wpfas=true' type='text/css' />

    @yield('styles')
    
  </head>


  
  <body class="is-preload">
    <div id="app">
    	@include('partials.menu') 					
	  </div>  

    <div id="ds-container">

        
        <main class="py-4">
          @yield('content')
        </main>          


          @includeWhen(request()->is('/'), 'partials.about')

          @include('partials.footer')

    </div>

    <!-- Scripts -->
      <script src="{{ asset('js/jquery.min.js') }}"></script>
      <script src="{{ asset('js/jquery.scrolly.min.js') }}"></script>
      <script src="{{ asset('js/browser.min.js') }}"></script>
      <script src="{{ asset('js/breakpoints.min.js') }}"></script>
      <script src="{{ asset('js/util.js') }}"></script>
      <script src="{{ asset('js/main.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://unpkg.com/@coreui/coreui@2.1.16/dist/js/coreui.min.js"></script>
      <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
      <script src="//cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
      <script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
      <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
      <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
      <script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
      <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
      <script src="{{ asset('js/main.js') }}"></script>
      
      <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
      
    @yield('scripts')

  </body>
</html>