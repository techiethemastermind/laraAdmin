@extends('layouts.main')

<!-- Content -->
@section('content')

<?php
    $selected1 = '';
    $selected2 = '';
    $selected3 = '';
    $selected4 = '';

    switch ($data->type) {
        case 1:
            $group_name = 'Admin';
            $selected1 = 'selected';
            break;
        case 2:
            $group_name = 'Mentor';
            $selected2 = 'selected';
            break;
        case 3:
            $group_name = 'Trader';
            $selected3 = 'selected';
            break;
        default:
            $group_name = 'Web Master';
            $selected4 = 'selected';
            break;
    }
?>

<!-- Contanier -->
<div class="container-fluid accounts">

    <!-- Title -->
    <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark">My Profile</h5>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/s0') }}">Main</a></li>
                <li><span>My Profile</span></li>
            </ol>
        </div>
        <!-- /Breadcrumb -->
        
    </div>
    <!-- /Title -->

    <!-- Row -->
    <div class="row">
        <div class="col-lg-3 col-xs-12">
            <div class="panel panel-default card-view  pa-0">
                <div class="panel-wrapper collapse in">
                    <div class="panel-body  pa-0">
                        <div class="profile-box">
                            <div class="profile-cover-pic">
                                <div class="fileupload btn btn-default">
                                    <span class="btn-text">edit</span>
                                    <input class="upload" type="file">
                                </div>
                                <div class="profile-image-overlay"></div>
                            </div>
                            <div class="profile-info text-center">
                                <div class="profile-img-wrap">
                                <?php
                                    $avatar_url = 'assets/img/mock1.jpg';

                                    if ($data->avatar) {
                                        $avatar_url = 'assets/img/profile/' . $data->avatar;
                                    }
                                ?>
                                    <img id="s_profile_img" class="inline-block mb-10" src="{{ asset($avatar_url)}}" alt="user"/>
                                    <div class="fileupload btn btn-default">
                                        <span class="btn-text">edit</span>
                                        <input id="s_pp_upload" name="profileimage" class="upload" type="file">
                                    </div>                                
                                </div>	
                                <h5 class="block mt-10 mb-5 weight-500 capitalize-font txt-danger">{{ $data->firstname }} {{ $data->lastname }}</h5>
                                <h6 class="block capitalize-font pb-20">{{ $group_name }}</h6>
                            </div>	
                            <div class="social-info">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <span class="counts block head-font"><span class="counter-anim">345</span></span>
                                        <span class="counts-text block">post</span>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <span class="counts block head-font"><span class="counter-anim">246</span></span>
                                        <span class="counts-text block">followers</span>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <span class="counts block head-font"><span class="counter-anim">898</span></span>
                                        <span class="counts-text block">tweets</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-xs-12">
            <div class="panel panel-default card-view pa-0">
                <div class="panel-wrapper collapse in">
                    <div  class="panel-body pb-0">
                        <div  class="tab-struct custom-tab-1">
                            <ul role="tablist" class="nav nav-tabs nav-tabs-responsive" id="myTabs_8">
                                <li class="active" role="presentation" class=""><a  data-toggle="tab" id="settings_tab" role="tab" href="#settings" aria-expanded="false"><span>General</span></a></li>
                                <li role="presentation"><a  data-toggle="tab" id="activity_tab" role="tab" href="#activity" aria-expanded="false"><span>Recent Activity</span></a></li>
                                <li role="presentation" class=""><a  data-toggle="tab" id="posts_tab" role="tab" href="#posts" aria-expanded="false"><span>My Posts</span></a></li>
                                <li role="presentation" class=""><a  data-toggle="tab" id="billing_tab" role="tab" href="#billing" aria-expanded="false"><span>Billing Information</span></a></li>
                                <li role="presentation" class=""><a  data-toggle="tab" id="affiliate_tab" role="tab" href="#affiliate" aria-expanded="false"><span>Affilate Panel</span></a></li>
                                
                            </ul>
                            <div class="tab-content" id="profile_content">
                                <div id="settings" class="tab-pane fade active in" role="tabpanel">
                                    <!-- Row -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="">
                                                <div class="panel-wrapper collapse in">
                                                    <div class="panel-body pa-0">
                                                        <div class="col-sm-12 col-xs-12">
                                                            <div class="form-wrap">
                                                                <form id="s_profile_form" role="form" method="POST" action="/t3/profile/save" enctype="multipart/form-data" data-toggle="validator">
                                                                {{ csrf_field() }}
                                                                    <div class="form-body overflow-hide">
                                                                        <div class="form-group">
                                                                            <label class="control-label mb-10" for="username">User Name</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="icon-anchor"></i></div>
                                                                                <input type="text" class="form-control" id="username" name="username" placeholder="User Name" value="{{ $data->name }}" required autofocus>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="control-label mb-10" for="fullname">Full Name</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="icon-user"></i></div>
                                                                                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Your Name" value="{{ $data->firstname }} {{ $data->lastname }}" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="control-label mb-10" for="email">Email address</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="icon-envelope-open"></i></div>
                                                                                <input type="email" class="form-control" id="email" name="email" placeholder="xyz@gmail.com" value="{{ $data->email }}" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="control-label mb-10" for="phone">Contact number</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="icon-phone"></i></div>
                                                                                <input type="phone" class="form-control" id="phone" name="phone" placeholder="+102 9388333" value="{{ $data->phone }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="control-label mb-10" for="password">Password</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="icon-lock"></i></div>
                                                                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter pwd" value="" data-minlength="6" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="control-label mb-10">Gender</label>
                                                                            <?php
                                                                                $checked1 = '';
                                                                                $checked2 = '';
                                                                                if ($data->gender === 'Male') {
                                                                                    $checked1 = 'checked';
                                                                                } else {
                                                                                    $checked2 = 'checked';
                                                                                }
                                                                            ?>
                                                                            <div>
                                                                                <div class="radio">
                                                                                    <input type="radio" name="gender" id="radio_01" value="Male" {{ $checked1 }}>
                                                                                    <label for="radio_01">
                                                                                    M
                                                                                    </label>
                                                                                </div>
                                                                                <div class="radio">
                                                                                    <input type="radio" name="gender" id="radio_02" value="Female" {{ $checked2 }}>
                                                                                    <label for="radio_02">
                                                                                    F
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="control-label mb-10">User Group</label>
                                                                            <select class="form-control" name="type" data-placeholder="Choose a Category" tabindex="1">
                                                                                <option value="1" {{ $selected1 }} disabled>Admin</option>
                                                                                <option value="2" {{ $selected2 }} disabled>Mentor</option>
                                                                                <option value="3" {{ $selected3 }}>Trader</option>
                                                                                <option value="4" {{ $selected4 }} disabled>Web Master</option>
                                                                            </select>
                                                                        </div>
                                                                        <div id="div_s_pp_img" class="form-group hidden"></div>
                                                                    </div>
                                                                    <div class="form-actions mt-10">			
                                                                        <button id="s_updata_profile" type="submit" class="btn btn-success mr-10 mb-30">Update profile</button>
                                                                    </div>				
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="activity" class="tab-pane fade" role="tabpanel">
                                    <div class="col-md-12">
                                        <div class="pt-20">
                                            <div class="streamline user-activity">
                                                <div class="sl-item">
                                                    <a href="javascript:void(0)">
                                                        <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                            <img class="img-responsive img-circle" src="{{ asset('assets/img/user.png')}}" alt="avatar"/>
                                                        </div>
                                                        <div class="sl-content">
                                                            <p class="inline-block"><span class="capitalize-font txt-success mr-5 weight-500">Clay Masse</span><span>invited to join the meeting in the conference room at 9.45 am</span></p>
                                                            <span class="block txt-grey font-12 capitalize-font">3 Min</span>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class="sl-item">
                                                    <a href="javascript:void(0)">
                                                        <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                            <img class="img-responsive img-circle" src="{{ asset('assets/img/user1.png')}}" alt="avatar"/>
                                                        </div>
                                                        <div class="sl-content">
                                                            <p class="inline-block"><span class="capitalize-font txt-success mr-5 weight-500">Evie Ono</span><span>added three new photos in the library</span></p>
                                                            <div class="activity-thumbnail">
                                                                <img src="{{ asset('assets/img/thumb-1.jpg')}}" alt="thumbnail"/>
                                                                <img src="{{ asset('assets/img/thumb-2.jpg')}}" alt="thumbnail"/>
                                                                <img src="{{ asset('assets/img/thumb-3.jpg')}}" alt="thumbnail"/>
                                                            </div>
                                                            <span class="block txt-grey font-12 capitalize-font">8 Min</span>
                                                        </div>
                                                    </a>	
                                                </div>

                                                <div class="sl-item">
                                                    <a href="javascript:void(0)">
                                                        <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                            <img class="img-responsive img-circle" src="{{ asset('assets/img/user2.png')}}" alt="avatar"/>
                                                        </div>
                                                        <div class="sl-content">
                                                            <p class="inline-block"><span class="capitalize-font txt-success mr-5 weight-500">madalyn rascon</span><span>assigned a new task</span></p>
                                                            <span class="block txt-grey font-12 capitalize-font">28 Min</span>
                                                        </div>
                                                    </a>	
                                                </div>

                                                <div class="sl-item">
                                                    <a href="javascript:void(0)">
                                                        <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                            <img class="img-responsive img-circle" src="{{ asset('assets/img/user3.png')}}" alt="avatar"/>
                                                        </div>
                                                        <div class="sl-content">
                                                            <p class="inline-block"><span class="capitalize-font txt-success mr-5 weight-500">Ezequiel Merideth</span><span>completed project wireframes</span></p>
                                                            <span class="block txt-grey font-12 capitalize-font">yesterday</span>
                                                        </div>
                                                    </a>	
                                                </div>
                                                
                                                <div class="sl-item">
                                                    <a href="javascript:void(0)">
                                                        <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                            <img class="img-responsive img-circle" src="{{ asset('assets/img/user4.png')}}" alt="avatar"/>
                                                        </div>
                                                        <div class="sl-content">
                                                            <p class="inline-block"><span class="capitalize-font txt-success mr-5 weight-500">jonnie metoyer</span><span>created a group 'Hencework' in the discussion forum</span></p>
                                                            <span class="block txt-grey font-12 capitalize-font">18 feb</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="posts" class="tab-pane fade" role="tabpanel">
                                    <div class="col-md-12 pb-20">
                                        <div class="gallery-wrap">
                                            <div class="portfolio-wrap project-gallery">
                                                <ul id="portfolio_1" class="portf auto-construct  project-gallery" data-col="4">
                                                    <li  class="item"   data-src="{{ asset('assets/img/gallery/equal-size/mock1.jpg')}}" data-sub-html="<h6>Bagwati</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>" >
                                                        <a href="#">
                                                        <img class="img-responsive" src="{{ asset('assets/img/gallery/equal-size/mock1.jpg')}}"  alt="Image description" />
                                                        <span class="hover-cap">Bagwati</span>
                                                        </a>
                                                    </li>
                                                    <li class="item" data-src="{{ asset('assets/img/gallery/equal-size/mock2.jpg')}}"   data-sub-html="<h6>Not a Keyboard</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                                                        <a href="#">
                                                        <img class="img-responsive" src="{{ asset('assets/img/gallery/equal-size/mock2.jpg')}}"  alt="Image description" />
                                                        <span class="hover-cap">Not a Keyboard</span>
                                                        </a>
                                                    </li>
                                                    <li class="item" data-src="{{ asset('assets/img/gallery/equal-size/mock3.jpg')}}" data-sub-html="<h6>Into the Woods</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                                                        <a href="#">
                                                        <img class="img-responsive" src="{{ asset('assets/img/gallery/equal-size/mock3.jpg')}}"  alt="Image description" />
                                                        <span class="hover-cap">Into the Woods</span>
                                                        </a>
                                                    </li>
                                                    <li class="item" data-src="{{ asset('assets/img/gallery/equal-size/mock4.jpg')}}"  data-sub-html="<h6>Ultra Saffire</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                                                        <a href="#">
                                                        <img class="img-responsive" src="{{ asset('assets/img/gallery/equal-size/mock4.jpg')}}"  alt="Image description" />
                                                        <span class="hover-cap"> Ultra Saffire</span>
                                                        </a>
                                                    </li>
                                                    
                                                    <li class="item" data-src="{{ asset('assets/img/gallery/equal-size/mock5.jpg')}}" data-sub-html="<h6>Happy Puppy</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                                                        <a href="#">
                                                        <img class="img-responsive" src="{{ asset('assets/img/gallery/equal-size/mock5.jpg')}}"  alt="Image description" />	
                                                        <span class="hover-cap">Happy Puppy</span>
                                                        </a>
                                                    </li>
                                                    <li class="item" data-src="{{ asset('assets/img/gallery/equal-size/mock6.jpg')}}"  data-sub-html="<h6>Wooden Closet</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                                                        <a href="#">
                                                        <img class="img-responsive" src="{{ asset('assets/img/gallery/equal-size/mock6.jpg')}}"  alt="Image description" />
                                                        <span class="hover-cap">Wooden Closet</span>
                                                        </a>
                                                    </li>
                                                    <li class="item" data-src="{{ asset('assets/img/gallery/equal-size/mock7.jpg')}}" data-sub-html="<h6>Happy Puppy</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                                                        <a href="#">
                                                        <img class="img-responsive" src="{{ asset('assets/img/gallery/equal-size/mock7.jpg')}}"  alt="Image description" />	
                                                        <span class="hover-cap">Happy Puppy</span>
                                                        </a>
                                                    </li>
                                                    <li class="item" data-src="{{ asset('assets/img/gallery/equal-size/mock8.jpg')}}"  data-sub-html="<h6>Wooden Closet</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                                                        <a href="#">
                                                        <img class="img-responsive" src="{{ asset('assets/img/gallery/equal-size/mock8.jpg')}}"  alt="Image description" />
                                                        <span class="hover-cap">Wooden Closet</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>	
                                </div>

                                <div id="billing" class="tab-pane fade" role="tabpanel">
                                    <!--CREDIT CART PAYMENT-->
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="CreditCardType">card type:</label>
                                            <select id="CreditCardType" name="CreditCardType" class="form-control required">
                                                <option value="5">Visa</option>
                                                <option value="6">MasterCard</option>
                                                <option value="7">American Express</option>
                                                <option value="8">Discover</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="cardNo">Credit Card Number:</label>
                                            <input type="text" id="cardNo" data-mask="9999-9999-9999-9999" class="form-control required" name="car_number" value="" />
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="cvv">card cvv:</label>
                                            <input type="text" id="cvv" class="form-control  required" data-mask="999" name="car_code" value="" />
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-10">expiration date:</label>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <select class="form-control required" name="month">
                                                        <option value="">Month</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <select class="form-control required" name="year">
                                                        <option value="">Year</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-0">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <ul class="cards">
                                                        <li class="visa hand"><img src="{{ asset('assets/img/1-s.png')}}" alt="card"/></li>
                                                        <li class="mastercard hand"><img src="{{ asset('assets/img/2-s.png')}}" alt="card"/></li>
                                                        <li class="amex hand"><img src="{{ asset('assets/img/3-s.png')}}" alt="card"/></li>
                                                        <li class="amex hand"><img src="{{ asset('assets/img/4-s.png')}}" alt="card"/></li>
                                                        </ul>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions mt-10">
                                            <button id="save_billing" type="submit" class="btn btn-success mr-10 mb-30 pull-right">Save</button>
                                        </div>
                                    </div>
                                    <!--CREDIT CART PAYMENT END-->
                                </div>

                                <div id="affiliate" class="tab-pane fade" role="tabpanel">
                                    
                                    <div class="col-sm-12">
                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="aff-panel mb-15 mr-15">
                                                    <i class="icon-cursor"></i>
                                                    <span>0 unique clicks</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="aff-panel mb-15">
                                                    <i class="icon-people"></i>
                                                    <span>0 registrations</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="aff-panel mb-15 mr-15">
                                                    <i class="icon-login"></i>
                                                    <span>0 signups</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="aff-panel mb-15">
                                                    <i class="icon-chart"></i>
                                                    <span>0% conversations</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="pl-15">
                                            <p><i class="ti-check"></i> You earn 10.00% on ALL recurring payments for any user you refer.</p>
                                            <p><i class="ti-check"></i> Simply send users to your unique referral link below to start earning money!</p>
                                            <p><i class="ti-check"></i> These stats are approximately 1 minute delayed.</p>
                                        </div>
                                        
                                    </div>

                                    <div class="col-sm-12">
                                        <h3 class="text-center mt-15">Your Unique Referral Link</h3>
                                        <div class="panel panel-default card-view mt-15">
                                            <div class="panel-body text-center">
                                                <a href="#">https://www.voxywealth.com/?aff={{$data->id}}</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-8 col-sm-offset-2 mt-15">
                                            <table class="table table-hover mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td>Commissions Pending Maturation:</td>
                                                        <td>$0.00 USD</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Available Commissions Balance:	</td>
                                                        <td>$0.00 USD</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Total Amount Withdrawn:	</td>
                                                        <td>$0.00 USD</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p class="text-center mb-30 pt-15" style="border-top: 1px solid rgba(255, 255, 255, 0.1);">You may request withdrawal once you have atleast $50 available.</p>
                                        </div>
                                        
                                    </div>
                                    <div class="col-sm-12 mb-30">
                                        <h3>Withdrawal History</h3>
                                        <p>You have not yet withdrawn any money from your account.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Row -->

</div>
<!-- /Container -->

@endsection
<!-- /Content -->