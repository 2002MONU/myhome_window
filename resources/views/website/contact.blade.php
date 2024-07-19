@extends('website.layouts.app')
@section('title') Contact @endsection
@section('mainsection')
<main>
    <script>
                   var msg = '{{Session::get('success')}}';
                   var exist = '{{Session::has('success')}}';
                   if(exist){
                     alert(msg);
                   }
                  
                 </script>
    <!-- breadcrumb area start -->
    <div class="breadcrumb__area breadcrumb__height grey-bg p-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__content text-center z-index">
                        <div class="breadcrumb__list mb-10">
                        <span><a href="{{url('/')}}">Home</a></span>
                        <span class="dvdr">\</span>
                        <span>Contact</span>
                        </div>
                        <div class="breadcrumb__section-title-box mb-20">
                        <h3 class="breadcrumb__title">Contact Us</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->
     <!-- contact area start -->
     <div class="tp-contact-area pt-65 pb-120">
         <div class="container">
            <div class="row">
               <div class="col-xl-5 col-lg-6 pt-40">
                  <div class="tp-contact-wrapper mb-60">
                     <div class="tp-contact-inner">
                        <h4 class="tp-contact-inner-title">Get in touch</h4>
                        <p>{{$footer->title}}</p>
                     </div>
                     <div class="tp-contact-box">
                        <div class="row">
                           <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-4">
                              <div class="tp-contact-item mb-50">
                                 <span>Contact</span>
                                 <a href="tel:7386 1313 99">+91 {{$footer->contact}}</a>
                              </div>
                              <div class="tp-contact-item">
                                 <span>Address</span>
                                 <a href="https://www.google.com/maps/" target="_blank">{!! $footer->address !!}</a>
                              </div>
                           </div>
                           <div class="col-xxl-8 col-xl-7 col-lg-6 col-md-8">
                              <div class="tp-contact-left">
                                 <div class="tp-contact-item">
                                    <span>Email</span>
                                    <a href="mailto:{{$footer->email}}">{{$footer->email}}</a>
                                 </div>
                                 <div class="tp-contact-item tp-contact-social mt-50">
                                    <span>Follow</span>
                                    <div class="tp-contact-social-box">
                                       <a href="{{$footer->facebook}}"><i class="fa-brands fa-facebook-f"></i></a>
                                       <a href="{{$footer->twitter}}"><i class="fa-brands fa-twitter"></i></a>
                                       <a href="{{$footer->vimeo}}"><i class="fa-brands fa-vimeo-v"></i></a>
                                       <a href="{{$footer->instagram}}"><i class="fa-brands fa-instagram"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6 offset-xl-1 col-lg-6">
                  <div class="tp-contact-form">
                     <div class="tp-contact-form-content">
                        <h4 class="tp-contact-form-title">Fill Up The Form</h4>
                        <p>Your email address will not be published. Required fields are marked *</p>
                     </div>
                     <div class="tp-contact-form-wrap">
                        <form  id="" method="POST" action="{{route('contactPost')}}">
                           @csrf
                           <div class="tp-contact-form-input mb-45">
                              <span>
                                 <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.3654 9.15239C10.6228 9.15239 11.7114 8.70142 12.6012 7.81167C13.4906 6.92206 13.9417 5.83356 13.9417 4.57605C13.9417 3.31897 13.4908 2.23033 12.601 1.34043C11.7113 0.450966 10.6226 0 9.3654 0C8.10789 0 7.01939 0.450966 6.12978 1.34058C5.24017 2.23019 4.78906 3.31882 4.78906 4.57605C4.78906 5.83356 5.24017 6.9222 6.12978 7.81181C7.01968 8.70128 8.10832 9.15239 9.3654 9.15239ZM6.9172 2.12785C7.59981 1.44524 8.40056 1.11343 9.3654 1.11343C10.3301 1.11343 11.131 1.44524 11.8138 2.12785C12.4964 2.8106 12.8283 3.6115 12.8283 4.57605C12.8283 5.54089 12.4964 6.34164 11.8138 7.0244C11.131 7.70715 10.3301 8.03896 9.3654 8.03896C8.40085 8.03896 7.6001 7.70701 6.9172 7.0244C6.23444 6.34179 5.90249 5.54089 5.90249 4.57605C5.90249 3.6115 6.23444 2.8106 6.9172 2.12785Z" fill="black"/>
                                    <path d="M17.372 14.6101C17.3463 14.2398 17.2944 13.836 17.218 13.4095C17.1409 12.9799 17.0416 12.5737 16.9227 12.2024C16.7998 11.8187 16.633 11.4398 16.4264 11.0767C16.2123 10.6998 15.9607 10.3716 15.6783 10.1016C15.383 9.81903 15.0215 9.59188 14.6034 9.42619C14.1868 9.26138 13.7251 9.17788 13.2312 9.17788C13.0373 9.17788 12.8497 9.25746 12.4874 9.49331C12.2645 9.6387 12.0037 9.80685 11.7126 9.99284C11.4638 10.1514 11.1266 10.3 10.7101 10.4345C10.3038 10.566 9.89124 10.6327 9.48391 10.6327C9.07687 10.6327 8.66431 10.566 8.25771 10.4345C7.84167 10.3001 7.50436 10.1516 7.2559 9.99298C6.96758 9.80874 6.70665 9.64059 6.48037 9.49316C6.11841 9.25732 5.93083 9.17773 5.73688 9.17773C5.24286 9.17773 4.78131 9.26138 4.36485 9.42634C3.94707 9.59174 3.5854 9.81889 3.28983 10.1017C3.00745 10.3719 2.75581 10.6999 2.54185 11.0767C2.33557 11.4398 2.16858 11.8186 2.04565 12.2026C1.92693 12.5738 1.82764 12.9799 1.75052 13.4095C1.67398 13.8354 1.62223 14.2394 1.59657 14.6105C1.57135 14.9733 1.55859 15.3509 1.55859 15.7325C1.55859 16.7243 1.87388 17.5272 2.49561 18.1194C3.10965 18.7037 3.922 19 4.91018 19H14.0588C15.0467 19 15.859 18.7037 16.4732 18.1194C17.0951 17.5276 17.4104 16.7244 17.4104 15.7323C17.4102 15.3495 17.3973 14.9719 17.372 14.6101ZM15.7055 17.3127C15.2998 17.6988 14.7611 17.8866 14.0587 17.8866H4.91018C4.20757 17.8866 3.6689 17.6988 3.26331 17.3128C2.86539 16.934 2.67202 16.417 2.67202 15.7325C2.67202 15.3764 2.68376 15.0249 2.70724 14.6875C2.73015 14.3564 2.77697 13.9927 2.84641 13.6062C2.91497 13.2245 3.00224 12.8663 3.10603 12.5421C3.20561 12.2311 3.34144 11.9232 3.50988 11.6267C3.67064 11.344 3.85561 11.1015 4.05971 10.9061C4.25062 10.7233 4.49125 10.5737 4.77479 10.4615C5.03702 10.3577 5.33172 10.3009 5.65164 10.2923C5.69064 10.313 5.76007 10.3526 5.87256 10.426C6.10145 10.5751 6.36527 10.7453 6.65693 10.9316C6.98569 11.1412 7.40926 11.3305 7.91531 11.4939C8.43267 11.6612 8.96032 11.7461 9.48405 11.7461C10.0078 11.7461 10.5356 11.6612 11.0527 11.494C11.5591 11.3304 11.9826 11.1412 12.3118 10.9313C12.6102 10.7405 12.8667 10.5753 13.0956 10.426C13.208 10.3528 13.2775 10.313 13.3165 10.2923C13.6365 10.3009 13.9312 10.3577 14.1936 10.4615C14.477 10.5737 14.7176 10.7234 14.9085 10.9061C15.1126 11.1013 15.2976 11.3438 15.4584 11.6268C15.627 11.9232 15.7629 12.2313 15.8624 12.5419C15.9663 12.8666 16.0537 13.2247 16.1221 13.6061C16.1914 13.9933 16.2384 14.3571 16.2613 14.6876V14.6879C16.2849 15.0241 16.2968 15.3754 16.297 15.7325C16.2968 16.4171 16.1034 16.934 15.7055 17.3127Z" fill="black"/>
                                  </svg>
                              </span>
                              <input type="text" name="name" placeholder="Your Name*">
                              @if($errors->has('name'))
                              <div class="error text-danger">{{ $errors->first('name') }}</div>
                              @endif
                           </div>
                           <div class="tp-contact-form-input mb-45">
                              <span>
                                 <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.3333 3.5H1.66668C0.747461 3.5 0 4.24746 0 5.16668V16.8334C0 17.7525 0.747461 18.5 1.66668 18.5H18.3334C19.2525 18.5 20 17.7525 20 16.8333V5.16668C20 4.24746 19.2525 3.5 18.3333 3.5ZM1.66668 4.33332H18.3334C18.3948 4.33332 18.4489 4.3557 18.5065 4.36836C17.0636 5.68895 12.279 10.066 10.6047 11.5745C10.4737 11.6925 10.2625 11.8333 10 11.8333C9.73758 11.8333 9.52641 11.6925 9.39496 11.5741C7.72078 10.0658 2.93598 5.68855 1.49328 4.36844C1.55102 4.35578 1.60523 4.33332 1.66668 4.33332ZM0.83332 16.8333V5.16668C0.83332 5.08504 0.85793 5.01098 0.879961 4.93637C1.98434 5.94715 5.32277 9.00121 7.48746 10.9697C5.3298 12.8231 1.99051 15.989 0.877344 17.0505C0.857695 16.9796 0.83332 16.9104 0.83332 16.8333ZM18.3333 17.6667H1.66668C1.60012 17.6667 1.54094 17.6435 1.47879 17.6286C2.62906 16.5321 5.98961 13.3479 8.10934 11.5345C8.38566 11.7852 8.63809 12.0138 8.83707 12.193C9.18051 12.5031 9.5825 12.6667 10 12.6667C10.4175 12.6667 10.8195 12.5031 11.1625 12.1934C11.3616 12.0141 11.6142 11.7853 11.8907 11.5345C14.0105 13.3477 17.3706 16.5316 18.5212 17.6286C18.4591 17.6435 18.4 17.6667 18.3333 17.6667ZM19.1667 16.8333C19.1667 16.9103 19.1423 16.9796 19.1227 17.0505C18.0091 15.9885 14.6702 12.8229 12.5126 10.9697C14.6773 9.00125 18.0153 5.94746 19.12 4.93629C19.1421 5.0109 19.1667 5.085 19.1667 5.16664V16.8333Z" fill="black"/>
                                 </svg>
                              </span>
                              <input type="email" name="email" placeholder="Email Address*">
                              @if($errors->has('email'))
                              <div class="error text-danger">{{ $errors->first('email') }}</div>
                              @endif
                           </div>
                           <div class="tp-contact-form-input tp-contact-form-textarea mb-45">
                              <span><i class="fa-light fa-pen-to-square"></i></span>
                              <textarea name="message" placeholder="Enter Your Messege here"></textarea>
                              @if($errors->has('message'))
                                 <div class="error text-danger">{{ $errors->first('message') }}</div>
                              @endif
                             
                           </div>
                           <div class="tp-contact-form-button">
                              <button class="tp-btn-theme" type="submit"><i class="fa-light fa-paper-plane"></i> Get In
                                 Touch</button>
                           </div>
                           {{-- <p class="ajax-response error"></p> --}}
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact area end  -->
</main>
@endsection