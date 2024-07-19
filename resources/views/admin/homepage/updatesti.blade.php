@extends('admin.layout.app')
@section('admintitle') Testimonial Update @endsection
@section('maincontent')
<div class="main-content">
    <div class="container-fluid">
        <div class="d-inline-block align-items-center">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:history.back()" >Back</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Testimonial</li>
                    <li class="breadcrumb-item " aria-current="page"><a href="{{url('admin/dashboard')}}" >Dashboard</a></li>
                </ol>
            </nav>
        </div>
        <div class="row">
<div class="col-xl-12 box-margin">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Testimonial </h4>
            <form class="cmxform"  method="post" enctype="multipart/form-data" action="{{route('testimonials-updatePost', $testi->id)}}">
                @csrf
                <fieldset>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Client Image</label>
                                <input type="file"  class="form-control" name="image"  id="fileInput">
                                <a href="{{asset('website/homepage/'.$testi->image)}}"><img src="{{asset('website/homepage/'.$testi->image)}}"></a>
                               <br> <span id="message" class="text-danger"></span>
                                <span class="text-danger">(NOTE-PNG,JPG,JPEG,Size-512KB,Min_Dim-100X100,Max_Dim-500X500)</span>
                                <br>
                                @if ($errors->has('image'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('image') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Client Name</label>
                                <input type="text"  class="form-control" name="clientname"  value="{{$testi->clientname}}" >
                                @if ($errors->has('clientname'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('clientname') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Client Description</label>
                                <textarea type="text"  class="form-control ckeditor" name="description"  >{{$testi->description}}</textarea>
                                @if ($errors->has('description'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('description') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Client Designation</label>
                                <input type="text"  class="form-control" name="designation" value="{{$testi->designation}}">
                                @if ($errors->has('designation'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('designation') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="status">Status</label>
                               
                                <select name="status" id="" class="form-control">
                                    <option  selected>Status</option>
                                    <option value="1" {{$testi->status == 1 ? 'selected' : ''}}>Active</option>
                                    <option value="0" {{$testi->status == 0 ? 'selected' : ''}}>Inactive</option>
                                </select>
                                @if ($errors->has('status'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('status') }}.</strong>
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