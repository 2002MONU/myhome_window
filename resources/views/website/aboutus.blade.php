@extends('website.layouts.app')
@section('title') About-us @endsection
@section('mainsection')
    <!-- breadcrumb area start -->
    <div class="breadcrumb__area breadcrumb__height grey-bg p-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__content text-center z-index">
                        <div class="breadcrumb__list mb-10">
                        <span><a href="index.html">Home</a></span>
                        <span class="dvdr">\</span>
                        <span>About</span>
                        </div>
                        <div class="breadcrumb__section-title-box mb-20">
                        <h3 class="breadcrumb__title">About us</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->
    <div class="tp-about-area tp-about-wrapper grey-bg fix">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-6 col-lg-6">
                  <div class="tp-about-left">
                     <div class="tp-about-title-box mb-50">
                        <span class="tp-section-subtitle">My Home Interiors</span>
                        <h4 class="tp-section-title">{{$about->heading}}</h4>
                     </div>
                     <div class="tp-about-text mb-45">
                        <span>* {{$about->title}} ?</span>
                        <p>{{$about->description}}</p>
                     </div>
                     <div class="tp-about-button-box d-wrap d-sm-flex align-items-center">
                        <!-- <div class="tp-about-button">
                           <a class="tp-btn-theme" href="#"><span>More About Us</span></a>
                        </div> -->
                        <div class="tp-about-contact">
                           <a href="tel:7386 1313 99">
                              <span>
                                  <img src="{{asset('web_assets/images/phone-call.png')}}" alt="">
                              </span>
                              7386 1313 99
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6">
                  <div class="tp-about-thumb-box text-lg-end p-relative">
                     <div class="tp-about-main-thumb">
                        <img src="{{asset('website/aboutpage/'.$about->image1)}}" alt="">
                     </div>
                     <div class="tp-about-thumb-sm">
                        <img src="{{asset('website/aboutpage/'.$about->image2)}}" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--About section--->
      
<!-- funfact area start -->
<div class="tp-funfact-area">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <div class="tp-funfact-wrap d-flex align-items-center justify-content-between z-index">
                     <div class="tp-funfact-item text-center">
                           <div>
                              <img src="{{asset('web_assets/images/experience.png')}}" alt="">
                           </div>
                           <div>
                           <span>Experiance</span>
                           <h5 class="tp-funfact-number"><i class="purecounter" data-purecounter-duration="1"
                              data-purecounter-end="{{$homeabout->experiance}}">{{$homeabout->experiance}}</i>+</h5>
                           </div>
                     </div>
                     <div class="tp-funfact-item text-center">
                        <div>
                           <img src="{{asset('web_assets/images/happy-face.png')}}" alt="">
                        </div>
                        <div>
                        <span>Happy Clients</span>
                        <h5 class="tp-funfact-number"><i class="purecounter" data-purecounter-duration="1"
                           data-purecounter-end="{{$homeabout->happyclient}}">{{$homeabout->happyclient}}</i>+</h5>
                        </div>
                     </div>
                     <div class="tp-funfact-item text-center">
                        <div>
                           <img src="{{asset('web_assets/images/delivered.png')}}" alt="">
                        </div>
                        <div>
                        <span>Projects Delivered</span>
                        <h5 class="tp-funfact-number"><i class="purecounter" data-purecounter-duration="1"
                           data-purecounter-end="{{$homeabout->projectdeli}}">{{$homeabout->projectdeli}}</i>+</h5>
                        </div>
                     </div>
                     <div class="tp-funfact-item text-center">
                        <div>
                           <img src="{{asset('web_assets/images/medal.png')}}" alt="">
                        </div>
                        <div>
                        <span>Quality</span>
                        <h5 class="tp-funfact-number"><i class="purecounter" data-purecounter-duration="1"
                           data-purecounter-end="{{$homeabout->projectdeli}}">{{$homeabout->projectdeli}}</i>+</h5>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- funfact area end -->
      <!-- about area start -->
      <div class="tp-funfact-2-area fix">
         <div class="container">
            <div class="row">
               <div class="col-xxl-7 col-lg-6 wow tpfadeLeft" data-wow-duration=".9s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.5s; animation-name: tpfadeLeft;">
                  <div class="tp-funfact-2-title-box">
                     <span class="tp-section-subtitle">My Home Interiors</span>
                     <h3 class="tp-section-title mb-55">{{$aboutproject->heading}}</h3>
                     <p>{!! $aboutproject->description !!}</p>
                  </div>
               </div>
               <div class="col-xxl-5 col-lg-6 wow tpfadeRight" data-wow-duration=".9s" data-wow-delay=".7s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.7s; animation-name: tpfadeRight;">
                  <div class="tp-funfact-2-wrap">
                     <ul>
                        <li>
                           <div class="tp-funfact-item">
                              <div class="p-relative">
                                 <div class="tp-funfact-2-big-text">
                                    <span>M</span>
                                 </div>
                                 <span>Satsified Clients</span>
                                 <h5 class="tp-funfact-2-number"><i class="purecounter" data-purecounter-duration="1" data-purecounter-end="{{$aboutproject->satisfied_clients}}">{{$aboutproject->satisfied_clients}}</i>+</h5>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="tp-funfact-item d-flex justify-content-end">
                              <div class="p-relative">
                                 <div class="tp-funfact-2-big-text">
                                    <span>Y</span>
                                 </div>
                                 <span>Total Products</span>
                                 <h5 class="tp-funfact-2-number"><i class="purecounter" data-purecounter-duration="1" data-purecounter-end="{{$aboutproject->total_products}}">{{$aboutproject->total_products}}</i>+</h5>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="tp-funfact-item">
                              <div class="p-relative">
                                 <div class="tp-funfact-2-big-text">
                                    <span>HO</span>
                                 </div>
                                 <span>Years of build</span>
                                 <h5 class="tp-funfact-2-number"><i class="purecounter" data-purecounter-duration="1" data-purecounter-end="{{$aboutproject->years_of_build}}">{{$aboutproject->years_of_build}}</i>+</h5>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="tp-funfact-item d-flex justify-content-end">
                              <div class="p-relative">
                                 <div class="tp-funfact-2-big-text">
                                    <span>ME</span>
                                 </div>
                                 <span>Total Revinew</span>
                                 <h5 class="tp-funfact-2-number"><i class="purecounter" data-purecounter-duration="1" data-purecounter-end="{{$aboutproject->total_revenue}}">{{$aboutproject->total_revenue}}</i>+</h5>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about area end -->
@endsection