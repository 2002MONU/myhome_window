@extends('admin.layout.app')
@section('admintitle') Blog Update @endsection
@section('maincontent')
<div class="main-content">
    <div class="container-fluid">
        <div class="d-inline-block align-items-center">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:history.back()" >Back</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                    <li class="breadcrumb-item " aria-current="page"><a href="{{url('admin/dashboard')}}" >Dashboard</a></li>
                </ol>
            </nav>
        </div>
        <div class="row">
<div class="col-xl-12 box-margin">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Update Blog </h4>
            <form class="cmxform"  method="POST" enctype="multipart/form-data" action="{{route('admin.blogupdatePost', $blogsection->id)}}">
                @csrf
                <fieldset>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Blog Image</label>
                                <input type="file"  class="form-control" name="image"  id="fileInput">
                                <a href="{{asset('website/blogpage/'.$blogsection->image)}}"><img src="{{asset('website/blogpage/'.$blogsection->image)}}" alt="" style="width:80px;height:80px;"></a> <br>
                                <span class="text-danger">(NOTE-PNG,JPG,JPEG,Size-512KB,Min_Dim-700X600,Max_Dim-2500X1200)</span>
                                <span id="message" class="text-danger"></span>
                                @if ($errors->has('image'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('image') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Blog Title</label>
                                <input type="text"  class="form-control" name="title"  value="{{$blogsection->title}}">
                                @if ($errors->has('title'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('title') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Blog Description</label>
                                <textarea type="text"  class="form-control" cols="12" rows="5" name="description"  >{{$blogsection->description}}</textarea>
                                @if ($errors->has('description'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('description') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        {{-- <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">slug</label>
                                <input type="text"  class="form-control" name="slug"  value="{{$blogsection->slug}}">
                                @if ($errors->has('slug'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('slug') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div> --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Writer Name</label>
                                <input type="text"  class="form-control" name="writer"  value="{{$blogsection->writer}}">
                                @if ($errors->has('writer'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('writer') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="status">Status</label>
                                {{-- <input id="status" class="form-control" type="text" name="email" required> --}}
                                <select name="status" id="" class="form-control">
                                    <option  selected>Status</option>
                                    <option value="1" {{$blogsection->status == 1 ? 'selected' : ''}}>Active</option>
                                    <option value="0" {{$blogsection->status == 0 ? 'selected' : ''}}>Inactive</option>
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

@endsection