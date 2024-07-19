@extends('admin.layout.app')
@section('admintitle')Blog Details @endsection
@section('maincontent')
<!-- Main Content Area -->
<div class="main-content">
   <div class="data-table-area">
       <div class="container-fluid">
        <div class="d-inline-block align-items-center">
            <nav>
                <ol class="breadcrumb">
                    <!--<li class="breadcrumb-item"><a href="javascript:history.back()" >Back</a></li>-->
                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
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
                               <h4 class="card-title mb-2">Blog  Details</h4>
                                <a href="{{route('admin.addblog')}}" class="btn btn-primary btn-sm">Add Blog</a>
                           </div>
                           <div class="table-responsive order-stats">
                            <table class="table">                              
                                 <thead>
                                   <tr>
                                       <th>Id</th>
                                       <th>Blog Image</th>
                                       <th>Blog Title</th>
                                       <th>Blog Description</th>
                                       <th>Blog Writer</th>
                                       <th>Status</th>
                                       <th>Created </th>
                                       <th>Update</th>
                                       <th>Action</th>
                                   </tr>
                               </thead>
                                <tbody>
                                   @foreach ($blogsection as $blog)
                                   <tr>
                                       <td>{{$blog->id}}</td>
                                       <td><img src="{{asset('website/blogpage/'.$blog->image)}}" style="width:80px;height:80px;"></td>
                                       <td>{{$blog->title}}</td>
                                       <td></td>
                                       <td>{{$blog->writer}}</td>
                                       <td>@if ($blog->status == 1)
                                           <p class="btn btn-sm btn-primary">active</p> 
                                            @else
                                             <p class="btn btn-sm btn-danger">Inactive</p>
                                            @endif</td>
                                       <td>{{$blog->created_at}}</td>
                                       <td>{{$blog->updated_at}}</td>
                                       <td><a href="{{route('admin.blogupdate', $blog->id)}}" class="btn btn-sm btn-info">Edit</a>
                                           <a href="{{route('admin.blog-delete', $blog->id)}}" class="btn btn-sm btn-danger mt-1" onclick="return confirm('Are you sure?')">Delete</a>
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