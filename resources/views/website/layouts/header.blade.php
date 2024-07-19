<!doctype html>
<html class="no-js" lang="zxx">
<head>
   <!--Meta tags start-->
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>@yield('title') | My Home Interiors  </title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="keywords" content="My Home Interiors" />
   <meta name="description" content="My Home Interiors" />
   <meta name="author" content="" />
   <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>
   <link rel="canonical" href="https://myhomeinteriors.com/" />
   <meta property="og:locale" content="en_US">
   <meta property="og:type" content="website">
   <meta property="og:title" content="My Home Interiors">
   <meta property="og:description" content="My Home Interiors">
   <meta property="og:url" content="https://myhomeinteriors.com/">
   <meta property="og:site_name" content="My Home Interiors">
   <meta property="og:updated_time" content="2021-04-13T14:03:56+00:00">
   <meta property="og:image" content="img/thumbnail-logo.jpg">
   <meta property="og:image:secure_url" content="img/thumbnail-logo.jpg">
   <meta property="og:image:width" content="521">
   <meta property="og:image:height" content="210">
   <meta property="og:image:alt" content="Homepage">
   <meta property="og:image:type" content="image/png">
   <meta name="twitter:card" content="summary_large_image">
   <meta name="twitter:title" content="Homepage - My Home Interiors">
   <meta name="twitter:description" content="My Home Interiors">
   <meta name="twitter:image" content="img/thumbnail-logo.jpg">
   <!--Meta tags END-->
   @php
	//$user = \App\Models\User::find(1);
	$category = \App\Models\DoorCategory::where('status',1)->get();
   $footer = \App\Models\FooterDetail::find(1);
	@endphp
   <!--Plugin Links start -->
   <link rel="shortcut icon" type="image/x-icon" href="{{asset('website/logo/'.$footer->favicon)}}">
   <link rel="stylesheet" href="{{asset('web_assets/css/bootstrap.css')}}">
   <link rel="stylesheet" href="{{asset('web_assets/css/animate.css')}}">
   <link rel="stylesheet" href="{{asset('web_assets/css/swiper-bundle.css')}}">
   <link rel="stylesheet" href="{{asset('web_assets/css/slick.css')}}">
   <link rel="stylesheet" href="{{asset('web_assets/css/magnific-popup.css')}}">
   <link rel="stylesheet" href="{{asset('web_assets/css/flaticon_broadx.css')}}">
   <link rel="stylesheet" href="{{asset('web_assets/css/font-awesome-pro.css')}}">
   <link rel="stylesheet" href="{{asset('web_assets/css/spacing.css')}}">
   <link rel="stylesheet" href="{{asset('web_assets/css/custom-animation.css')}}">
   <link rel="stylesheet" href="{{asset('web_assets/css/main.css')}}">
   
   <!--Plugin Links end -->

   
   
</head>
<body>
   <!-- back to top start -->
   <div class="back-to-top-wrapper">
      <button id="back_to_top" type="button" class="back-to-top-btn">
         <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
               stroke-linejoin="round" />
         </svg>
      </button>
   </div>
   <!-- back to top end -->
   <header class="tp-header-height tp-header-transparent">
      <!-- header area start -->
      <div id="header-sticky" class="tp-header-3-area tp-header-3-wrap">
         <div class="container">
            <div class="row align-items-center justify-content-between">
               <div class="col-xl-2 col-lg-4 col-6 col-sm-4">
                  <div class="tp-header-3-logo">
                     <a href="index.php"><img src="{{asset('website/logo/'.$footer->logo)}}" alt="logo"></a>
                  </div>
               </div>
               <div class="col-xl-6 ">
                  <div class="tp-header-main-menu d-none d-xl-block">
                     <nav class="tp-main-menu-content">
                        <ul>
                           <li class="has-dropdown"><a href="{{url('/')}}">Home</a></li>
                           <li class="has-dropdown"><a href="{{route('about-us')}}">About us</a></li>
                           <li class="has-dropdown">
                              <a href="#">Doors <i class="fas fa-chevron-down"></i></a>
                              <ul class="submenu tp-submenu">
                                 @foreach($category as $item)
                                 <li> <a href="{{url('doors-view',$item->slug)}}">{{$item->title}}</a></li>
                                 {{-- <li> <a href="{{route('double-doors')}}">Double Doors</a></li>
                                 <li> <a href="{{route('double-reabte-doors-with-mesh')}}">Double Rebate Doors With Mesh</a></li>
                                 <li> <a href="{{route('special-doors')}}">Special Doors</a></li>
                                 <li> <a href="{{route('window')}}">Windows</a></li> --}}
                                 @endforeach
                              </ul>
                           </li>
                           <li class="has-dropdown"><a href="{{route('videos')}}">Videos</a></li>
                           <li class="has-dropdown"><a href="{{route('blog')}}">Blogs</a></li>
                           <li class="has-dropdown"><a href="{{route('contact')}}">Contact us</a></li>
                        </ul>
                     </nav>
                  </div>
                  <button type="button" class="side-menu__toggler" data-toggle="collapse" onclick="openNav()">
                     <i class="fa fa-bars"></i>
                  </button>
                 
                  <div id="mySidenav" class="sidenav block-overlay ">
                         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <ul>
                        <li class="has-dropdown"><a href="{{url('/')}}">Home</a></li>
                        <li class="has-dropdown"><a href="{{route('about-us')}}">About us</a></li>
                     <li>
                        <a data-bs-toggle="collapse" href="#demo1">Doors <i style="float: right;" class="fa fa-chevron-down"></i></a>
                        <ul id="demo1" class="collapse">
                           @foreach($category as $item)
                                 <li> <a href="{{url('doors-view',$item->slug)}}">{{$item->title}}</a></li>
                                 {{-- <li> <a href="{{route('double-doors')}}">Double Doors</a></li>
                                 <li> <a href="{{route('double-reabte-doors-with-mesh')}}">Double Rebate Doors With Mesh</a></li>
                                 <li> <a href="{{route('special-doors')}}">Special Doors</a></li>
                                 <li> <a href="{{route('window')}}">Windows</a></li> --}}
                                 @endforeach
                        </ul>
                     </li>
                     <li class="has-dropdown"><a href="{{route('videos')}}">Videos</a></li>
                     <li class="has-dropdown"><a href="{{route('blog')}}">Blogs</a></li>
                     <li class="has-dropdown"><a href="{{route('contact')}}">Contact us</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- header area end -->
   </header>