 @extends('admin.layout.app')
 @section('admintitle') Banner Details @endsection
 @section('maincontent')
 <!-- Main Content Area -->
 <div class="main-content">
    
     <div class="data-table-area">
        <div class="container-fluid">
            <div class="d-inline-block align-items-center">
                <nav>
                    <ol class="breadcrumb">
                       
                        {{-- <li class="breadcrumb-item"><a href="javascript:history.back()" >Back</a></li> --}}
                        <li class="breadcrumb-item active" aria-current="page">Banner</li>
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
                                <h4 class="card-title mb-2">Home Banner Details</h4>
                                 <a href="{{route('home.addhbanner')}}" class="btn btn-primary  btn-sm">Add Banner</a>
                            </div>
                            <div class="table-responsive order-stats">
                                <table class="table"> 
                                 <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Banner Image</th>
                                        <th>Status</th>
                                        <th>Created </th>
                                        <th>Update</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                 <tbody>
                                    @foreach ($home as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td><img src="{{asset('website/homepage/'.$item->image)}}" style="width:80px;height:80px;"></td>
                                         <td>@if ($item->status == 1)
                                            <p class="btn btn-sm btn-primary">active</p> 
                                             @else
                                              <p class="btn btn-sm btn-danger">Inactive</p>
                                             @endif</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>{{$item->updated_at}}</td>
                                        <td><a href="{{route('home.bannerupdate',$item->id)}}" class="btn btn-sm btn-info">Edit</a>
                                            <a href="{{route('home.delete',$item->id)}}" class="btn btn-sm btn-danger mtop" onclick="return confirm('Are you sure?')">Delete</a>
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
    </div>
 
@endsection