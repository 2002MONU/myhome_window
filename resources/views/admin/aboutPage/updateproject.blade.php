@extends('admin.layout.app')
@section('admintitle') Update @endsection
@section('maincontent')
<div class="main-content">
    <div class="container-fluid">
        <div class="d-inline-block align-items-center">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:history.back()" >Back</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Page</li>
                    <li class="breadcrumb-item " aria-current="page"><a href="{{url('admin/dashboard')}}" >Dashboard</a></li>
                </ol>
            </nav>
        </div>
        <div class="row">
<div class="col-xl-12 box-margin">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add Door Category</h4>
            <form class="cmxform"  method="post" enctype="multipart/form-data" 
            action="{{route('about-projectupdatePost',$aboutproject->id)}}">
                @csrf
                <fieldset>
                    <div class="row">
                       <div class="col-md-6">
                        <div class="form-group">
                            <label for="image">Heading</label>
                            <input type="text"  class="form-control" name="heading" value="{{$aboutproject->heading}}" >
                            @if ($errors->has('heading'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('heading') }}.</strong>
                            </span>
                            @endif
                        </div>
                        </div> 
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Description</label>
                                <textarea type="text"  class="form-control ckeditor" name="description"  value="">{{$aboutproject->description}}</textarea>
                                @if ($errors->has('description'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('description') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Satisfied Clients</label>
                                <input type="text"  class="form-control" name="satisfied_clients"  value="{{$aboutproject->satisfied_clients}}">
                                @if ($errors->has('satisfied_clients'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('satisfied_clients') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Total Products</label>
                                <input type="text"  class="form-control" name="total_products"  value="{{$aboutproject->total_products}}">
                                @if ($errors->has('total_products'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('total_products') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Years Of Build</label>
                                <input type="text"  class="form-control" name="years_of_build"  value="{{$aboutproject->years_of_build}}">
                                @if ($errors->has('years_of_build'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('years_of_build') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Total Revenue</label>
                                <input type="text"  class="form-control" name="total_revenue"  value="{{$aboutproject->total_revenue}}">
                                @if ($errors->has('total_revenue'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('total_revenue') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>
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
<script src="https://cdn.ckeditor.com/ckeditor5/33.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('.ckeditor'))
            .catch(error => {
                console.error(error);
            });
           
    </script>
@endsection