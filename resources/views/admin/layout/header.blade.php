<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>@yield('admintitle') | My Home Interiors</title>
    @php

	
   $footer = \App\Models\FooterDetail::find(1);
	@endphp
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('website/logo/'.$footer->favicon)}}">

    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
    <link rel="stylesheet" href="{{asset('dash_assets/style.css')}}">

</head>
<script>
    // active navigation
const currentLocation = location.href;
const menuItem = document.querySelectorAll('.nav-link');
const menuLength = menuItem.length;

for (let i = 0; i < menuLength; i++) {
  if (menuItem[i].href === currentLocation) {
    menuItem[i].classList.add("active");
  }
}
</script>
<style>
    .mtop1{
        margin-top: 6px;
    }
    .mtop{
        margin-top: 0px;
    }
   @media only screen and (max-width: 768px) {
 .mtop{
        margin-top: 6px;
    }
}

</style>
<body>
    <!-- Preloader -->
    {{-- <div id="preloader">
        <div class="preloader-load"></div>
    </div> --}}
    <!-- Preloader -->

    <!-- ======================================
    ******* Page Wrapper Area Start **********
    ======================================= -->
    <div class="ecaps-page-wrapper">
        <!-- Sidemenu Area -->
        <div class="ecaps-sidemenu-area">
            <!-- Desktop Logo -->
            <div class="ecaps-logo">
                <a href="{{url('admin/dashboard')}}">
                    <img class="desktop-logo" src="{{asset('website/logo/'.$footer->logo)}}" alt="Desktop Logo" style="height:55px;"> 
                    <img class="small-logo" src="{{asset('website/logo/'.$footer->logo)}}" alt="Mobile Logo"></a>
            </div>

            <!-- Side Nav -->
            <div class="ecaps-sidenav" id="ecapsSideNav">
                <!-- Side Menu Area -->
                <div class="side-menu-area">
                    <!-- Sidebar Menu -->
                    <nav>
                        <ul class="sidebar-menu" data-widget="tree">
                            <li class=" {{ request()->routeIs('dashboard') ? 'active' : '' }}"><a href="{{url('admin/dashboard')}}" class="nav-link active"><i class="zmdi zmdi-view-web"></i> <span>Dashboard</span></a></li>
                            <li class="treeview {{ request()->routeIs('home.*') ? 'active' : '' }}">
                                <a href="javascript:void(0)" class="nav-link"><i class="zmdi zmdi-home"></i> <span>Home Page</span> <i class="fa fa-angle-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="{{route('home.hbannerdetails')}}">Home Banner</a></li>
                                    <li><a href="{{route('home.about-details')}}">Home About</a></li>
                                    {{-- <li><a href="{{route('home.services')}}">Home Services</a></li> --}}
                                    <li><a href="{{route('home.ourfeatures')}}">Home Features</a></li>
                                   
                                    <li><a href="{{route('testimonials-details')}}">Testimonials</a></li>
                                    {{-- <li><a href="compose-mail.html">- Compose Mail</a></li> --}}
                                </ul>
                            </li>
                            <li class="treeview {{ request()->routeIs('admin.*') ? 'active' : '' }}">
                                <a href="javascript:void(0)" class="nav-link"><i class="zmdi zmdi-email"></i> <span>Blog Page</span> <i class="fa fa-angle-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="{{route('admin.blogdeatils')}}">Blog Details</a></li>
                                    {{-- <li><a href="mail-view.html">- Mail View</a></li>
                                    <li><a href="compose-mail.html">- Compose Mail</a></li> --}}
                                </ul>
                            </li>
                            <li class="treeview {{ request()->routeIs('door-category') ? 'active' : '' }}">
                                <a href="javascript:void(0)"><i class="zmdi zmdi-cake"></i> <span>Doors Details</span> <i class="fa fa-angle-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="{{route('door-category')}}"> Doors Category Type</a></li>
                                    <li><a href="{{route('category-details')}}"> Doors Category Details</a></li>
                                    <li><a href="{{route('door-size')}}">  Door Size</a></li>
                                   
                                </ul>
                            </li>
                            <li class="treeview {{ request()->routeIs('about-pagedetails') ? 'active' : '' }}">
                                <a href="javascript:void(0)"><i class="zmdi zmdi-code"></i> <span>About Page</span> <i class="fa fa-angle-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="{{route('about-pagedetails')}}">About Page Details</a></li>
                                    <li><a href="{{route('about-Project')}}">About project Details</a></li>
                                   
                                </ul>
                            </li>
                            <li class="treeview {{ request()->routeIs('video-details') ? 'active' : '' }}">
                                <a href="javascript:void(0)"><i class="zmdi zmdi-print"></i> <span>Video section</span> <i class="fa fa-angle-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="{{route('video-details')}}">Videos Details</a></li>
                                   
                                </ul>
                            </li>
                            <li class="{{ request()->routeIs('footer-details') ? 'active' : '' }}">
                            <a href="{{route('footer-details')}}"><i class="zmdi zmdi-shield-check"></i><span>Footer Details & Logo</span></a>
                            </li>
                            <li class="{{ request()->routeIs('contact-detail') ? 'active' : '' }}">
                                <a href="{{route('contact-detail')}}"><i class="zmdi zmdi-view-list"></i> <span>Enquiry </span></a>
                             </li>
                             <li class="{{ request()->routeIs('change-password') ? 'active' : '' }}">
                                <a href="{{route('change-password')}}"><i class="zmdi zmdi-edit"></i><span>Change Password</span></a>
                             </li>
                             <li >
                                <a href="{{url('admin/logout')}}"><i class="zmdi zmdi-lock-outline"></i><span>Logout</span> </a>
                             </li>
                         </ul>
                    </nav>
                </div>
            </div>
        </div>

        
        <!-- Page Content -->
        <div class="ecaps-page-content">
            <!-- Top Header Area -->
            <header class="top-header-area d-flex align-items-center justify-content-between">
                <div class="left-side-content-area d-flex align-items-center">
                    <!-- Mobile Logo -->
                    <div class="mobile-logo mr-3 mr-sm-4">
                        <a href="{{url('admin/dashboard')}}"><img src="{{asset('website/logo/'.$footer->logo)}}" alt="Mobile Logo"></a>
                    </div>

                    <!-- Triggers -->
                    <div class="ecaps-triggers mr-1 mr-sm-3">
                        <div class="menu-collasped" id="menuCollasped">
                            <i class="zmdi zmdi-menu"></i>
                        </div>
                        <div class="mobile-menu-open" id="mobileMenuOpen">
                            <i class="zmdi zmdi-menu"></i>
                        </div>
                    </div>
                </div>

                <div class="right-side-navbar d-flex align-items-center justify-content-end">
                    <!-- Mobile Trigger -->
                    <div class="right-side-trigger" id="rightSideTrigger">
                        <i class="fa fa-reorder"></i>
                    </div>

                    <!-- Top Bar Nav -->
                    <ul class="right-side-content d-flex align-items-center">
                        <!-- Left Side Nav -->
                        {{-- <li class="hide-phone app-search">
                            <form role="search" class=""><input type="text" placeholder="Search..." class="form-control"> <button type="submit" class="mr-0"><i class="fa fa-search"></i></button></form>
                        </li> --}}

                       

                        <li class="nav-item dropdown">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{asset('dash_assets/img/member-img/4.png')}}" alt=""></button>
                            <div class="dropdown-menu header-profile dropdown-menu-right">
                                <!-- User Profile Area -->
                                <div class="user-profile-area">
                                    {{-- <a href="#" class="dropdown-item"><i class="zmdi zmdi-account profile-icon" aria-hidden="true"></i> My profile</a>
                                    <a href="#" class="dropdown-item"><i class="zmdi zmdi-email-open profile-icon" aria-hidden="true"></i> Messages</a> --}}
                                    <a href="{{route('change-password')}}" class="dropdown-item"><i class="zmdi zmdi-brightness-7 profile-icon" aria-hidden="true"></i> Change Password</a>
                                    <a href="{{url('admin/logout')}}" class="dropdown-item"><i class="ti-unlink profile-icon" aria-hidden="true"></i>Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </header>