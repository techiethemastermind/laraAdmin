<!DOCTYPE html>
<html lang="en">
	
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Hound I Fast build Admin dashboard for any platform</title>
    <meta name="description" content="Trading Room" />
    <meta name="keywords" content="Trading, Trade, Forex" />
    <meta name="author" content="Techiemastermind"/>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    
    <!-- vector map CSS -->
    <link href="{{ asset('vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>

    <!-- bootstrap-select CSS -->
	<link href="{{ asset('vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css"/>

    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/custom.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
    <!--Preloader-->
    <div class="preloader-it">
        <div class="la-anim-1"></div>
    </div>
    <!--/Preloader-->
    
    <div class="wrapper pa-0">
        <!-- Main Content -->
        <div class="page-wrapper pa-0 ma-0 auth-page">
            <div class="pull-right" style="padding: 15px 30px;">
                @if (Route::has('login'))
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Trading Room</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                @endif
            </div>
            <div class="container-fluid">
                <!-- Row -->
                <div class="table-struct full-width full-height">
                    <div class="table-cell vertical-align-middle auth-form-wrap">
                        <div class="auth-form  ml-auto mr-auto no-float">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <div class="sp-logo-wrap text-center pa-0 mb-30">
                                        <a href="index-2.html">
                                            <img class="brand-img mr-10" src="{{ asset('assets/img/logo.png')}}" alt="brand"/>
                                            <span class="brand-text">Hound</span>
                                        </a>
                                    </div>
                                    <div class="form-wrap">
                                        <form action="#">
                                            <div class="form-group text-center">
                                                <img class="img-circle" src="{{ asset('assets/img/user.png')}}" alt="user">
                                                <h3 class="mt-10 txt-dark">Valerie Doe</h3>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" id="example-input3-group2" name="example-input3-group2" class="form-control" required="" placeholder="password">
                                            </div>
                                            <div class="form-group text-center">
                                                <button type="submit" class="btn btn-info btn-rounded">Enter</button>
                                            </div>
                                            <div class="form-group mb-0 text-center">
                                                <a href="#" class="inline-block txt-primary">Switch User</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>	
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Row -->	
            </div>
            
        </div>
        <!-- /Main Content -->
    
    </div>
    <!-- /#wrapper -->

    <!-- JavaScript -->
    
    <!-- jQuery -->
    <script src="{{ asset('vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>
    
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js')}}"></script>
    
    <!-- Slimscroll JavaScript -->
    <script src="{{ asset('assets/js/jquery.slimscroll.js')}}"></script>
    
    <!-- Init JavaScript -->
    <script src="{{ asset('assets/js/init.js')}}"></script>
</body>
</html>