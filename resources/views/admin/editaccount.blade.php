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
            <h5 class="txt-dark">Accounts</h5>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/s0') }}">Main</a></li>
                <li><a href="{{ url('/s0/accounts')}}"><span>Accounts</span></a></li>
                <li><a href="#"><span>Edit</span></a></li>
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
                                    <img class="inline-block mb-10" src="{{ asset('assets/img/profile')}}/{{ $data->avatar }}" alt="user"/>
                                    <div class="fileupload btn btn-default">
                                        <span class="btn-text">edit</span>
                                        <input class="upload" type="file">
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
                                <li role="presentation"><a  data-toggle="tab" id="profile_tab" role="tab" href="#profile" aria-expanded="false"><span>Profile</span></a></li>
                                <li role="presentation" class=""><a  data-toggle="tab" id="posts_tab" role="tab" href="#posts" aria-expanded="false"><span>Posts</span></a></li>
                                <li role="presentation" class=""><a  data-toggle="tab" id="affiliate_tab" role="tab" href="#affiliate" aria-expanded="false"><span>Affilate Panel</span></a></li>
                            </ul>
                            <div class="tab-content" id="myTabContent_8">
                                <div  id="settings" class="tab-pane fade active in" role="tabpanel">
                                    <!-- Row -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="">
                                                <div class="panel-wrapper collapse in">
                                                    <div class="panel-body pa-0">
                                                        <div class="col-sm-12 col-xs-12">
                                                            <div class="form-wrap">
                                                                <?php
                                                                    $action_url = '/g1/accounts/es/' . $data->id;
                                                                ?>
                                                                <form role="form" method="POST" action="{{ $action_url }}" data-toggle="validator">
                                                                {{ csrf_field() }}
                                                                    <div class="form-body overflow-hide">
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
                                                                                <input type="password" class="form-control" id="password" placeholder="Enter pwd" name="password" data-minlength="6" required>
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
                                                                                <option value="1" {{ $selected1 }}>Admin</option>
                                                                                <option value="2" {{ $selected2 }}>Mentor</option>
                                                                                <option value="3" {{ $selected3 }}>Trader</option>
                                                                                <option value="4" {{ $selected4 }}>Web Master</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-actions mt-10">			
                                                                        <button type="submit" class="btn btn-success mr-10 mb-30">Update profile</button>
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

                                <div  id="profile" class="tab-pane fade" role="tabpanel">
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
                                                            <img class="img-responsive img-circle" src="assets/img/user1.png" alt="avatar"/>
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

                                <div  id="posts" class="tab-pane fade" role="tabpanel">
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

                                <div  id="affiliate" class="tab-pane fade" role="tabpanel">
                                    <!-- Row -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form id="example-advanced-form" action="#">
                                                <div class="table-wrap">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped display product-overview" id="datable_1">
                                                            <thead>
                                                                <tr>
                                                                    <th>Date</th>
                                                                    <th>Item Sales Colunt</th>
                                                                    <th>Earnings</th>
                                                                </tr>
                                                            </thead>
                                                            <tfoot>
                                                                <tr>
                                                                    <th colspan="2">total:</th>
                                                                    <th></th>
                                                                </tr>
                                                            </tfoot>
                                                            <tbody>
                                                                <tr>
                                                                    <td>monday, 12</td>
                                                                    <td>
                                                                        3
                                                                    </td>
                                                                    <td>$400</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>tuesday, 13</td>
                                                                    <td>
                                                                        2
                                                                    </td>
                                                                    <td>$400</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>wednesday, 14</td>
                                                                    <td>
                                                                        3
                                                                    </td>
                                                                    <td>$420</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>thursday, 15</td>
                                                                    <td>
                                                                        5
                                                                    </td>
                                                                    <td>$500</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>friday, 15</td>
                                                                    <td>
                                                                        3
                                                                    </td>
                                                                    <td>$400</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>saturday, 16</td>
                                                                    <td>
                                                                        3
                                                                    </td>
                                                                    <td>$400</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>sunday, 17</td>
                                                                    <td>
                                                                        3
                                                                    </td>
                                                                    <td>$400</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>monday, 18</td>
                                                                    <td>
                                                                        3
                                                                    </td>
                                                                    <td>$500</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>tuesday, 19</td>
                                                                    <td>
                                                                        3
                                                                    </td>
                                                                    <td>$400</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
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
        </div>
    </div>
    <!-- /Row -->

</div>
<!-- /Container -->

@endsection
<!-- /Content -->