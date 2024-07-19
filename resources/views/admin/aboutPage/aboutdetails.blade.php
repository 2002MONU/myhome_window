@extends('admin.layout.app')
@section('admintitle') About @endsection
@section('maincontent')
<!-- Main Content Area -->
<div class="main-content">
   <div class="data-table-area">
       <div class="container-fluid">
        <div class="d-inline-block align-items-center">
            <nav>
                <ol class="breadcrumb">
                    {{-- <li class="breadcrumb-item"><a href="javascript:history.back()" >Back</a></li> --}}
                    <li class="breadcrumb-item active" aria-current="page">About Page</li>
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
                               <h4 class="card-title mb-2"> About Details </h4>
                                {{-- <a href="{{route('add-category')}}" class="btn btn-primary">Add Category</a> --}}
                           </div>
                           <div class="table-responsive order-stats">
                            <table class="table">                             
                                   <thead>
                                   <tr>
                                       <th>Id</th>
                                       <th>Heading</th>
                                       <th>Title</th>
                                       <th>Description</th>
                                       <th>image1</th>
                                       <th>image2</th>
                                       {{-- <th>Status</th> --}}
                                       <th>Created </th>
                                       <th>Update</th>
                                       <th>Action</th>
                                   </tr>
                               </thead>
                                <tbody>
                                   
                                   <tr>
                                       <td>{{$about->id}}</td>
                                       <td>{{$about->heading}}</td>
                                       <td>{{$about->title}}</td>
                                       <td></td>
                                       <td><a href=""><img src="{{asset('website/aboutpage/'.$about->image1)}}" style="width:100px;height:100px;"></a></td>
                                       <td><a href=""><img src="{{asset('website/aboutpage/'.$about->image2)}}" style="width:100px;height:100px;"></a></td>
                                       <td>{{$about->created_at}}</td>
                                       <td>{{$about->updated_at}}</td>
                                       <td><a href="{{route('about-pageupdate',$about->id)}}" class="btn btn-sm btn-info">Edit</a>
                                           {{-- <a href="{{route('home.delete',$about->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a> --}}
                                       </td>
                                       
                                   </tr>
                                  
                                   
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