@extends('admin.layout.app')
@section('admintitle') Enquiry Details @endsection
@section('maincontent')
<!-- Main Content Area -->
<div class="main-content">
   <div class="data-table-area">
       <div class="container-fluid">
        <div class="d-inline-block align-items-center">
          <nav>
              <ol class="breadcrumb">
                  <!--{{-- <li class="breadcrumb-item"><a href="javascript:history.back()" >Back</a></li> --}}-->
                  <li class="breadcrumb-item active" aria-current="page">Enquiry </li>
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
                               <h4 class="card-title mb-2">Contact Message  Details</h4>
                            <form method="POST" action="">
                                   <input type="text" name="search" class="form-control" placeholder="Search here" employee" id="search">
                               </form>
                            </div>
                            <div class="table-responsive order-stats">
                                <table class="table">                              
                                     <thead>
                                   <tr>
                                       <th>Id</th>
                                       <th>Email</th>
                                       <th>Name</th>
                                       <th>Message </th>
                                       <th>Created </th>
                                       <th>Action</th>
                                   </tr>
                               </thead>
                              <tbody >
                                {{-- @foreach($message as $mess)
                                  <tr>
                                       <td>{{$mess->id}}</td>
                                        <td>{{$mess->name}}</td>
                                        <td>{{$mess->email}}</td>
                                       <td>{{$mess->message}}</td>
                                      <td>{{$mess->created_at}}</td>
                                       <td>
                                        {{-- <a href="{{route('footer-update',$footerdetail->id)}}" class="btn btn-sm btn-info">Update</a> --}}
                                           {{-- <a href="{{route('contact-delete',$mess->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                                     </td>
                                       
                                   </tr>
                                  
                                   @endforeach --}}
                               </tbody> 
                           </table>
                           {{-- {!! $message->appends(['sort' => 'department'])->links() !!} --}}
                         </div>
                       </div> <!-- end card body-->
                   </div> <!-- end card -->
               </div><!-- end col-->
           </div>
           <!-- end row-->
       </div>
   </div>
 <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script>
  $(document).ready(function(){
  
   fetch_customer_data();
  
   function fetch_customer_data(query = '')
   {
    $.ajax({
     url:"{{ route('employee.search') }}",
     method:'GET',
     data:{query:query},
     dataType:'json',
     success:function(data)
     {
      $('tbody').html(data.table_data);
      $('#total_records').text(data.total_data);
     }
    })
   }
  
   $(document).on('keyup', '#search', function(){
    var query = $(this).val();
    fetch_customer_data(query);
   });
  });
  </script>
@endsection