@extends('layouts.main')

<!-- Content -->
@section('content')

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
                <li><a href="{{ url('/g1') }}">Main</a></li>
                <li><a href="#"><span>Accounts</span></a></li>
            </ol>
        </div>
        <!-- /Breadcrumb -->
        
    </div>
    <!-- /Title -->

    <!-- Row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div  class="tab-struct custom-tab-1">
                        <ul role="tablist" class="nav nav-tabs ver-nav-tab" id="accounts_tablist">
                            <li class="active"><a  data-toggle="tab" id="mentor_tab" role="tab" href="#mentors" aria-expanded="false">Mentors</a></li>
                            <li class=""><a  data-toggle="tab" id="trader_tab" role="tab" href="#traders" aria-expanded="false">Traders</a></li>
                            <li class=""><a  data-toggle="tab" id="trader_tab" role="tab" href="#webmasters" aria-expanded="false">Web Masters</a></li>
                            <li class="mg-r"><button class="btn btn-default btn-outline fancy-button btn-0 btn-sm" data-toggle="modal" data-target="#accountModal">Create New Account</button></li>
                        </ul>
                    </div>
                    <div id="accountModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="accountModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h5 class="modal-title" id="accountModalLabel">Create An Account</h5>
                                </div>
                                <div class="modal-body">
                                    <!-- Row -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="">
                                                <div class="panel-wrapper collapse in">
                                                    <div class="panel-body pa-0">
                                                        <div class="col-sm-12 col-xs-12">
                                                            <div class="form-wrap">
                                                                <form role="form" method="POST" action="{{ url('/g1/accounts/cn/0') }}" data-toggle="validator">
                                                                {{ csrf_field() }}
                                                                    <div class="form-body overflow-hide">
                                                                        <div class="form-group">
                                                                            <label class="control-label mb-10" for="fullname">Full Name</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="icon-user"></i></div>
                                                                                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Your Name" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="control-label mb-10" for="email">Email address</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="icon-envelope-open"></i></div>
                                                                                <input type="email" class="form-control" id="email" name="email" placeholder="xyz@gmail.com" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="control-label mb-10" for="phone">Contact number</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="icon-phone"></i></div>
                                                                                <input type="phone" class="form-control" id="phone" name="phone" placeholder="+102 9388333">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="control-label mb-10" for="password">Password</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="icon-lock"></i></div>
                                                                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter pwd" data-minlength="6" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="control-label mb-10">Gender</label>
                                                                            <div>
                                                                                <div class="radio">
                                                                                    <input type="radio" name="gender" id="radio_01" value="Male" checked>
                                                                                    <label for="radio_01">
                                                                                    M
                                                                                    </label>
                                                                                </div>
                                                                                <div class="radio">
                                                                                    <input type="radio" name="gender" id="radio_02" value="Female">
                                                                                    <label for="radio_02">
                                                                                    F
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="control-label mb-10">User Group</label>
                                                                            <select class="form-control" name="type" data-placeholder="Choose a Category" tabindex="1" required>
                                                                                <option value="1">Admin</option>
                                                                                <option value="2">Mentor</option>
                                                                                <option value="3">Trader</option>
                                                                                <option value="4">Web Master</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-actions mt-10">			
                                                                        <button type="submit" class="btn btn-success mr-10 mb-30">Save</button>
                                                                        <button type="button" class="btn btn-default mr-10 mb-30" data-dismiss="modal">Cancel</button>
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
                                <div class="modal-footer">                                    
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div id="accounts_tabs" class="table-wrap tab-content">
                            <div id="mentors" class="table-responsive tab-pane fade active in" role="tabpanel">
                                <table id="dt_mentors" class="table table-hover display  pb-30" >
                                    <thead>
                                        <tr>
                                            <th>Picture</th>
                                            <th>Name</th>
                                            <th>User Name</th>
                                            <th>Email</th>
                                            <th>Member Since</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Picture</th>
                                            <th>Name</th>
                                            <th>User Name</th>
                                            <th>Email</th>
                                            <th>Member Since</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($mentors as $row)
                                        <tr>
                                            <td><img src="{{ asset('assets/img/profile') }}/{{$row->avatar}}" width="50" /></td>
                                            <td>{{ $row->firstname }} {{ $row->lastname }}</td>
                                            <td>{{ $row->name }}</td>
                                            <td>{{ $row->email }}</td>
                                            <td>{{ $row->created_at }}</td>
                                            <td>
                                                <a class="account_action" href="accounts/ev/{{ $row->id }}"><i class="fa fa-pencil"></i> Edit</a>
                                                <a class="account_action delete-account" href="#" value="accounts/d/{{ $row->id }}" data-toggle="modal" data-target="#confirm"><i class="fa fa-trash-o"></i> Remove</a>
                                            </td>
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div id="traders" class="table-responsive tab-pane fade" role="tabpanel">
                                <table id="dt_traders" class="table table-hover display  pb-30" >
                                    <thead>
                                        <tr>
                                            <th>Picture</th>
                                            <th>Name</th>
                                            <th>User Name</th>
                                            <th>Email</th>
                                            <th>Member Since</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Picture</th>
                                            <th>Name</th>
                                            <th>User Name</th>
                                            <th>Email</th>
                                            <th>Member Since</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($traders as $row)
                                        <tr>
                                            <td><img src="{{ asset('assets/img/profile') }}/{{$row->avatar}}" width="50" /></td>
                                            <td>{{ $row->firstname }} {{ $row->lastname }}</td>
                                            <td>{{ $row->name }}</td>
                                            <td>{{ $row->email }}</td>
                                            <td>{{ $row->created_at }}</td>
                                            <td>
                                                <a class="account_action" href="accounts/ev/{{ $row->id }}"><i class="fa fa-pencil"></i> Edit</a>
                                                <a class="account_action delete-account" href="#" value="accounts/d/{{ $row->id }}" data-toggle="modal" data-target="#confirm"><i class="fa fa-trash-o"></i> Remove</a>
                                            </td>
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div id="webmasters" class="table-responsive tab-pane fade" role="tabpanel">
                                <table id="dt_webmaster" class="table table-hover display  pb-30" >
                                    <thead>
                                        <tr>
                                            <th>Picture</th>
                                            <th>Name</th>
                                            <th>User Name</th>
                                            <th>Email</th>
                                            <th>Member Since</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Picture</th>
                                            <th>Name</th>
                                            <th>User Name</th>
                                            <th>Email</th>
                                            <th>Member Since</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($webmasters as $row)
                                        <tr>
                                            <td><img src="{{ asset('assets/img/profile') }}/{{$row->avatar}}" width="50" /></td>
                                            <td>{{ $row->firstname }} {{ $row->lastname }}</td>
                                            <td>{{ $row->name }}</td>
                                            <td>{{ $row->email }}</td>
                                            <td>{{ $row->created_at }}</td>
                                            <td>
                                                <a class="account_action" href="accounts/ev/{{ $row->id }}"><i class="fa fa-pencil"></i> Edit</a>
                                                <a class="account_action delete-account" href="#" value="accounts/d/{{ $row->id }}" data-toggle="modal" data-target="#confirm"><i class="fa fa-trash-o"></i> Remove</a>
                                            </td>
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="modal" id="confirm" class="modal fade in" tabindex="-1" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Delete Confirmation</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Are you sure you, want to delete?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <form id="s_delete_form" role="form" method="POST" action="aaa">
                                             {{ csrf_field() }}
                                                <button type="button" class="btn btn-sm btn-primary" id="s_delete-btn">Delete</button>
                                                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
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