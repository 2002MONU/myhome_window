@extends('admin.layout.app')
@section('admintitle') Feature Details @endsection
@section('maincontent')
<!-- Main Content Area -->
<div class="main-content">
   <div class="data-table-area">
       <div class="container-fluid">
        <div class="d-inline-block align-items-center">
            <nav>
                <ol class="breadcrumb">
                    {{-- <li class="breadcrumb-item"><a href="javascript:history.back()" >Back</a></li> --}}
                    <li class="breadcrumb-item active" aria-current="page">Features</li>
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
                               <h4 class="card-title mb-2">Our Features  Details</h4>
                                <a href="{{route('home.addfeatures')}}" class="btn btn-primary">Add Our Features</a>
                           </div>
                           <div class="table-responsive order-stats">
                            <table class="table">                               
                                 <thead>
                                   <tr>
                                       <th>Id</th>
                                       <th>Features Name</th>
                                       <th>Icon</th>
                                       <th>Status</th>
                                       <th>Created </th>
                                       <th>Update</th>
                                       <th>Action</th>
                                   </tr>
                               </thead>
                                <tbody>
                                   @foreach ($ourfeature as $feature)
                                   <tr>
                                       <td>{{$feature->id}}</td>
                                       <td>{{$feature->feature}}</td>
                                       <td><a href="{{asset('website/homepage/'.$feature->icon)}}"><img src="{{asset('website/homepage/'.$feature->icon)}}" style="width:80px;height:80px;"></a></td>
                                        <td>@if ($feature->status == 1)
                                           <p class="btn btn-sm btn-success">active</p> 
                                            @else
                                             <p class="btn btn-sm btn-danger">Inactive</p>
                                            @endif</td>
                                       <td>{{$feature->created_at}}</td>
                                       <td>{{$feature->updated_at}}</td>
                                       <td><a href="{{url('admin/update-features',$feature->id)}}" class="btn btn-sm btn-info">Edit</a>
                                        <a href="{{route('home.featureDelete',$feature->id)}}" class="btn btn-sm btn-danger mtop" onclick="return confirm('Are you sure?')">Delete</a>
                                       </td>
                                       
                                   </tr>
                                   @endforeach
                                   
                               </tbody>
                           </table>
                        </div> 
                           {!! $ourfeature->appends(['sort' => 'department'])->links() !!}
                             
                       </div> <!-- end card body-->
                   </div> <!-- end card -->
               </div><!-- end col-->
           </div>
           <!-- end row-->
       </div>
   </div>
</div>
  
@endsection