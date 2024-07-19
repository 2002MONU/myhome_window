@extends('admin.layout.app')
@section('maincontent')
<div class="main-content">
    <div class="container-fluid">
        <div class="d-inline-block align-items-center">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:history.back()" >Back</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Service</li>
                    <li class="breadcrumb-item " aria-current="page"><a href="{{url('admin/dashboard')}}" >Dashboard</a></li>
                </ol>
            </nav>
        </div>
        <div class="row">
<div class="col-xl-6 box-margin">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"> Home Services Update</h4>
            <form class="cmxform"  method="post" enctype="multipart/form-data" action="{{route('home.serviceupdatePost',$services->id)}}">
                @csrf
                <fieldset>
                    <div class="form-group">
                        <label for="image">Door Type</label>
                        <input type="text"  class="form-control" name="doortype"  value="{{$services->doortype}}">
                        @if ($errors->has('doortype'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('doortype') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="image">Door Image</label>
                        <input type="file"  class="form-control" name="doorimage"  id="fileInput">
                        <a href=""><img src="{{asset('website/homepage/'.$services->doorimage)}}" style="width:80px;height:80px;"></a>
                      <br>  <span class="text-danger">(NOTE-PNG,JPG,JPEG,Size-1MB,Min_Dim-500X700,Max_Dim-1200X2000)</span>
                        <span id="message" class="text-danger"></span>
                        @if ($errors->has('doorimage'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('doorimage') }}.</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        {{-- <input id="status" class="form-control" type="text" name="email" required> --}}
                        <select name="status" id="" class="form-control">
                            <option  selected>Status</option>
                            <option value="1" {{$services->status == 1 ? 'selected' : ''}}>Active</option>
                            <option value="0" {{$services->status == 0 ? 'selected' : ''}}>Inactive</option>
                        </select>
                        @if ($errors->has('status'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('status') }}.</strong>
                        </span>
                        @endif
                    </div>
                    
                    <button class="btn btn-primary" type="submit" >Submit</button>
                </fieldset>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>

@endsection