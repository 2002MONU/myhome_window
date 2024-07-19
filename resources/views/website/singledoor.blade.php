@extends('website.layouts.app')
@section('title')   {{$cat->title}}  @endsection
@section('mainsection')
<!-- breadcrumb area start -->
<div class="breadcrumb__area breadcrumb__height grey-bg p-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__content text-center z-index">
                    <div class="breadcrumb__list mb-10">
                    <span><a href="{{url('/')}}">Home</a></span>
                    <span class="dvdr">\</span>
                    <span>Doors</span>
                    </div>
                    <div class="breadcrumb__section-title-box mb-20">
                         <h3 class="breadcrumb__title">{{$cat->title}}</h3> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb area end -->
<!-- product details area start -->
<div class="tp-product-details-area tp-product-style-2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="tp-product-wrap">
                    <div class="row">
                        @foreach($category as $item)
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-30">
                            <div class="tp-product-item p-relative">
                                <div class="tp-product-thumb-box p-relative mb-25">
                                    <a href="{{url('door-category',$item->slug1)}}">
                                    <img class="image-1" src="{{asset('website/doortype/'.$item->image1)}}" alt="{{$item->titletype}}">
                                    <img class="image-2" src="{{asset('website/doortype/'.$item->image1)}}" alt="{{$item->titletype}}">
                                    </a>
                                    <div class="tp-product-icon-2">
                                        <button>
                                            <a href="{{url('door-category',$item->slug1)}}"><i>
                                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                    d="M16.892 8.16945C16.7401 7.96169 13.1215 3.08252 8.49992 3.08252C3.87833 3.08252 0.259582 7.96169 0.107877 8.16925C-0.035959 8.36634 -0.035959 8.63366 0.107877 8.83076C0.259582 9.03851 3.87833 13.9177 8.49992 13.9177C13.1215 13.9177 16.7401 9.03847 16.892 8.83092C17.036 8.63386 17.036 8.36634 16.892 8.16945ZM8.49992 12.7968C5.09563 12.7968 2.14715 9.5584 1.27434 8.49972C2.14602 7.44011 5.08832 4.20339 8.49992 4.20339C11.904 4.20339 14.8523 7.44123 15.7255 8.50048C14.8538 9.56006 11.9115 12.7968 8.49992 12.7968Z"
                                                    fill="black" />
                                                    <path
                                                    d="M8.50035 5.13721C6.64622 5.13721 5.1377 6.64573 5.1377 8.49986C5.1377 10.354 6.64622 11.8625 8.50035 11.8625C10.3545 11.8625 11.863 10.354 11.863 8.49986C11.863 6.64573 10.3545 5.13721 8.50035 5.13721ZM8.50035 10.7416C7.26419 10.7416 6.2586 9.73598 6.2586 8.49986C6.2586 7.26374 7.26423 6.25811 8.50035 6.25811C9.73647 6.25811 10.7421 7.26374 10.7421 8.49986C10.7421 9.73598 9.7365 10.7416 8.50035 10.7416Z"
                                                    fill="black" />
                                                </svg>
                                            </i></a>
                                        </button>
                                    </div>
                                </div>
                                <div class="tp-product-content text-center">
                                    <h4 class="tp-product-title"><a href="{{url('door-category',$item->slug1)}}" class="text-anim">{{$item->titletype}}</a></h4>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-30">
                            <div class="tp-product-item p-relative">
                                <div class="tp-product-thumb-box p-relative mb-25">
                                    <a href="{{url('door-category',$item->slug1)}}">
                                    <img class="image-1" src="web_assets/images/door/single.png" alt="">
                                    <img class="image-2" src="web_assets/images/door/single2.png" alt="">
                                    </a>
                                    <div class="tp-product-icon-2">
                                    <button>
                                            <a href="{{url('door-category',$item->slug1)}}"><i>
                                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                    d="M16.892 8.16945C16.7401 7.96169 13.1215 3.08252 8.49992 3.08252C3.87833 3.08252 0.259582 7.96169 0.107877 8.16925C-0.035959 8.36634 -0.035959 8.63366 0.107877 8.83076C0.259582 9.03851 3.87833 13.9177 8.49992 13.9177C13.1215 13.9177 16.7401 9.03847 16.892 8.83092C17.036 8.63386 17.036 8.36634 16.892 8.16945ZM8.49992 12.7968C5.09563 12.7968 2.14715 9.5584 1.27434 8.49972C2.14602 7.44011 5.08832 4.20339 8.49992 4.20339C11.904 4.20339 14.8523 7.44123 15.7255 8.50048C14.8538 9.56006 11.9115 12.7968 8.49992 12.7968Z"
                                                    fill="black" />
                                                    <path
                                                    d="M8.50035 5.13721C6.64622 5.13721 5.1377 6.64573 5.1377 8.49986C5.1377 10.354 6.64622 11.8625 8.50035 11.8625C10.3545 11.8625 11.863 10.354 11.863 8.49986C11.863 6.64573 10.3545 5.13721 8.50035 5.13721ZM8.50035 10.7416C7.26419 10.7416 6.2586 9.73598 6.2586 8.49986C6.2586 7.26374 7.26423 6.25811 8.50035 6.25811C9.73647 6.25811 10.7421 7.26374 10.7421 8.49986C10.7421 9.73598 9.7365 10.7416 8.50035 10.7416Z"
                                                    fill="black" />
                                                </svg>
                                            </i></a>
                                        </button>
                                    </div>
                                </div>
                                <div class="tp-product-content text-center">
                                    <h4 class="tp-product-title"><a href="{{url('door-category',$item->slug1)}}" class="text-anim">Single Doors</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-30">
                            <div class="tp-product-item p-relative">
                                <div class="tp-product-thumb-box p-relative mb-25">
                                    <a href="{{url('door-category',$item->slug1)}}">
                                    <img class="image-1" src="web_assets/images/door/single.png" alt="">
                                    <img class="image-2" src="web_assets/images/door/single2.png" alt="">
                                    </a>
                                    <div class="tp-product-icon-2">
                                    <button>
                                            <a href="{{url('door-category',$item->slug1)}}"><i>
                                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                    d="M16.892 8.16945C16.7401 7.96169 13.1215 3.08252 8.49992 3.08252C3.87833 3.08252 0.259582 7.96169 0.107877 8.16925C-0.035959 8.36634 -0.035959 8.63366 0.107877 8.83076C0.259582 9.03851 3.87833 13.9177 8.49992 13.9177C13.1215 13.9177 16.7401 9.03847 16.892 8.83092C17.036 8.63386 17.036 8.36634 16.892 8.16945ZM8.49992 12.7968C5.09563 12.7968 2.14715 9.5584 1.27434 8.49972C2.14602 7.44011 5.08832 4.20339 8.49992 4.20339C11.904 4.20339 14.8523 7.44123 15.7255 8.50048C14.8538 9.56006 11.9115 12.7968 8.49992 12.7968Z"
                                                    fill="black" />
                                                    <path
                                                    d="M8.50035 5.13721C6.64622 5.13721 5.1377 6.64573 5.1377 8.49986C5.1377 10.354 6.64622 11.8625 8.50035 11.8625C10.3545 11.8625 11.863 10.354 11.863 8.49986C11.863 6.64573 10.3545 5.13721 8.50035 5.13721ZM8.50035 10.7416C7.26419 10.7416 6.2586 9.73598 6.2586 8.49986C6.2586 7.26374 7.26423 6.25811 8.50035 6.25811C9.73647 6.25811 10.7421 7.26374 10.7421 8.49986C10.7421 9.73598 9.7365 10.7416 8.50035 10.7416Z"
                                                    fill="black" />
                                                </svg>
                                            </i></a>
                                        </button>
                                    </div>
                                </div>
                                <div class="tp-product-content text-center">
                                    <h4 class="tp-product-title"><a href="door1.php" class="text-anim">Single Doors</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-30">
                            <div class="tp-product-item p-relative">
                                <div class="tp-product-thumb-box p-relative mb-25">
                                    <a href="door1.php">
                                    <img class="image-1" src="web_assets/images/door/single.png" alt="">
                                    <img class="image-2" src="web_assets/images/door/single2.png" alt="">
                                    </a>
                                    <div class="tp-product-icon-2">
                                    <button>
                                            <a href="door1.php"><i>
                                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                    d="M16.892 8.16945C16.7401 7.96169 13.1215 3.08252 8.49992 3.08252C3.87833 3.08252 0.259582 7.96169 0.107877 8.16925C-0.035959 8.36634 -0.035959 8.63366 0.107877 8.83076C0.259582 9.03851 3.87833 13.9177 8.49992 13.9177C13.1215 13.9177 16.7401 9.03847 16.892 8.83092C17.036 8.63386 17.036 8.36634 16.892 8.16945ZM8.49992 12.7968C5.09563 12.7968 2.14715 9.5584 1.27434 8.49972C2.14602 7.44011 5.08832 4.20339 8.49992 4.20339C11.904 4.20339 14.8523 7.44123 15.7255 8.50048C14.8538 9.56006 11.9115 12.7968 8.49992 12.7968Z"
                                                    fill="black" />
                                                    <path
                                                    d="M8.50035 5.13721C6.64622 5.13721 5.1377 6.64573 5.1377 8.49986C5.1377 10.354 6.64622 11.8625 8.50035 11.8625C10.3545 11.8625 11.863 10.354 11.863 8.49986C11.863 6.64573 10.3545 5.13721 8.50035 5.13721ZM8.50035 10.7416C7.26419 10.7416 6.2586 9.73598 6.2586 8.49986C6.2586 7.26374 7.26423 6.25811 8.50035 6.25811C9.73647 6.25811 10.7421 7.26374 10.7421 8.49986C10.7421 9.73598 9.7365 10.7416 8.50035 10.7416Z"
                                                    fill="black" />
                                                </svg>
                                            </i></a>
                                        </button>
                                    </div>
                                </div>
                                <div class="tp-product-content text-center">
                                    <h4 class="tp-product-title"><a href="door1.php" class="text-anim">Single Doors</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-30">
                            <div class="tp-product-item p-relative">
                                <div class="tp-product-thumb-box p-relative mb-25">
                                    <a href="door1.php">
                                    <img class="image-1" src="web_assets/images/door/single.png" alt="">
                                    <img class="image-2" src="web_assets/images/door/single2.png" alt="">
                                    </a>
                                    <div class="tp-product-icon-2">
                                    <button>
                                            <a href="door1.php"><i>
                                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                    d="M16.892 8.16945C16.7401 7.96169 13.1215 3.08252 8.49992 3.08252C3.87833 3.08252 0.259582 7.96169 0.107877 8.16925C-0.035959 8.36634 -0.035959 8.63366 0.107877 8.83076C0.259582 9.03851 3.87833 13.9177 8.49992 13.9177C13.1215 13.9177 16.7401 9.03847 16.892 8.83092C17.036 8.63386 17.036 8.36634 16.892 8.16945ZM8.49992 12.7968C5.09563 12.7968 2.14715 9.5584 1.27434 8.49972C2.14602 7.44011 5.08832 4.20339 8.49992 4.20339C11.904 4.20339 14.8523 7.44123 15.7255 8.50048C14.8538 9.56006 11.9115 12.7968 8.49992 12.7968Z"
                                                    fill="black" />
                                                    <path
                                                    d="M8.50035 5.13721C6.64622 5.13721 5.1377 6.64573 5.1377 8.49986C5.1377 10.354 6.64622 11.8625 8.50035 11.8625C10.3545 11.8625 11.863 10.354 11.863 8.49986C11.863 6.64573 10.3545 5.13721 8.50035 5.13721ZM8.50035 10.7416C7.26419 10.7416 6.2586 9.73598 6.2586 8.49986C6.2586 7.26374 7.26423 6.25811 8.50035 6.25811C9.73647 6.25811 10.7421 7.26374 10.7421 8.49986C10.7421 9.73598 9.7365 10.7416 8.50035 10.7416Z"
                                                    fill="black" />
                                                </svg>
                                            </i></a>
                                        </button>
                                    </div>
                                </div>
                                <div class="tp-product-content text-center">
                                    <h4 class="tp-product-title"><a href="door1.php" class="text-anim">Single Doors</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-30">
                            <div class="tp-product-item p-relative">
                                <div class="tp-product-thumb-box p-relative mb-25">
                                    <a href="door1.php">
                                    <img class="image-1" src="web_assets/images/door/single.png" alt="">
                                    <img class="image-2" src="web_assets/images/door/single2.png" alt="">
                                    </a>
                                    <div class="tp-product-icon-2">
                                    <button>
                                            <a href="door1.php"><i>
                                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                    d="M16.892 8.16945C16.7401 7.96169 13.1215 3.08252 8.49992 3.08252C3.87833 3.08252 0.259582 7.96169 0.107877 8.16925C-0.035959 8.36634 -0.035959 8.63366 0.107877 8.83076C0.259582 9.03851 3.87833 13.9177 8.49992 13.9177C13.1215 13.9177 16.7401 9.03847 16.892 8.83092C17.036 8.63386 17.036 8.36634 16.892 8.16945ZM8.49992 12.7968C5.09563 12.7968 2.14715 9.5584 1.27434 8.49972C2.14602 7.44011 5.08832 4.20339 8.49992 4.20339C11.904 4.20339 14.8523 7.44123 15.7255 8.50048C14.8538 9.56006 11.9115 12.7968 8.49992 12.7968Z"
                                                    fill="black" />
                                                    <path
                                                    d="M8.50035 5.13721C6.64622 5.13721 5.1377 6.64573 5.1377 8.49986C5.1377 10.354 6.64622 11.8625 8.50035 11.8625C10.3545 11.8625 11.863 10.354 11.863 8.49986C11.863 6.64573 10.3545 5.13721 8.50035 5.13721ZM8.50035 10.7416C7.26419 10.7416 6.2586 9.73598 6.2586 8.49986C6.2586 7.26374 7.26423 6.25811 8.50035 6.25811C9.73647 6.25811 10.7421 7.26374 10.7421 8.49986C10.7421 9.73598 9.7365 10.7416 8.50035 10.7416Z"
                                                    fill="black" />
                                                </svg>
                                            </i></a>
                                        </button>
                                    </div>
                                </div>
                                <div class="tp-product-content text-center">
                                    <h4 class="tp-product-title"><a href="door1.php" class="text-anim">Single Doors</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-30">
                            <div class="tp-product-item p-relative">
                                <div class="tp-product-thumb-box p-relative mb-25">
                                    <a href="door1.php">
                                    <img class="image-1" src="web_assets/images/door/single.png" alt="">
                                    <img class="image-2" src="web_assets/images/door/single2.png" alt="">
                                    </a>
                                    <div class="tp-product-icon-2">
                                    <button>
                                            <a href="door1.php"><i>
                                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                    d="M16.892 8.16945C16.7401 7.96169 13.1215 3.08252 8.49992 3.08252C3.87833 3.08252 0.259582 7.96169 0.107877 8.16925C-0.035959 8.36634 -0.035959 8.63366 0.107877 8.83076C0.259582 9.03851 3.87833 13.9177 8.49992 13.9177C13.1215 13.9177 16.7401 9.03847 16.892 8.83092C17.036 8.63386 17.036 8.36634 16.892 8.16945ZM8.49992 12.7968C5.09563 12.7968 2.14715 9.5584 1.27434 8.49972C2.14602 7.44011 5.08832 4.20339 8.49992 4.20339C11.904 4.20339 14.8523 7.44123 15.7255 8.50048C14.8538 9.56006 11.9115 12.7968 8.49992 12.7968Z"
                                                    fill="black" />
                                                    <path
                                                    d="M8.50035 5.13721C6.64622 5.13721 5.1377 6.64573 5.1377 8.49986C5.1377 10.354 6.64622 11.8625 8.50035 11.8625C10.3545 11.8625 11.863 10.354 11.863 8.49986C11.863 6.64573 10.3545 5.13721 8.50035 5.13721ZM8.50035 10.7416C7.26419 10.7416 6.2586 9.73598 6.2586 8.49986C6.2586 7.26374 7.26423 6.25811 8.50035 6.25811C9.73647 6.25811 10.7421 7.26374 10.7421 8.49986C10.7421 9.73598 9.7365 10.7416 8.50035 10.7416Z"
                                                    fill="black" />
                                                </svg>
                                            </i></a>
                                        </button>
                                    </div>
                                </div>
                                <div class="tp-product-content text-center">
                                    <h4 class="tp-product-title"><a href="door1.php" class="text-anim">Single Doors</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-30">
                            <div class="tp-product-item p-relative">
                                <div class="tp-product-thumb-box p-relative mb-25">
                                    <a href="door1.php">
                                    <img class="image-1" src="web_assets/images/door/single.png" alt="">
                                    <img class="image-2" src="web_assets/images/door/single2.png" alt="">
                                    </a>
                                    <div class="tp-product-icon-2">
                                    <button>
                                            <a href="door1.php"><i>
                                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                    d="M16.892 8.16945C16.7401 7.96169 13.1215 3.08252 8.49992 3.08252C3.87833 3.08252 0.259582 7.96169 0.107877 8.16925C-0.035959 8.36634 -0.035959 8.63366 0.107877 8.83076C0.259582 9.03851 3.87833 13.9177 8.49992 13.9177C13.1215 13.9177 16.7401 9.03847 16.892 8.83092C17.036 8.63386 17.036 8.36634 16.892 8.16945ZM8.49992 12.7968C5.09563 12.7968 2.14715 9.5584 1.27434 8.49972C2.14602 7.44011 5.08832 4.20339 8.49992 4.20339C11.904 4.20339 14.8523 7.44123 15.7255 8.50048C14.8538 9.56006 11.9115 12.7968 8.49992 12.7968Z"
                                                    fill="black" />
                                                    <path
                                                    d="M8.50035 5.13721C6.64622 5.13721 5.1377 6.64573 5.1377 8.49986C5.1377 10.354 6.64622 11.8625 8.50035 11.8625C10.3545 11.8625 11.863 10.354 11.863 8.49986C11.863 6.64573 10.3545 5.13721 8.50035 5.13721ZM8.50035 10.7416C7.26419 10.7416 6.2586 9.73598 6.2586 8.49986C6.2586 7.26374 7.26423 6.25811 8.50035 6.25811C9.73647 6.25811 10.7421 7.26374 10.7421 8.49986C10.7421 9.73598 9.7365 10.7416 8.50035 10.7416Z"
                                                    fill="black" />
                                                </svg>
                                            </i></a>
                                        </button>
                                    </div>
                                </div>
                                <div class="tp-product-content text-center">
                                    <h4 class="tp-product-title"><a href="door1.php" class="text-anim">Single Doors</a></h4>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="text-center d-flex justify-content-center">
                                <nav>
                                    <ul>
                                    {!! $category->appends(['sort' => 'department'])->links() !!}
                                     </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product details area end -->
@endsection