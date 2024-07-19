@extends('admin.layout.app')
@section('admintitle') Testimonials @endsection
@section('maincontent')
<!-- Main Content Area -->
<div class="main-content">
   <div class="data-table-area">
       <div class="container-fluid">
        <div class="d-inline-block align-items-center">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Testimonial</li>
                    <li class="breadcrumb-item " aria-current="page"><a href="{{url('admin/dashboard')}}" >Dashboard</a></li>
                </ol>
            </nav>
        </div>
           <div class="row">
               <script>
                   var msg = '{{Session::get('success')}}';
                   var exist = '{{Session::has('success')}}';
                   if(exist){
                     alert(msg);
                   }
                  
                 </script>
               <div class="col-12 box-margin">
                   <div class="card">
                       <div class="card-body">
                           <div class="d-flex justify-content-between">
                               <h4 class="card-title mb-2"> Clients Testimonials Details</h4>
                                <a href="{{route('testimonials-Add')}}" class="btn btn-sm btn-primary">Create Testimonials</a>
                           </div>
                           <div class="table-responsive order-stats">
                            <table class="table">
                               <thead>
                                   <tr>
                                       <th>Id</th>
                                       <th>Client Image</th>
                                       <th>Client Description</th>
                                       <th>Client Name</th>
                                       <th>Designation</th>
                                       <th>Status</th>
                                       <th>Created </th>
                                       <th>Update</th>
                                       <th>Action</th>
                                   </tr>
                               </thead>
                                <tbody>
                                   @foreach ($testimonial as $testi)
                                   <tr>
                                       <td>{{$testi->id}}</td>
                                       <td><img src="{{asset('website/homepage/'.$testi->image)}}" style="width:80px;height:80px;"></td>

                                       <th></th>
                                       <th>{{$testi->clientname}}</th>
                                       <th>{{$testi->designation}}</th>
                                        <td>@if ($testi->status == 1)
                                           <p class="btn btn-sm btn-primary">active</p> 
                                            @else
                                             <p class="btn btn-sm btn-danger">Inactive</p>
                                            @endif</td>
                                       <td>{{$testi->created_at}}</td>
                                       <td>{{$testi->updated_at}}</td>
                                       <td><a href="{{route('testimonials-update',$testi->id)}}" class="btn btn-sm btn-info">Edit</a>
                                           <a href="{{route('testimonials-testimonialDelete',$testi->id)}}" class="btn btn-sm btn-danger mtop1" onclick="return confirm('Are you sure?')">Delete</a>
                                       </td>
                                       
                                   </tr>
                                   @endforeach
                                   
                               </tbody>
                           </table>
                           </div>
                       </div> <!-- end card body-->
                   </div> <!-- end card -->
               </div><!-- end col-->
           </div>
           <!-- end row-->
       </div>
   </div>
@endsection