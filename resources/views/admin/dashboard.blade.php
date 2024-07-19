    @extends('admin.layout.app')
    @section('admintitle') Admin @endsection
    @section('maincontent')
    <!-- Main Content Area -->
    <script>
        var msg = '{{Session::get('success')}}';
        var exist = '{{Session::has('success')}}';
        if(exist){
          alert(msg);
        }
        var msg1 = '{{Session::get('error')}}';
        var exist1 = '{{Session::has('error')}}';
        if(exist1){
          alert(msg1);
        }
      </script>
    <div class="main-content">
        
        <div class="container-fluid">
            <div class="d-inline-block align-items-center">
                <nav>
                    <ol class="breadcrumb">
                        {{-- <li class="breadcrumb-item"><a href="javascript:history.back()" >Back</a></li> --}}
                        {{-- <li class="breadcrumb-item" aria-current="page">Banner</li> --}}
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <a href="{{route('home.hbannerdetails')}}">
                    <div class="card box-margin-admin">
                        <div class="card-body">
                            
                            <h4 class="my-3">{{$banner}}</h4>
                            <h5 class="mb-0"><span class="text-success"></span>Banner</h5>
                        </div>
                        <!--end card-body-->
                    </div>
                    </a>
                    <!--end card-->
                </div>
                <!--end col-->
                <div class="col-md-6 col-xl-4">
                    <a href="{{route('admin.blogdeatils')}}">
                    <div class="card box-margin-admin">
                        <div class="card-body">
                            <h4 class="my-3">{{$blog}}</h4>
                            <h5 class="mb-0">
                                
                                Blog </h5>
                        </div>
                        <!--end card-body-->
                    </div>
                    </a>
                    <!--end card-->
                </div>
                <!--end col-->
                <div class="col-xl-4">
                    <a href="{{route('testimonials-details')}}">
                    <div class="card box-margin-admin">
                        <div class="card-body">
                            {{-- <div class="float-right"><i class="fa fa-codiepie text-warning font-30"></i></div><span class="badge badge-warning">Bounce Rate</span> --}}
                            <h4 class="my-3">{{ $testi}}</h4>
                            <h5 class="mb-0">
                                {{-- <span class="text-danger"><i class="fa fa-level-down mr-1" aria-hidden="true"></i>45%</span> --}}
                                 Testimoninals</h5>
                        </div>
                        <!--end card-body-->
                    </div>
                    </a>
                    <!--end card-->
                </div>
                <div class="col-xl-4">
                    <a href="{{route('door-category')}}">
                    <div class="card box-margin-admin">
                        <div class="card-body">
                            {{-- <div class="float-right"><i class="fa fa-codiepie text-warning font-30"></i></div><span class="badge badge-warning">Bounce Rate</span> --}}
                            <h4 class="my-3">{{$doorcate}}</h4>
                            <h5 class="mb-0">
                                {{-- <span class="text-danger"><i class="fa fa-level-down mr-1" aria-hidden="true"></i>45%</span> --}}
                                 Door Categories</h5>
                        </div>
                        <!--end card-body-->
                    </div>
                    </a>
                    <!--end card-->
                </div>
                <div class="col-xl-4">
                    <a href="{{route('category-details')}}">
                    <div class="card box-margin-admin">
                        <div class="card-body">
                            {{-- <div class="float-right"><i class="fa fa-codiepie text-warning font-30"></i></div><span class="badge badge-warning">Bounce Rate</span> --}}
                            <h4 class="my-3">{{$doordetails}}</h4>
                            <h5 class="mb-0">
                                {{-- <span class="text-danger"><i class="fa fa-level-down mr-1" aria-hidden="true"></i>45%</span> --}}
                                 Door Categories Details</h5>
                        </div>
                        <!--end card-body-->
                    </div>
                    </a>
                    <!--end card-->
                </div>
                <div class="col-xl-4">
                    <a href="{{route('contact-detail')}}">
                    <div class="card box-margin-admin">
                        <div class="card-body">
                            {{-- <div class="float-right"><i class="fa fa-codiepie text-warning font-30"></i></div><span class="badge badge-warning">Bounce Rate</span> --}}
                            <h4 class="my-3">{{$enquiry}}</h4>
                            <h5 class="mb-0">
                                {{-- <span class="text-danger"><i class="fa fa-level-down mr-1" aria-hidden="true"></i>45%</span> --}}
                                Enquiry</h5>
                        </div>
                        <!--end card-body-->
                    </div>
                    </a>
                    <!--end card-->
                </div>
            </div>


        </div>
    </div>
 @endsection