@extends('admin.layout.app')
@section('admintitle') Category Add @endsection
@section('maincontent')
<div class="main-content">
    <div class="container-fluid">
        <div class="d-inline-block align-items-center">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:history.back()" >Back</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Category</li>
                    <li class="breadcrumb-item " aria-current="page"><a href="{{url('admin/dashboard')}}" >Dashboard</a></li>
                </ol>
            </nav>
        </div>
        <div class="row">
<div class="col-xl-6 box-margin">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add Door Category</h4>
            <form class="cmxform"  method="post" enctype="multipart/form-data" action="{{route('add-categoryPost')}}">
                @csrf
                <fieldset>
                    <div class="form-group">
                        <label for="image">Category Name</label>
                        <input type="text"  class="form-control" name="title" placeholder="Single Door" >
                        @if ($errors->has('title'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('title') }}.</strong>
                        </span>
                        @endif
                    </div>
                    
                    <div class="form-group">
                        <label for="status">Status</label>
                        
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