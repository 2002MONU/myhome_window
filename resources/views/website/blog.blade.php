@extends('website.layouts.app')
@section('title') Blog @endsection
@section('mainsection')
    

<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb__area breadcrumb__height grey-bg p-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__content text-center z-index">
                        <div class="breadcrumb__list mb-10">
                        <span><a href="index.php">Home</a></span>
                        <span class="dvdr">\</span>
                        <span>Blog</span>
                        </div>
                        <div class="breadcrumb__section-title-box mb-20">
                        <h3 class="breadcrumb__title">Blog</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->
    <div class="tp-blog-area pt-110 pb-120">
         <div class="container">
            <div class="row">
               @foreach ($blogdetails as $blog)
               <div class="col-xl-4 col-lg-4 col-md-6 mb-30  wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.3s; animation-name: tpfadeUp;">
                  <div class="tp-blog-item">
                     <div class="tp-blog-thumb fix p-relative mb-35">
                        <a href="blog-details.php">
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
                        <a href="blog-details.php">
                           <img src="assets/images/blog/blog-1-2.jpg" alt="">
                        </a>
                        <div class="tp-blog-tag">
                           <span>By: Transpa</span>
                        </div>
                     </div>
                     <div class="tp-blog-content">
                        <h4 class="tp-blog-title mb-25">
                           <a class="text-anim" href="blog-details.php">windows that project outward from the wall,
                              usually on the upper</a>
                        </h4>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-6 mb-30  wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".9s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.9s; animation-name: tpfadeUp;">
                  <div class="tp-blog-item">
                     <div class="tp-blog-thumb p-relative fix mb-35">
                        <a href="blog-details.php">
                           <img src="assets/images/blog/blog-1-3.jpg" alt="">
                        </a>
                        <div class="tp-blog-tag">
                           <span>By: Transpa</span>
                        </div>
                     </div>
                     <div class="tp-blog-content">
                        <h4 class="tp-blog-title mb-25">
                           <a class="text-anim" href="blog-details.php">Providing solutions for Industrial
                              ment, and restoration.</a>
                        </h4>
                     </div>
                  </div>
               </div> --}}
            </div>
         </div>
      </div>
</main>
@endsection