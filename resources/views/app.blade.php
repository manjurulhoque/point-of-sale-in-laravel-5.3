<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Point Of Sale Using Laravel 5.3</title>

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>

  @yield('stylesheet')

	<!-- nanoScroller -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/nanoScroller/nanoscroller.css') }}" />


	<!-- FontAwesome -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}" />

	<!-- Material Design Icons -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/material-design-icons/css/material-design-icons.min.css') }}" />

	<!-- Google Prettify -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/google-code-prettify/prettify.css') }}" />
	<!-- Main -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/_con/css/_con.min.css') }}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
  <!-- Custom -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/_con/css/custom.css') }}" />

  <script type="text/javascript" src="{{ asset('assets/jquery/jquery.min.js') }}"></script>

	@yield('scripts')
</head>
<body>
	<nav class="navbar-top">
    <div class="nav-wrapper">

      <!-- Sidebar toggle -->
      <a href="#" class="yay-toggle">
        <div class="burg1"></div>
        <div class="burg2"></div>
        <div class="burg3"></div>
      </a>
      <!-- Sidebar toggle -->

      <!-- Logo -->
      <a href="{{ route('/') }}" class="brand-logo">
        <img src="images/pos.png" alt="POS">
      </a>
      <!-- /Logo -->

      <!-- Menu -->
      <ul>
        <li class="user">
          @if (Auth::guest())
            <li><a href="{{ url('/auth/login') }}">Login</a></li>
          @else

            <script type="text/javascript">
              $(".yay-toggle").sideNav();
            </script>
            <a class="dropdown-button" href="#!" data-activates="user-dropdown">
              <img src="images/customers/me.jpg" alt="John Doe" class="circle">{{ Auth::user()->name }}
              <i class="mdi-navigation-expand-more right"></i>
            </a>

            <ul id="user-dropdown" class="dropdown-content">
                <li><a href="{{ url('/auth/logout') }}"><i class="fa fa-sign-out"></i> Logout</a>
              </li>
            </ul>
          @endif
        </li>
      </ul>
      <!-- /Menu -->

    </div>
  </nav>
  <!-- /Top Navbar -->

  @if(!Auth::guest())

  <aside class="yaybar yay-shrink yay-hide-to-small yay-gestures yay-light yay-static">

    <div class="top" id="toggleMenu">
      <div>
        <!-- Sidebar toggle -->
        <a href="#" class="yay-toggle">
          <div class="burg1"></div>
          <div class="burg2"></div>
          <div class="burg3"></div>
        </a>
        <!-- Sidebar toggle -->

        <!-- Logo -->
        <a href="#!" class="brand-logo">
          <img src="images/pos.png" alt="Pos">
        </a>
        <!-- /Logo -->
      </div>
    </div>

    <div class="nano">
      <div class="nano-content">

        <ul>
          <li class="label">Menu</li>
          <li class="{{Request::is('/') ? "active":""}}">
            <a href="{{ route('/') }}" class="waves-effect waves-blue"><i class="fa fa-magic"></i> Dashboard</a>
          </li>

          <li class="{{Request::is('customers') ? "active":""}}">
            <a href="{{ route('customers.index') }}" class="waves-effect waves-blue"><i class="fa fa-magic"></i> Customers</a>
          </li>

          <li class="{{Request::is('items') ? "active":""}}">
            <a href="{{ route('items.index') }}" class="waves-effect waves-blue"><i class="mdi mdi-av-web"></i> Items</a>
          </li>

          <li class="{{Request::is('item-kits') ? "active":""}}">
            <a href="{{ route('item-kits.index') }}" class="waves-effect waves-blue"><i class="mdi mdi-av-web"></i> Items-kits</a>
          </li>

          <li class="{{Request::is('suppliers') ? "active":""}}">
            <a href="{{ route('suppliers.index') }}" class="waves-effect waves-blue"><i class="mdi mdi-av-web"></i> Suppliers</a>
          </li>

          <li class="{{Request::is('receivings') ? "active":""}}">
            <a href="{{ route('receivings.index') }}" class="waves-effect waves-blue"><i class="mdi mdi-av-web"></i> Recievings</a>
          </li>

          <li class="{{Request::is('sales') ? "active":""}}">
            <a href="{{ route('sales.index') }}" class="waves-effect waves-blue"><i class="mdi mdi-av-web"></i> Sales</a>
          </li>

          <li>
            <a class="yay-sub-toggle waves-effect waves-blue"><i class="fa fa-globe"></i> Reports<span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
            <ul>
              <li><a class="waves-effect waves-blue" href="page-profile.html">Recievings Report</a>
              </li>
              <li><a class="waves-effect waves-blue" href="page-timeline.html">Sales Report</a>
              </li>
            </ul>
          </li>

          <li class="{{Request::is('employees') ? "active":""}}">
            <a href="{{ route('employees.index') }}" class="waves-effect waves-blue"><i class="mdi mdi-av-web"></i> Employees</a>
          </li>
        </ul>
      </div>
    </div>
  </aside>
  <!-- /Yay Sidebar -->
  @endif

	@yield('content')

	<footer class="footer hidden-print">
      <div class="container">
        <p class="text-muted">Developed By Manjurul Hoque</a>.
        </p>
      </div>
  </footer>
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

  <!-- jQuery -->
  <script type="text/javascript" src="assets/jquery/jquery.min.js"></script>

  <!-- jQuery RAF (improved animation performance) -->
  <script type="text/javascript" src="assets/jqueryRAF/jquery.requestAnimationFrame.min.js"></script>

  <!-- nanoScroller -->
  <script type="text/javascript" src="assets/nanoScroller/jquery.nanoscroller.min.js"></script>

  <!-- Materialize -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>

  <!-- Sparkline -->
  <script type="text/javascript" src="assets/sparkline/jquery.sparkline.min.js"></script>

  <!-- Flot -->
  <script type="text/javascript" src="assets/flot/jquery.flot.min.js"></script>
  <script type="text/javascript" src="assets/flot/jquery.flot.time.min.js"></script>
  <script type="text/javascript" src="assets/flot/jquery.flot.pie.min.js"></script>
  <script type="text/javascript" src="assets/flot/jquery.flot.tooltip.min.js"></script>
  <script type="text/javascript" src="assets/flot/jquery.flot.categories.min.js"></script>

  <!-- Main -->
  <script type="text/javascript" src="assets/_con/js/_con.min.js"></script>

  <!-- Google Prettify -->
  <script type="text/javascript" src="assets/google-code-prettify/prettify.js"></script>
  
  <script>
    <!-- Scripts -->
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
    
    // setTimeout(function() {
    //   $(window).resize();
    // }, 1);
  </script>
</body>
</html>
