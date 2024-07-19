@extends('admin.layout.app')
@section('admintitle') Add Feature @endsection
@section('maincontent')
<div class="main-content">
    <div class="container-fluid">
        <div class="d-inline-block align-items-center">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:history.back()" >Back</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Features</li>
                    <li class="breadcrumb-item " aria-current="page"><a href="{{url('admin/dashboard')}}" >Dashboard</a></li>
                </ol>
            </nav>
        </div>
        <div class="row">
<div class="col-xl-6 box-margin">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add Home Features</h4>
            <form class="cmxform"  method="post" enctype="multipart/form-data" action="{{route('home.addfeaturespost')}}">
                @csrf
                <fieldset>
                    <div class="form-group">
                        <label for="image">Features Name</label>
                        <input type="text"  class="form-control" name="feature" placeholder="Design to Choose" >
                        @if ($errors->has('feature'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('feature') }}.</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="image">Icon</label>
                        <input type="file"  class="form-control" name="icon"  id="fileInput">
                        <span class="text-danger">(NOTE-PNG,JPG,JPEG,Size-512KB,Min_Dim-100X100,Max_Dim-300X300)</span>
                        <span id="message" class="text-danger"></span>
                        @if ($errors->has('icon'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('icon') }}.</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        {{-- <input id="status" class="form-control" type="text" name="email" required> --}}
                        <select name="status" id="" class="form-control">
                            <option  selected>Status</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
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