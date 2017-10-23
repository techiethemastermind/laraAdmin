<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="http://foxythemes.net/preview/products/beagle2/assets/img/logo-fav.png">
    <title>Beagle</title>
    <link rel="stylesheet" href="{{ asset('assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/lib/material-design-icons/css/material-design-iconic-font.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>
</head>
<body class="be-splash-screen">
    <div class="be-wrapper be-login">
      	<div class="be-content">
          	<div class="main-content container-fluid">
                <div class="splash-container forgot-password">
              		  <div class="panel panel-default panel-border-color panel-border-color-primary">

    		              	<div class="panel-heading">
                            <img src="{{ asset('assets/img/logo-xx.png') }}" alt="logo" width="102" height="27" class="logo-img">
                            <span class="splash-description">Forgot your password?</span>
        					  	  </div>

	              		    <div class="panel-body">

			             	    @if (session('status'))
			                    <div class="alert alert-success">
			                        {{ session('status') }}
			                    </div>
			                  @endif

	                		<form role="form" method="POST" action="{{ route('password.email') }}">
	                			{{ csrf_field() }}

	                  			<p>Don't worry, we'll send you an email to reset your password.</p>
			                  	<div class="form-group xs-pt-20{{ $errors->has('email') ? ' has-error' : '' }}">
			                    	<input id="email" type="email" class="form-control" name="email" placeholder="Your Email" value="{{ old('email') }}" required>

				                    @if ($errors->has('email'))
				                        <span class="help-block">
				                            <strong>{{ $errors->first('email') }}</strong>
				                        </span>
				                    @endif
			                  	</div>
		                  		<p class="xs-pt-5 xs-pb-20">Don't remember your email? <a href="#">Contact Support</a>.</p>
		                  		<div class="form-group xs-pt-5">
		                    		<button type="submit" class="btn btn-block btn-primary btn-xl">Reset Password</button>
		                  		</div>
	                		</form>
	              		</div>
            		</div>
            		<div class="splash-footer">&copy; 2016 Your Company</div>
          		</div>
        	</div>
      	</div>
    </div>
    <script src="{{ asset('assets/lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/lib/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      });
    </script>
</body>
</html>