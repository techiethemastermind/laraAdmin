<?php
    switch ($user_type) {
        case 'SuperAdmin':
            $home_url = '/s0';
            $accounts_url = '/s0/accounts';
            $profile_url = '/s0/profile';
            break;
        case 'Admin':
            $home_url = '/g1';
            $accounts_url = '/g1/accounts';
            $profile_url = '/g1/profile';
            break;
        case 'Mentor':
            $home_url = '/m2';
            $accounts_url = '/m2/accounts';
            $profile_url = '/m2/profile';
            break;
        case 'Trader':
            $home_url = '/t3';
            $profile_url = '/t3/profile';
            break;
        case 'WebMaster':
            $home_url = '/w4';
            $profile_url = '/w4/profile';
            break;
        default:
            $home_url = '/w4';
            $profile_url = '/w4/profile';
            break;
    }
?>

<div class="fixed-sidebar-left">
    <ul class="nav navbar-nav side-nav nicescroll-bar">
        <li class="navigation-header">
            <span>Main</span> 
            <i class="zmdi zmdi-more"></i>
        </li>
        <li>
            <a class="active" href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard_dr"><div class="pull-left"><i class="zmdi zmdi-landscape mr-20"></i><span class="right-nav-text">Dashboard</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
            <ul id="dashboard_dr" class="collapse collapse-level-1 in" aria-expanded="true">
                <li>
                    @if ($page_active === 'home')
                        <a class="active-page" href="{{ url($home_url)}}">Home</a>
                    @else
                        <a href="{{ url($home_url)}}">Home</a>
                    @endif
                </li>
                <li>
                    @if (isset($accounts_url))
                        @if ($page_active === 'accounts')
                            <a class="active-page" href="{{ url($accounts_url)}}">Accounts</a>
                        @else
                            <a href="{{ url($accounts_url)}}">Accounts</a>
                        @endif
                    @endif
                </li>
                <li>
                    @if (isset($profile_url))
                        @if ($page_active === 'profile')
                            <a class="active-page" href="{{ url($profile_url)}}">My Profile</a>
                        @else
                            <a href="{{ url($profile_url)}}">My Profile</a>
                        @endif
                    @endif
                </li>
            </ul>
        </li>
    </ul>
</div>