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
        <header class="sp-header">
            <div class="sp-logo-wrap pull-left">
                <a href="#">
                    <img class="brand-img mr-10" src="{{ asset('assets/img/logo.png')}}" alt="brand"/>
                    <span class="brand-text">Voxy</span>
                </a>
            </div>
            <div class="form-group mb-0 pull-right">
                <span class="inline-block pr-10">Already have an account?</span>
                <a class="inline-block btn btn-info btn-rounded btn-outline" href="{{ url('/login') }}">Sign In</a>
            </div>
            <div class="clearfix"></div>
        </header>
        
        <!-- Main Content -->
        <div class="page-wrapper pa-0 ma-0 auth-page">
            <div class="container-fluid">
                <!-- Row -->
                <div class="table-struct full-width full-height">
                    <div class="table-cell vertical-align-middle auth-form-wrap">
                        <div id="regForm_wrap" class="auth-form ml-auto mr-auto no-float">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <div class="mb-30">
                                        <h3 class="text-center txt-dark mb-10">Sign up to Our Platform</h3>
                                    </div>
                                    <form id="register_form" role="form" method="POST" action="{{ route('register') }}" data-toggle="validator">
                                        {{ csrf_field() }}

                                        <!-- Step 0 -->

                                        <div id="step_0" class="panel panel-default card-view">
                                            <div class="panel-heading">
                                                <div class="pull-left">
                                                    <h6 class="text-center nonecase-font txt-grey">Enter your details below</h6>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="panel-wrapper collapse in">
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-xs-12">
                                                            <div class="form-wrap">
                                                                
                                                                <!-- User Name -->
                                                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                                    <label class="control-label mb-10" for="name">User Name</label>
                                                                    <div class="input-group">
                                                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                                                        <div class="input-group-addon"><i class="icon-user"></i></div>
                                                                    </div>
                                                                    @if ($errors->has('name'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('name') }}</strong>
                                                                        </span>
                                                                    @endif
                                                                </div>

                                                                <!-- Email -->

                                                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                                    <label class="control-label mb-10" for="email">Email address</label>
                                                                    <div class="input-group">
                                                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                                                        <div class="input-group-addon"><i class="icon-envelope-open"></i></div>
                                                                    </div>
                                                                    @if ($errors->has('email'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('email') }}</strong>
                                                                        </span>
                                                                    @endif
                                                                </div>

                                                                <!-- Password -->

                                                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                                    <label class="control-label mb-10" for="password">Password</label>
                                                                    <div class="input-group">
                                                                        <input id="password" type="password" class="form-control" name="password" data-minlength="6" required>
                                                                        <div class="input-group-addon"><i class="icon-lock"></i></div>
                                                                    </div>
                                                                    @if ($errors->has('password'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('password') }}</strong>
                                                                        </span>
                                                                    @endif
                                                                    <div class="help-block">Minimum of 6 characters</div>
                                                                </div>

                                                                <!-- Confirm Password -->

                                                                <div class="form-group">
                                                                    <label class="control-label mb-10" for="password_confirmation">Confirm Password</label>
                                                                    <div class="input-group">
                                                                        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" data-match="#password" data-match-error="Whoops, these don't match" required>
                                                                        <div class="input-group-addon"><i class="icon-lock"></i></div>
                                                                    </div>
                                                                    <div class="help-block with-errors"></div>
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                    <div class="checkbox checkbox-success">
                                                                        <input id="remember" type="checkbox" name="remember">
                                                                        <label for="remember"> Remember me </label>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group mb-0">
                                                                    <button type="submit" id="register_0" class="btn btn-success mr-10">Register</button>
                                                                    <button id="cancel" class="btn btn-default  ">Cancel</button>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>	
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Step 1 of 2 -->

                                        <div id="step_1" class="panel panel-default card-view hidden">
                                            <div class="panel-heading">
                                                <div class="pull-left">
                                                    <h4 class="text-center nonecase-font txt-grey">Step 1 of 2</h4>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="panel-wrapper collapse in">
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-xs-12">
                                                            <div class="form-wrap">
                                                                
                                                                <!-- Broker Selection -->
                                                                <div class="form-group{{ $errors->has('broker') ? ' has-error' : '' }}">
                                                                    <label class="control-label mb-10" for="broker">Do you have your forex broker account?</label>
                                                                    <select id="broker" name="broker" class="selectpicker" data-style="form-control btn-default btn-outline">
                                                                        <option value="0"> - Select -</option>
                                                                        <option value="1"> Yes </option>
                                                                        <option value="2"> No </option>
                                                                    </select>
                                                                </div>

                                                                <!-- Interesting -->

                                                                <div class="form-group{{ $errors->has('interest') ? ' has-error' : '' }}">
                                                                    <label class="control-label mb-10" for="interest">Which of these are you interested in?</label>
                                                                    <div class="input-group">
                                                                        <div class="checkbox checkbox-primary">
                                                                            <input id="inter_chk1" type="checkbox">
                                                                            <label for="inter_chk1"> Copying trading signals </label>
                                                                        </div>

                                                                        <div class="checkbox checkbox-primary">
                                                                            <input id="inter_chk2" type="checkbox">
                                                                            <label for="inter_chk2"> Investing your money to other traders </label>
                                                                        </div>

                                                                        <div class="checkbox checkbox-primary">
                                                                            <input id="inter_chk3" type="checkbox">
                                                                            <label for="inter_chk3"> Learning our improving your own trading </label>
                                                                        </div>

                                                                        <div class="checkbox checkbox-primary">
                                                                            <input id="inter_chk4" type="checkbox">
                                                                            <label for="inter_chk4"> Trading our capital </label>
                                                                        </div>
                                                                    </div>
                                                                    <input id="interest" name="interest" type="hidden" value="" />
                                                                </div>

                                                                <!-- Forex Goals -->

                                                                <div class="form-group{{ $errors->has('goals') ? ' has-error' : '' }}">
                                                                    <label class="control-label mb-10" for="goals">What are your forex goals</label>
                                                                    <textarea id="goals" name="goals" class="form-control" rows="5"></textarea>
                                                                </div>

                                                                <div class="form-group mb-0">
                                                                    <button id="register_1" class="btn btn-success btn-block mr-10">Complete Step 1</button>
                                                                    <button id="back_1" class="btn btn-success btn-block mr-10">Back to Initial Setting</button>
                                                                </div>
                                                            </div>
                                                        </div>	
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Step 2 of 2 -->

                                        <div id="step_2" class="panel panel-default card-view hidden">
                                            <div class="panel-heading">
                                                <div class="pull-left">
                                                    <h4 class="text-center nonecase-font txt-grey">Step 2 of 2</h4>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="panel-wrapper collapse in">
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-xs-12">
                                                            <div class="form-wrap">
                                                                
                                                                <!-- First Name -->
                                                                <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                                                    <label class="control-label mb-10" for="firstname">First Name</label>
                                                                    <div class="input-group">
                                                                        <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required>
                                                                        <div class="input-group-addon"><i class="icon-user"></i></div>
                                                                    </div>
                                                                    @if ($errors->has('firstname'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('firstname') }}</strong>
                                                                        </span>
                                                                    @endif
                                                                </div>

                                                                <!-- Last Name -->
                                                                <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                                                    <label class="control-label mb-10" for="lastname">First Name</label>
                                                                    <div class="input-group">
                                                                        <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required>
                                                                        <div class="input-group-addon"><i class="icon-user"></i></div>
                                                                    </div>
                                                                    @if ($errors->has('lastname'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('lastname') }}</strong>
                                                                        </span>
                                                                    @endif
                                                                </div>

                                                                <div class="form-group mb-0">
                                                                    <button id="register_2" class="btn btn-success btn-block mr-10">Complete Registration!</button>
                                                                    <button id="back_2" class="btn btn-success btn-block mr-10">Back to Step1</button>
                                                                </div>
                                                            </div>
                                                        </div>	
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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

    <!-- Bootstrap Select JavaScript -->
	<script src="{{ asset('vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{ asset('vendors/bower_components/bootstrap-validator/dist/validator.min.js')}}"></script>
    
    <!-- Slimscroll JavaScript -->
    <script src="{{ asset('assets/js/jquery.slimscroll.js')}}"></script>
    
    <!-- Init JavaScript -->
    <script src="{{ asset('assets/js/init.js')}}"></script>

    <script>
        $(document).ready(function(){
            $('#register_0').on('click', function(ev){
                ev.preventDefault();
                if ($('#step_0').find('.has-error').length === 0) {
                    $('#step_0').addClass('hidden');
                    $('#step_1').removeClass('hidden');
                }
            });

            $('#password_confirmation').on('keyup', function(){
                if ($('#step_0').find('.has-error').length === 0) {
                    $('#register_0').removeClass('disabled');
                } else {
                    $('#register_0').addClass('disabled');
                }
            });

            $('#register_1').on('click', function(ev){
                ev.preventDefault();
                var inter_val = [];
                if ($('#inter_chk1').attr('checked')) {
                    inter_val.push(1);
                }
                if ($('#inter_chk2').attr('checked')) {
                    inter_val.push(2);
                }
                if ($('#inter_chk3').attr('checked')) {
                    inter_val.push(3);
                }
                if ($('#inter_chk4').attr('checked')) {
                    inter_val.push(4);
                }
                $('#interest').val(JSON.stringify(inter_val));
                console.log($('#interest').val());
                $('#step_1').addClass('hidden');
                $('#step_2').removeClass('hidden');
            });

            $('#register_2').on('click', function(){
                $('#register_form').submit();
            });

            $('#back_1').on('click', function() {
                ev.preventDefault();
                $('#step_0').removeClass('hidden');
                $('#step_1').addClass('hidden');
            });

            $('#back_2').on('click', function() {
                ev.preventDefault();
                $('#step_1').removeClass('hidden');
                $('#step_2').addClass('hidden');
            });
        })
    </script>
</body>

</html>