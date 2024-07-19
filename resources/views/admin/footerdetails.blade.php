@extends('admin.layout.app')
@section('admintitle') Footer Details @endsection
@section('maincontent')
<!-- Main Content Area -->
<div class="main-content">
   <div class="data-table-area">
       <div class="container-fluid">
        <div class="d-inline-block align-items-center">
            <nav>
                <ol class="breadcrumb">
<!--                    {{-- <li class="breadcrumb-item"><a href="javascript:history.back()" >Back</a></li> --}}-->
                    <li class="breadcrumb-item active" aria-current="page">Footer</li>
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
                               <h4 class="card-title mb-2"> Footer Details</h4>
                                {{-- <a href="{{route('add-category')}}" class="btn btn-primary">Add Category</a> --}}
                           </div>
                           <div class="table-responsive order-stats">
                            <table class="table">
                               <thead>
                                   <tr>
                                       <th>Id</th>
                                       <th>Favicon</th>
                                       <th>Logo</th>
                                       <th>Footer About</th>
                                       <th>Address</th>
                                       <th>Email</th>
                                       <th>Contact </th>
                                       <th>Created </th>
                                       <th>Update</th>
                                       <th>Action</th>
                                   </tr>
                               </thead>
                               <tbody>
                                  <tr>
                                       <td>{{$footerdetail->id}}</td>
                                       <td><a href="{{asset('website/logo/'.$footerdetail->favicon)}}"><img src="{{asset('website/logo/'.$footerdetail->favicon)}}" style="width:70px;height:70px;"></a></td>
                                       <td><a href="{{asset('website/logo/'.$footerdetail->logo)}}"><img src="{{asset('website/logo/'.$footerdetail->logo)}}" style="width:70px;height:70px;"></a></td>
                                       <td></td>
                                       <td>{{ $footerdetail->address }}</td>
                                       <td>{{$footerdetail->email}}</td>
                                       <td>{{$footerdetail->contact}}</td>
                                       <td>{{$footerdetail->created_at}}</td>
                                       <td>{{$footerdetail->updated_at}}</td>
                                       <td><a href="{{route('footer-update',$footerdetail->id)}}" class="btn btn-sm btn-info">Edit</a>
                                           {{-- <a href="{{route('home.delete',$item->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a> --}}
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