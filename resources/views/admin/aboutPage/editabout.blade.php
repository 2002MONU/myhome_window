@extends('admin.layout.app')
@section('admintitle') About @endsection
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
<div class="col-xl-6 box-margin">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add Door Category</h4>
            <form class="cmxform"  method="post" enctype="multipart/form-data" 
            action="{{route('about-pagepost',$about->id)}}">
                @csrf
                <fieldset>
                    <div class="form-group">
                        <label for="image">Heading</label>
                        <input type="text"  class="form-control " name="heading" value="{{$about->heading}}" >
                        @if ($errors->has('heading'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('heading') }}.</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="image">Title</label>
                        <input type="text"  class="form-control" name="title"  value="{{$about->title}}">
                        @if ($errors->has('title'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('title') }}.</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="image">Description</label>
                        <textarea type="text"  class="form-control" name="description"  value="">{{$about->description}}</textarea>
                        @if ($errors->has('description'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('description') }}.</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="image">Image1</label>
                        <input type="file"  class="form-control file-input" name="image1"  id="fileInput1">
                        <a href="{{asset('website/aboutpage/'.$about->image1)}}"><img src="{{asset('website/aboutpage/'.$about->image1)}}" style="width:100px;height:100px;"></a>
                      <br>  <span class="text-danger">(NOTE-PNG,JPG,JPEG,Size-512KB,Min_Dim-350X450,Max_Dim-600X900)</span>
                        <span id="message1" class="text-danger"></span>
                        @if ($errors->has('image1'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('image1') }}.</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="image">Image2</label>
                        <input type="file"  class="form-control file-input" name="image2"  id="fileInput2">
                        <a href="{{asset('website/aboutpage/'.$about->image2)}}"><img src="{{asset('website/aboutpage/'.$about->image2)}}" style="width:100px;height:100px;"></a>
                      <br>  <span class="text-danger">(NOTE-PNG,JPG,JPEG,Size-512KB,Min_Dim-200X200,Max_Dim-500X500)</span>
                        <span id="message2" class="text-danger"></span>
                        @if ($errors->has('image2'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('image2') }}.</strong>
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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.file-input').forEach(function(input) {
            input.addEventListener('change', function(e) {
                var file = e.target.files[0];
                var messageId = 'message' + e.target.id.replace('fileInput', '');
                if (file) {
                    var fileType = file.name.split('.').pop().toLowerCase();
                    var validTypes = ['png', 'jpg', 'jpeg'];
                    if (validTypes.includes(fileType)) {
                        document.getElementById(messageId).innerText = 'You have selected a ' + fileType.toUpperCase() + ' file.';
                    } else {
                        document.getElementById(messageId).innerText = 'Please select a PNG, JPG, or JPEG file.';
                    }
                }
            });
        });
    });
</script>

@endsection