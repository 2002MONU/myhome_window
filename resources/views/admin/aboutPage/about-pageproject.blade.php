@extends('admin.layout.app')
@section('admintitle') About  @endsection
@section('maincontent')
<!-- Main Content Area -->
<div class="main-content">
   <div class="data-table-area">
       <div class="container-fluid">
        <div class="d-inline-block align-items-center">
            <nav>
                <ol class="breadcrumb">
                    <!--<li class="breadcrumb-item"><a href="javascript:history.back()" >Back</a></li>-->
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
                               <h4 class="card-title mb-2"> aboutproject Project Details </h4>
                                {{-- <a href="{{route('add-category')}}" class="btn btn-primary">Add Category</a> --}}
                           </div>
                           <div class="table-responsive order-stats">
                            <table class="table">                                <thead>
                                   <tr>
                                       <th>Id</th>
                                       <th>Heading</th>
                                       {{-- <th>Title</th> --}}
                                       <th>Description</th>
                                       <th>Satsified Clients</th>
                                       <th>Total Products</th>
                                       <th>Years Of Build</th>
                                       <th>Total Revinew</th>
                                       <th>Created </th>
                                       <th>Update</th>
                                       <th>Action</th>
                                   </tr>
                               </thead>
                                <tbody>
                                   
                                 <tr>
                                       <td>{{$aboutproject->id}}</td>
                                       <td>{{$aboutproject->heading}}</td>
                                       <td></td>
                                       <td>{{$aboutproject->satisfied_clients}}</td>
                                       <td>{{$aboutproject->total_products}}</td>
                                       <td>{{$aboutproject->years_of_build}}</td>
                                       <td>{{$aboutproject->total_revenue}}</td>
                                       <td>{{$aboutproject->created_at}}</td>
                                       <td>{{$aboutproject->updated_at}}</td>
                                       <td><a href="{{route('about-projectupdate',$aboutproject->id)}}" class="btn btn-sm btn-info">Edit</a>
                                           {{-- <a href="{{route('home.delete',$aboutproject->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a> --}}
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