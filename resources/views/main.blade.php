<html>
<head>
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" href="{{Asset('assets/css/bootstrap.min.css')}}"> -->
	<script type="text/javascript" src="{{Asset('assets/js/jquery-2.2.0.min')}}"></script>
	<script type="text/javascript" src="{{Asset('assets/js/jquery-validation/jquery.validate.js')}}"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
	<script src="{{Asset('assets/js/drawer.min.js')}}" charset="utf-8"></script>
	<script>
		$(document).ready(function() {
		   $('.drawer').drawer();
		});
	</script>
  <link href="{{Asset('assets/css/drawer.css')}}" rel="stylesheet">


</head>
<body>
  <!-- Banner -->
  <div class="top">
    <img src="{{Asset('assets/images/logo.jpg')}}">
  </div>
  <!-- Header -->
  <div class="drawer drawer--left container-fluid">
    <header class="drawer-navbar drawer-navbar--fixed" role="banner">
      <div class="drawer-container">
        <div class="drawer-navbar-header" >
          <a class="drawer-brand" href="./homepage">Tìm việc Online</a>
          <button type="button" class="drawer-toggle drawer-hamburger">
            <span class="sr-only">toggle navigation</span>
            <span class="drawer-hamburger-icon"></span>
          </button>
        </div>

        <nav class="drawer-nav" role="navigation" >
          <ul class="drawer-menu">
            <li><a class="drawer-menu-item" href="./nguoitimviec">Người tìm việc</a></li>
            <li><a class="drawer-menu-item" href="./right.html">Người tuyển dụng</a></li>
          </ul>
        </nav>
      </div>
    </header>
  </div>
  <!-- content -->
  <div class="container">
  	<h1>Drawer Left with fixed navbar</h1>
  </div>
      
</body>
</html>