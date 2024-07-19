@extends('website.layouts.app')
@section('title') Videos @endsection
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
                    <span>Videos</span>
                    </div>
                    <div class="breadcrumb__section-title-box mb-20">
                    <h3 class="breadcrumb__title">Videos</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb area end -->
<section>
    <div class="container">
        <div class="row">
            @foreach($video as $vid)
            <div class="col-lg-4">
                <div class="video1">
                    <a class="popup-youtube" href="{{$vid->link}}">
                    <iframe  src="{{$vid->link}}" width="360" height="315" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    {{-- <a class="popup-youtube" href="https://youtu.be/2raxUZLIAzs?si=tQGXvSLZuh5K1SrM"><img src="assets/images/blog/blog-1-1.jpg" alt="">
                    <div class="video-icon">
                        <i class="fas fa-play-circle"></i>
                    </div>
                </a> --}}
            </a>
                </div>
            </div>
            @endforeach
            {{-- <div class="col-lg-4">
                <div class="video1">
                    <a class="popup-youtube" href="https://youtu.be/2raxUZLIAzs?si=tQGXvSLZuh5K1SrM"><img src="assets/images/blog/blog-1-3.jpg" alt=""><div class="video-icon">
                        <i class="fas fa-play-circle"></i>
                    </div></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="video1">
                    <a class="popup-youtube" href="https://youtu.be/2raxUZLIAzs?si=tQGXvSLZuh5K1SrM"https://youtu.be/2raxUZLIAzs?si=tQGXvSLZuh5K1SrM><img src="assets/images/blog/blog-1-2.jpg" alt=""><div class="video-icon">
                        <i class="fas fa-play-circle"></i>
                    </div></a>
                </div>
            </div> --}}
        </div>
    </div>
</section>
 
@endsection

<script>
$(function() {
    $('.popup-youtube, .popup-vimeo').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });
});
</script>