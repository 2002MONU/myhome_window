@extends('website.layouts.app')
@section('title') Blog-Details @endsection
@section('mainsection')
<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb__area breadcrumb__height grey-bg p-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__content text-center z-index">
                        <div class="breadcrumb__list mb-10">
                        <span><a href="{{('/')}}">Home</a></span>
                        <span class="dvdr">\</span>
                        <span>Blog</span>
                        </div>
                        <div class="breadcrumb__section-title-box mb-20">
                        <h3 class="breadcrumb__title">Blog Detail</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->
    <!-- postbox area start -->
    <div class="postbox__area pt-120 pb-70">
         <div class="container">
            <div class="row">
              
               <div class="col-xxl-8 col-xl-8 col-lg-8 mb-50">
                  <div class="postbox__wrapper">
                        <article class="postbox__item format-image transition-3">
                            <div class="postbox__thumb p-relative mb-25">
                            <img src="{{asset('website/blogpage/'.$blogdetails->image)}}" alt="{{$blogdetails->title}}">
                            </div>
                            <div class="postbox__content mb-55">
                            <h3 class="postbox__title pb-5">{{$blogdetails->title}}</h3>
                            <p>{{$blogdetails->description}}</p>
                           
                                
                            </div>
                        </article>
                  </div>
               </div>
              
               <div class="col-xxl-4 col-xl-4 col-lg-4">
                  <div class="sidebar__wrapper">
                    <div class="sidebar__widget mb-55">
                        <h3 class="sidebar__widget-title mb-35">Related Blog Post</h3>
                        <div class="sidebar__widget-content">
                           <div class="sidebar__post">
                              @foreach($blogsection as $section)
                              <div class="rc__post mb-25 d-flex align-items-center">
                                 <div class="rc__post-thumb mr-25">
                                    <a href="{{route('blog-details',$section->slug)}}"><img src="{{asset('website/blogpage/'.$section->image)}}"
                                          alt=""></a>
                                 </div>
                                 <div class="rc__post-content">
                                    <h3 class="rc__post-title">
                                       <a href="{{route('blog-details',$section->slug)}}">{{$section->title}}</a>
                                    </h3>
                                    {{-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p> --}}
                                 </div>
                              </div>
                              @endforeach
                              {{-- <div class="rc__post mb-25 d-flex align-items-center">
                                 <div class="rc__post-thumb mr-25">
                                    <a href="#"><img src="assets/images/blog/blog-1-1.jpg"
                                          alt=""></a>
                                 </div>
                                 <div class="rc__post-content">
                                    <h3 class="rc__post-title">
                                       <a href="#">More about Doubke Doors</a>
                                    </h3>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                                 </div>
                              </div>
                              <div class="rc__post d-flex align-items-center">
                                 <div class="rc__post-thumb mr-25">
                                    <a href="#"><img src="assets/images/blog/blog-1-1.jpg"
                                          alt=""></a>
                                 </div>
                                 <div class="rc__post-content">
                                    <h3 class="rc__post-title">
                                       <a href="#">More About Windows</a>
                                    </h3>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                                 </div>
                              </div> --}}
                           </div>
                        </div>
                    </div>
                    <!-- <div class="sidebar__widget mb-45">
                        <h3 class="sidebar__widget-title mb-30">Catagories</h3>
                        <div class="sidebar__widget-content">
                           <ul>
                              <li><a href="blog.html">About us</a></li>
                              <li><a href="blog.html">Our Services</a></li>
                              <li><a href="blog.html">Service Details</a></li>
                              <li><a href="blog.html">Team Details</a></li>
                              <li><a href="blog.html">Our Team Member</a></li>
                              <li><a href="blog.html">Contact Us</a></li>
                           </ul>
                        </div>
                    </div> -->
                    <!-- <div class="sidebar__widget mb-40">
                        <h3 class="sidebar__widget-title mb-35">Populer Tags</h3>
                        <div class="sidebar__widget-content">
                           <div class="tagcloud">
                              <a href="#">symphony</a>
                              <a href="#">nokia</a>
                              <a href="#">nokia</a>
                              <a href="#">Samsung</a>
                              <a href="#">Alcatel</a>
                              <a href="#">Oppos</a>
                              <a href="#">landing</a>
                              <a href="#">Oppos</a>
                           </div>
                        </div>
                    </div> -->
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- postbox area end -->
</main>
@endsection