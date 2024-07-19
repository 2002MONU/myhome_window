@extends('website.layouts.app')
@section('title') Home @endsection
@section('mainsection')
<main>
    <!-- slider area start -->
    <div class="tp-slider-3-area fix">
       <div class="tp-slider-3-wrapper">
          <div class="swiper-container tp-slider-3-active">
             <div class="swiper-wrapper">
               @foreach($homebanner as $home)
                <div class="swiper-slide">
                   <div class="tp-slider-3-height tp-slider-3-overley p-relative">
                      <div class="tp-slider-3-bg" data-background="{{asset('website/homepage/'.$home->image)}}"></div>
                      <div class="container">
                         <div class="row">
                            <div class="col-xl-9">
                               <div class="tp-slider-3-content z-index">
                                  <!-- <h4 class="tp-slider-subtitle pb-20 wow tpfadeUp" data-wow-duration=".9s"
                                     data-wow-delay=".3s">Trusted Doors and Windows Company</h4>
                                  <h1 class="tp-slider-3-title wow tpfadeUp" data-wow-duration=".9s"
                                     data-wow-delay=".5s">Bring Home Security Through  <b>High Quality Steel & UPVC Doors and Windows</b> <br>
                                  </h1> -->
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                @endforeach
                {{-- <div class="swiper-slide">
                   <div class="tp-slider-3-height tp-slider-3-overley p-relative">
                      <div class="tp-slider-3-bg" data-background="{{url('web_assets/images/sliders/2.jpg')}}"></div>
                      <div class="container">
                         <div class="row">
                            <div class="col-xl-9">
                               <div class="tp-slider-3-content z-index">
                                  <!-- <h4 class="tp-slider-subtitle pb-20 wow tpfadeUp" data-wow-duration=".9s"
                                     data-wow-delay=".3s">Trusted Doors and Windows Company</h4>
                                  <h1 class="tp-slider-3-title wow tpfadeUp" data-wow-duration=".9s"
                                     data-wow-delay=".5s">Bring Home Security Through  <b>High Quality Steel & UPVC Doors and Windows</b> <br>
                                  </h1> -->
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div> --}}
             </div>
          </div>
       </div>
    </div>
    <!-- slider area end -->
    <!--Counter Section Start--->
    <div class="tp-about-area tp-about-wrapper grey-bg fix autonumbers">
       <div class="container">
          <div class="row align-items-center justify-content-center">
             <div class="col-xl-8 col-lg-8">
                <div class="tp-about-left">
                   <div class="tp-about-title-box mb-50 text-center">
                      <span class="tp-section-subtitle-2">My Home Interiors</span>
                      <h4 class="tp-section-title-2 text-center">{{$homeabout->title}}</h4>
                   </div>
                   <div class="tp-about-text-2 mb-45">
                      <p class="text-center">{{$homeabout->description}}</p>
                   </div>
                </div>
             </div>
          </div>
          <div class="row">
             <div class="col-xl-12">
                <div class="tp-funfact-wrap-1 tp-funfact-wrap d-flex align-items-center justify-content-between z-index">
                   <div class="col-lg-3 col-md-6 col-sm-12">
                      <div class="tp-funfact-item text-center">
                            <div>
                               <img src="{{asset('web_assets/images/experience.png')}}" alt="experience-logo">
                            </div>
                            <div class="mrl-50">
                            <span>Experiance</span>
                            <h5 class="tp-funfact-number"><i class="purecounter" data-purecounter-duration="1"
                               data-purecounter-end="{{$homeabout->experiance}}">{{$homeabout->experiance}}</i>+</h5>
                            </div>
                      </div>
                   </div>
                   <div class="col-lg-3 col-md-6 col-sm-12">
                      <div class="tp-funfact-item text-center">
                         <div>
                            <img src="{{asset('web_assets/images/happy-face.png')}}" alt="happy-face">
                         </div>
                         <div class="mrl-50">
                         <span>Happy Clients</span>
                         <h5 class="tp-funfact-number"><i class="purecounter" data-purecounter-duration="1"
                            data-purecounter-end="{{$homeabout->happyclient}}">{{$homeabout->happyclient}}</i>+</h5>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-3 col-md-6 col-sm-12">
                      <div class="tp-funfact-item text-center">
                         <div>
                            <img src="{{asset('web_assets/images/delivered.png')}}" alt="delivered-logo">
                         </div>
                         <div class="mrl-50">
                         <span>Projects Delivered</span>
                         <h5 class="tp-funfact-number"><i class="purecounter" data-purecounter-duration="1"
                            data-purecounter-end="{{$homeabout->projectdeli}}">{{$homeabout->projectdeli}}</i>+</h5>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-3 col-md-6 col-sm-12">
                      <div class="tp-funfact-item text-center">
                         <div>
                            <img src="{{asset('web_assets/images/medal.png')}}" alt="medal-logo">
                         </div>
                         <div class="mrl-50">
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
    </div>
    <!--Counter Setion END--->
    <!-- service area start -->
    <div class="tp-service-3-area grey-bg tp-about-wrapper">
       <div class="container">
          <div class="tp-service-3-title-wrap mb-45">
             <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-7">
                   <div class="tp-service-3-title-box">
                      <span class="tp-section-subtitle">Windows & Doors Services</span>
                      <h4 class="tp-section-title">Our Stylist & Modern
                         Door and Windows Services</h4>
                   </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-5">
                   <div class="tp-service-3-button text-md-end">
                      <a class="tp-btn-theme" href="{{route('all-doors-details')}}"><span>More Doors</span></a>
                   </div>
                </div>
             </div>
          </div>
          <div class="row">
             <div class="col-xl-12">
                <div class="tp-service-3-wraper">
                   <div class="swiper-container tp-service-3-active">
                      <div class="swiper-wrapper">
                        @foreach($catdetails as $services)
                         <div class="swiper-slide">
                            <div class="tp-service-3-item p-relative">
                               <div class="tp-service-3-thumb">
                                  <img src="{{asset('website/doortype/'.$services->image1)}}" alt="{{$services->titletype}}">
                               </div>
                               <div class="tp-service-3-content">
                                  <h4 class="tp-service-3-title"><a class="text-anim-2" href="{{url('door-category',$services->slug1)}}">
                                    {{$services->titletype}}</a></h4>
                               </div>
                            </div>
                         </div>
                         @endforeach
                         {{-- <div class="swiper-slide">
                            <div class="tp-service-3-item p-relative">
                               <div class="tp-service-3-thumb">
                                  <img src="{{url('web_assets/images/door/double_door.png')}}" alt="">
                               </div>
                               <div class="tp-service-3-content">
                                  <h4 class="tp-service-3-title"><a class="text-anim-2" href="#">2.
                                     Double Doors</a></h4>
                               </div>
                            </div>
                         </div>
                         <div class="swiper-slide">
                            <div class="tp-service-3-item p-relative">
                               <div class="tp-service-3-thumb">
                                  <img src="{{url('web_assets/images/door/double_rebate.jpeg')}}" alt="">
                               </div>
                               <div class="tp-service-3-content">
                                  <h4 class="tp-service-3-title"><a class="text-anim-2" href="#">3.
                                     Double Rebate Door With Mesh</a></h4>
                               </div>
                            </div>
                         </div>
                         <div class="swiper-slide">
                            <div class="tp-service-3-item p-relative">
                               <div class="tp-service-3-thumb">
                                  <img src="{{url('web_assets/images/door/special_doors.jpeg')}}" alt="">
                               </div>
                               <div class="tp-service-3-content">
                                  <h4 class="tp-service-3-title"><a class="text-anim-2" href="#">4.
                                     Special Doors</a></h4>
                               </div>
                            </div>
                         </div>
                         <div class="swiper-slide">
                            <div class="tp-service-3-item p-relative">
                               <div class="tp-service-3-thumb">
                                  <img src="{{url('web_assets/images/door/windows.jpeg')}}" alt="">
                               </div>
                               <div class="tp-service-3-content">
                                  <h4 class="tp-service-3-title"><a class="text-anim-2" href="#">5.
                                     Windows</a></h4>
                               </div>
                            </div>
                         </div> --}}
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- service area end -->
    <!-- about area start -->
    <div class="tp-about-area tp-about-wrapper grey-bg fix feat">
       <div class="container">
             <div class="tp-about-title-box mb-50">
                <span class="tp-section-subtitle">Features</span>
                <h4 class="tp-section-title">Our Features</h4>
             </div>
          <div class="row align-items-center">
            @foreach($features as $feature)
             <div class="col-lg-2">
                <div class="features text-center">
                   <img src="{{asset('website/homepage/'.$feature->icon)}}" alt="{{$feature->feature}}" >
                   <h5>{{$feature->feature}} </h5>
                </div>
             </div>
             @endforeach
           {{--  <div class="col-lg-2">
                <div class="features text-center">
                   <img src="{{url('web_assets/images/value.png')}}" alt="">
                   <h5>Value For Money</h5>
                </div>
              </div>
             <div class="col-lg-2">
                <div class="features text-center">
                   <img src="{{url('web_assets/images/firewall.png')}}" alt="">
                   <h5>Fire Resistant</h5>
                </div>
             </div>
             <div class="col-lg-2">
                <div class="features text-center">
                   <img src="{{url('web_assets/images/growth.png')}}" alt="">
                   <h5>Environment Friendly</h5>
                </div>
             </div>
             <div class="col-lg-2">
                <div class="features text-center">
                   <img src="{{url('web_assets/images/rain.png')}}" alt="">
                   <h5>Weather Proof</h5>
                </div>
             </div>
             <div class="col-lg-2">
                <div class="features text-center">
                   <img src="{{url('web_assets/images/determination.png')}}" alt="">
                   <h5>Strength</h5>
                </div>
             </div> --}}
          </div>
          {{-- <div class="row align-items-center mt-4">
             <div class="col-lg-2">
                <div class="features text-center">
                   <img src="{{url('web_assets/images/wrench.png')}}" alt="">
                   <h5>Maintainance Free</h5>
                </div>
             </div>
             
             <div class="col-lg-2">
                <div class="features text-center">
                   <img src="{{url('web_assets/images/shield.png')}}" alt="">
                   <h5>High Durable</h5>
                </div>
             </div>
             <div class="col-lg-2">
                <div class="features text-center">
                   <img src="web_assets/images/door.png" alt="">
                   <h5>Multi Looking </h5>
                </div>
             </div>
             <div class="col-lg-2">
                <div class="features text-center">
                   <img src="web_assets/images/circle.png" alt="">
                   <h5>Termite Resistant</h5>
                </div>
             </div>
             <div class="col-lg-2">
                <div class="features text-center">
                   <img src="web_assets/images/rescale.png" alt="">
                   <h5>Different Sizes</h5>
                </div>
             </div>
             
             <div class="col-lg-2">
                <div class="features text-center">
                   <img src="web_assets/images/reliability.png" alt="">
                   <h5>High Quality Finish</h5>
                </div>
             </div>
          </div> --}}
       </div>
    </div>
    <!-- about area end -->
    <!-- about area start -->
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
                    <div class="tp-about-button">
                        <a class="tp-btn-theme" href="{{url('aboutus')}}"><span>More About Us</span></a>
                     </div> 
                     <div class="tp-about-contact">
                        <a href="tel:7386 1313 99">
                           <span>
                               <img src="{{asset('web_assets/images/phone-call.png')}}" alt="Phone-number">
                           </span>+91
                          {{$footer->contact}}
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6">
               <div class="tp-about-thumb-box text-lg-end p-relative">
                  <div class="tp-about-main-thumb">
                     <img src="{{asset('website/aboutpage/'.$about->image1)}}" alt="about-image-1">
                  </div>
                  <div class="tp-about-thumb-sm">
                     <img src="{{asset('website/aboutpage/'.$about->image2)}}" alt="about-image-2">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--About section--->
    <!-- about area end -->
     
    
    <!-- blog area start -->
    <div class="tp-blog-area tp-about-wrapper">
       <div class="container">
          <div class="tp-blog-title-wrap mb-50">
             <div class="row align-items-end">
                <div class="col-xl-6 col-lg-6 col-md-8">
                   <div class="tp-blog-title-box">
                      <span class="tp-section-subtitle">News &amp; Blog</span>
                      <h4 class="tp-section-title">Leates News &amp; Blog</h4>
                   </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-4">
                   <div class="tp-blog-button text-md-end">
                      <a class="tp-btn-theme" href="{{url('blog')}}"><span>More News &amp; Blog</span></a>
                   </div>
                </div>
             </div>
          </div>
          <div class="row">
            @foreach($blogdetails as $blog)
             <div class="col-xl-4 col-lg-4 col-md-6 mb-30  wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.3s; animation-name: tpfadeUp;">
                <div class="tp-blog-item">
                   <div class="tp-blog-thumb fix p-relative mb-35">
                      <a href="#">
                         <img src="{{asset('website/blogpage/'.$blog->image)}}" alt="{{$blog->title}}">
                      </a>
                      <div class="tp-blog-tag">
                         <span>By: {{$blog->writer}}</span>
                      </div>
                   </div>
                   <div class="tp-blog-content">
                      <h4 class="tp-blog-title mb-25">
                         <a class="text-anim" href="{{route('blog-details',$blog->slug)}}">{{$blog->title}}</a>
                      </h4>
                   </div>
                </div>
             </div>
             @endforeach
             {{-- <div class="col-xl-4 col-lg-4 col-md-6 mb-30  wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.5s; animation-name: tpfadeUp;">
                <div class="tp-blog-item">
                   <div class="tp-blog-thumb p-relative fix mb-35">
                      <a href="#">
                         <img src="web_assets/images/blog/blog-1-2.jpg" alt="">
                      </a>
                      <div class="tp-blog-tag">
                         <span>By: Transpa</span>
                      </div>
                   </div>
                   <div class="tp-blog-content">
                      <h4 class="tp-blog-title mb-25">
                         <a class="text-anim" href="#">windows that project outward from the wall,
                            usually on the upper</a>
                      </h4>
                   </div>
                </div>
             </div>
             <div class="col-xl-4 col-lg-4 col-md-6 mb-30  wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".9s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.9s; animation-name: tpfadeUp;">
                <div class="tp-blog-item">
                   <div class="tp-blog-thumb p-relative fix mb-35">
                      <a href="#">
                         <img src="web_assets/images/blog/blog-1-3.jpg" alt="">
                      </a>
                      <div class="tp-blog-tag">
                         <span>By: Transpa</span>
                      </div>
                   </div>
                   <div class="tp-blog-content">
                      <h4 class="tp-blog-title mb-25">
                         <a class="text-anim" href="#">Providing solutions for Industrial
                            ment, and restoration.</a>
                      </h4>
                   </div>
                </div>
             </div> --}}
          </div>
       </div>
    </div>
    <!-- blog area end -->
    <!-- testimonial area start -->
    <div class="tp-testimonial-2-area tp-about-wrapper">
       <div class="container">
          <div class="row">
             <div class="col-xl-12">
                <div class="tp-testimonial-2-title-box text-center mb-35">
                   <span class="tp-section-subtitle">Trusted Client’s feedback</span>
                   <h3 class="tp-section-title">Clients' Testimonials</h3>
                </div>
             </div>
          </div>
          <div class="row">
             <div class="col-xl-12">
                <div class="tp-testimonial-2-slider-box">
                   <div class="swiper-container tp-testimonial-2-active">
                      <div class="swiper-wrapper">
                        @foreach($testino as $item)
                         <div class="swiper-slide">
                            <div class="tp-testimonial-2-item p-relative">
                               <div class="tp-testimonial-2-avata">
                                  <img src="{{asset('website/homepage/'.$item->image)}}" alt="image-{{$item->clientname}}">
                               </div>
                               <div class="tp-testimonial-2-quote">
                                  <img src="{{asset('web_assets/images/quote.png')}}" alt="">
                               </div>
                               <div class="tp-testimonial-2-content">
                                  <div class="tp-testimonial-2-text">
                                     <p>
                                        “ {{strip_tags($item->description)}}
                                     </p>
                                  </div>
                                  <div class="tp-testimonial-2-author-info">
                                     <h4 class="tp-testimonial-2-author-name">{{$item->clientname}}</h4>
                                     <span>{{$item->designation}}</span>
                                  </div>
                               </div>
                            </div>
                         </div>
                         @endforeach
                         {{-- <div class="swiper-slide">
                            <div class="tp-testimonial-2-item p-relative">
                               <div class="tp-testimonial-2-avata">
                                  <img src="web_assets/images/testimonial-2-2.png" alt="">
                               </div>
                               <div class="tp-testimonial-2-quote">
                                  <img src="web_assets/images/quote.png" alt="">
                               </div>
                               <div class="tp-testimonial-2-content">
                                  <div class="tp-testimonial-2-text">
                                     <p>
                                        “ The most advanced revenue than thi.
                                        I like Level more and more each da
                                        easier. It really saves me time and ef
                                        business has been lacking.
                                     </p>
                                  </div>
                                  <div class="tp-testimonial-2-author-info">
                                     <h4 class="tp-testimonial-2-author-name">Leslie Alexander</h4>
                                     <span>Ceo At Goggle</span>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="swiper-slide">
                            <div class="tp-testimonial-2-item p-relative">
                               <div class="tp-testimonial-2-avata">
                                  <img src="web_assets/images/testimonial-2-2.png" alt="">
                               </div>
                               <div class="tp-testimonial-2-quote">
                                  <img src="web_assets/images/quote.png" alt="">
                               </div>
                               <div class="tp-testimonial-2-content">
                                  <div class="tp-testimonial-2-text">
                                     <p>
                                        “ The most advanced revenue than thi.
                                        I like Level more and more each da
                                        easier. It really saves me time and ef
                                        business has been lacking.
                                     </p>
                                  </div>
                                  <div class="tp-testimonial-2-author-info">
                                     <h4 class="tp-testimonial-2-author-name">Savannah Nguyen</h4>
                                     <span>Ceo At Goggle</span>
                                  </div>
                               </div>
                            </div>
                         </div> --}}
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- testimonial area end -->
 </main>

 @endsection