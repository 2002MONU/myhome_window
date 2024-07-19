@php
//$user = \App\Models\User::find(1);
$category = \App\Models\DoorCategory::where('status',1)->get();
$footer = \App\Models\FooterDetail::find(1);
@endphp
<footer>
    <!-- footer area start -->
    <div class="tp-footer-area black-bg-2 pt-85 pb-100">
       <div class="container">
          <div class="row">
             <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-50  wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.3s; animation-name: tpfadeUp;">
                <div class="tp-footer-widget footer-col-1">
                   <div class="tp-footer-logo pb-30">
                      <a href="{{url('/')}}"><img src="{{asset('website/logo/'.$footer->logo)}}" alt="footer logo"></a>
                   </div>
                   <div class="tp-footer-text">
                      <p>{!! $footer->footerabout !!}</p>
                   </div>
                </div>
             </div>
             <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-50  wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.5s; animation-name: tpfadeUp;">
                <div class="tp-footer-widget footer-col-2">
                   <h4 class="tp-footer-title">Our Links</h4>
                   <div class="tp-footer-list">
                      <ul>
                         <li><a href="{{url('/')}}">Home</a></li>
                         <li><a href="{{route('about-us')}}">About us</a></li>
                         <li><a href="{{route('blog')}}">Blog</a></li>
                         <li><a href="{{route('videos')}}">Video</a></li>
                         <li><a href="{{route('contact')}}">Contact</a></li>
                      </ul>
                   </div>
                </div>
             </div>
             <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-50  wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.7s; animation-name: tpfadeUp;">
                <div class="tp-footer-widget footer-col-3">
                   <h4 class="tp-footer-title">Doors</h4>
                   <div class="tp-footer-list">
                      <ul>
                        @foreach($category as $item)
                        <li> <a href="{{url('doors-view',$item->slug)}}">{{$item->title}}</a></li>
                        {{-- <li> <a href="{{route('double-doors')}}">Double Doors</a></li>
                        <li> <a href="{{route('double-reabte-doors-with-mesh')}}">Double Rebate Doors With Mesh</a></li>
                        <li> <a href="{{route('special-doors')}}">Special Doors</a></li>
                        {{-- <li> <a href="{{route('window')}}">Windows</a></li> --}}
                        @endforeach
                      </ul>
                   </div>
                </div>
             </div>
             <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-50  wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".9s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.9s; animation-name: tpfadeUp;">
                <div class="tp-footer-widget footer-col-4">
                   <h4 class="tp-footer-title">Get In Touch</h4>
                   <div class="tp-footer-contact">
                      <span>
                         <a class="text-anim-2 text-white" target="_blank" href="#">{!! $footer->address !!}</a>
                      </span>
                      <span class="mb-20 mt-30">
                         <a class="text-anim-2 text-anim-2" href="mailto:{{$footer->email}}">
                            {{$footer->email}}
                         </a>
                      </span>
                      <span>
                         <a class="text-anim-2" href="tel:{{$footer->contact}}">+91{{$footer->contact}}</a>
                      </span>
                   </div>
                </div>
                <div class="tp-footer-social">
                   <a href="{{$footer->facebook}}"><i class="fa-brands fa-facebook-f"></i></a>
                   <a href="{{$footer->vimeo}}"><i class="fa-brands fa-vimeo-v"></i></a>
                   <a href="{{$footer->twitter}}"><i class="fa-brands fa-twitter"></i></a>
                   <a href="{{$footer->instagram}}"><i class="fa-brands fa-instagram"></i></a>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- footer area end -->

    <!-- copy-right area start -->
    <div class="tp-copyright-area black-bg-2">
       <div class="container">
          <div class="tp-copyright-border tp-copyright-ptb">
             <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-12 wow tpfadeUp" data-wow-duration=".9s"
                   data-wow-delay=".3s">
                   <div class="tp-copyright-left text-center text-md-start">
                      <p>Copyright ©<span value="{{ date('Y') }}"> {{ date('Y') }} </span> myhomeinterior.com , All Rights Rerverd</p>
                   </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-12 wow tpfadeUp" data-wow-duration=".9s"
                   data-wow-delay=".5s">
                   <div class="tp-copyright-right text-center text-md-end">
                      <p>Design and Developed by <a href="#">Colourmoon</a></p>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- copy-right area end -->

 </footer>
 <div class="fixwhcall">
    <a href="https://api.whatsapp.com/send?phone=+917386131399 " class="btn-mob-whtsapp" target="_blank">
    <i class="fa-brands fa-whatsapp"></i>whatsapp
    </a>
    <a href="tel:+917386131399 " class="btn-mob-call">
    <i class="fa-solid fa-phone"></i>Phone
    </a>
 </div>
 <!-- JS here -->

 <script src="{{asset('web_assets/js/vendor/jquery.js')}}"></script>
 <script src="{{asset('web_assets/js/vendor/waypoints.js')}}"></script>
 <script src="{{asset('web_assets/js/bootstrap-bundle.js')}}"></script>
 <script src="{{asset('web_assets/js/ajax-form.js')}}"></script>
 <script src="{{asset('web_assets/js/imagesloaded-pkgd.js')}}"></script>
 <script src="{{asset('web_assets/js/isotope-pkgd.js')}}"></script>
 <script src="{{asset('web_assets/js/jarallax.js')}}"></script>
 <script src="{{asset('web_assets/js/countdown.js')}}"></script>
 <script src="{{asset('web_assets/js/magnific-popup.js')}}"></script>
 <script src="{{asset('web_assets/js/nice-select.js')}}"></script>
 <script src="{{asset('web_assets/js/purecounter.js')}}"></script>
 <script src="{{asset('web_assets/js/range-slider.js')}}"></script>
 <script src="{{asset('web_assets/js/wow.js')}}"></script>
 <script src="{{asset('web_assets/js/slick.js')}}"></script>
 <script src="{{asset('web_assets/js/swiper-bundle.js')}}"></script>
 <script src="{{asset('web_assets/js/main.js')}}"></script>


 <!--Script menu mobile start-->
 <script>
    function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    }
    function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    }
 </script>

 <script>
     $('.single-door').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    nav:false,
    fade: true,
    });
    $('.single-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.single-door',
    dots: false,
    centerMode: true,
    nav:false,
    focusOnSelect: true
    });
 </script>
 <!--Script menu mobile end-->
</body>
</html>