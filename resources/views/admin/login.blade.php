<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>WIKI.ILLIMITIS</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/illimitis/logo.svg')}}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/owl.transitions.css')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/animate.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/normalize.css')}}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/main.css')}}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/morrisjs/morris.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/metisMenu/metisMenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/metisMenu/metisMenu-vertical.css')}}">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/calendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/calendar/fullcalendar.print.min.css')}}">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/form/all-type-forms.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{asset('admin/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <style>
        body {
              margin:0;
              padding:0;
              width:100%;
              color:#959595;
              font:normal 12px/1.8em Arial, Helvetica, sans-serif;
              background:#1f3f4a;
            }
    </style>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
				<h3 style="color:white;">WIKI.ILLIMITIS</h3>
        <p style="color:white;">Connexion</p>
        <p><b><a href="/" style="color:lightblue;">Accueil</a></b></p>
			</div>
			<div class="content-error">
				<div class="hpanel">
                                      <h5> @if (session('message'))
                                            <div class="alert alert-danger" role="alert">
                                                {{ session('message') }}
                                            </div>  
                                        @endif</h5>
                    <div class="panel-body">
                        <form action="{{ url('connexion') }}" id="loginForm" method="post">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label class="control-label" for="username">Connexion</label>
                                <input type="text" placeholder="example@gmail.com" title="Please enter you username" required="" value="" name="email" id="email" class="form-control">
                                <span class="help-block small"></span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Mot de passe</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                                <span class="help-block small"></span>
                            </div>
                           <!--  <div class="checkbox login-checkbox">
                                <label>
										         <input type="checkbox" class="i-checks"> Remember me </label>
                                <p class="help-block small">(if this is a private computer)</p>
                            </div> -->
                            <button class="btn btn-success btn-block loginbtn" style="background-color:lightblue; color:#1f3f4a;">Connexion</button>
                           <!--  <a class="btn btn-default btn-block" href="/inscription">Register</a> -->
                        </form>
                    </div>
                </div>
			</div>
			<div class="text-center login-footer">
				
			</div>
		</div>   
    </div>
    <!-- jquery
		============================================ -->
    <script src="{{asset('admin/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{asset('admin/js/wow.min.js')}}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{asset('admin/js/jquery-price-slider.js')}}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{asset('admin/js/jquery.meanmenu.js')}}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{asset('admin/js/owl.carousel.min.js')}}"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{asset('admin/js/jquery.sticky.js')}}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{asset('admin/js/jquery.scrollUp.min.js')}}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{asset('admin/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('admin/js/scrollbar/mCustomScrollbar-active.js')}}"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{asset('admin/js/metisMenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('admin/js/metisMenu/metisMenu-active.js')}}"></script>
    <!-- tab JS
		============================================ -->
    <script src="{{asset('admin/js/tab.js')}}"></script>
    <!-- icheck JS
		============================================ -->
    <script src="{{asset('admin/js/icheck/icheck.min.js')}}"></script>
    <script src="{{asset('admin/js/icheck/icheck-active.js')}}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{asset('admin/js/plugins.js')}}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{asset('admin/js/main.js')}}"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="{{asset('admin/js/tawk-chat.js')}}"></script>
</body>

</html>