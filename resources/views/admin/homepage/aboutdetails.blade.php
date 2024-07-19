@extends('admin.layout.app')
@section('admintitle') About Details @endsection
@section('maincontent')
<!-- Main Content Area -->
<div class="main-content">
   <div class="data-table-area">
       <div class="container-fluid">
        <div class="d-inline-block align-items-center">
            <nav>
                <ol class="breadcrumb">
                    {{-- <li class="breadcrumb-item"><a href="javascript:history.back()" >Back</a></li> --}}
                    <li class="breadcrumb-item active" aria-current="page">About</li>
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
                               <h4 class="card-title mb-2">Home About  Details</h4>
                                {{-- <a href="{{route('home.addhbanner')}}" class="btn btn-primary">Add Banner</a> --}}
                           </div>
                           <div class="table-responsive order-stats">
                            <table class="table">
                               <thead>
                                   <tr>
                                       <th>Id</th>
                                       <th>Title</th>
                                       <th>Description</th>
                                       <th>Experiance </th>
                                       <th>Happy Clients</th>
                                       <th>Projects Delivered</th>
                                       <th>Quality</th>
                                       <th>Created</th>
                                       <th>Updated</th>
                                       <th>Action</th>
                                   </tr>
                               </thead>
                                <tbody>
                                   <tr>
                                       <td>{{$homeabout->id}}</td>
                                       <td>{{$homeabout->title}}</td>
                                       <td></td>
                                       <td>{{$homeabout->experiance}}</td>
                                       <td>{{$homeabout->happyclient}}</td>
                                       <td>{{$homeabout->projectdeli}}</td>
                                       <td>{{$homeabout->quality}}</td>
                                       <td>{{$homeabout->created_at}}</td>
                                       <td>{{$homeabout->updated_at}}</td>
                                       <td><a href="{{route('home.about-details-post',$homeabout->id)}}" class="btn btn-sm btn-info">Edit</a>
                                           
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