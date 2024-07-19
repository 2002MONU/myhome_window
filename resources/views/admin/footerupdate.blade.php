@extends('admin.layout.app')
@section('admintitle') Footer Update @endsection
@section('maincontent')
<div class="main-content">
    <div class="container-fluid">
        <div class="d-inline-block align-items-center">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:history.back()" >Back</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Footer</li>
                    <li class="breadcrumb-item " aria-current="page"><a href="{{url('admin/dashboard')}}" >Dashboard</a></li>
                </ol>
            </nav>
        </div>
        <div class="row">
<div class="col-xl-12 box-margin">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Footer Details Update </h4>
            <form class="cmxform"  method="POST" enctype="multipart/form-data" action="{{route('footer-updatePost',$footer->id)}}">
                @csrf
                <fieldset>
                    <div class="row">
                        
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Favicon</label>
                                <input type="file"  class="form-control file-input" name="favicon"  id="fileInput1">
                                <a href=""><img src="{{asset('website/logo/'.$footer->favicon)}}" style="width:70px;height:70px;"></a>
                               <br> <span class="text-danger">(NOTE-PNG,JPG,JPEG,Size-512KB,Min_Dim-100X100,Max_Dim-400X400)</span>
                                <span id="message1" class="text-danger"></span>
                                @if ($errors->has('favicon'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('favicon') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Logo</label>
                                <input type="file"  class="form-control file-input" name="logo"  id="fileInput2">
                                <a href=""><img src="{{asset('website/logo/'.$footer->logo)}}" style="width:70px;height:70px;"></a>
<br>
                                <span class="text-danger">(NOTE-PNG,JPG,JPEG,Size-512KB,Min_Dim-800X400,Max_Dim-2000X1800)</span>
                                <span id="message2" class="text-danger"></span>
                                @if ($errors->has('logo'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('logo')}}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Footer About	</label>
                                <textarea type="text"  class="form-control ckeditor1" name="footerabout"  >{{$footer->footerabout}}</textarea>
                                @if ($errors->has('footerabout'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('footerabout') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image"> Address</label>
                                <textarea type="text"  class="form-control " cols="12" rows="5" name="address"  > {{$footer->address}}</textarea>
                                @if ($errors->has('address'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('address') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                       
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Email</label>
                                <input type="email"  class="form-control" name="email" value="{{$footer->email}}" placeholder="abc@gmail.com" >
                                @if ($errors->has('email'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('email') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Contact</label>
                                <input type="text"  class="form-control" name="contact" placeholder="9812343210" value="{{$footer->contact}}">
                                @if ($errors->has('contact'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('contact') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Get In Touch Title </label>
                                <input type="text"  class="form-control" name="title" value="{{$footer->title}}" placeholder="Lorem ipsum ...." >
                                @if ($errors->has('title'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('title') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                    </div>
                        <h5>Social Links</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="image">Facebook</label>
                                    <input type="url"   name="facebook"  class="form-control " value="{{$footer->facebook}}" placeholder="https://www.facebook.com/" >
                                    @if ($errors->has('facebook'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('facebook') }}.</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="image"> Vimeo</label>
                                    <input type="url"   name="vimeo"  class="form-control " value="{{$footer->vimeo}}" cols="12" rows="5" >
                                    @if ($errors->has('vimeo'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('vimeo') }}.</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="image"> Twitter</label>
                                    <input type="url"   name="twitter"  class="form-control "  value="{{$footer->twitter}}">
                                    @if ($errors->has('twitter'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('twitter') }}.</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="image"> Instagram</label>
                                    <input type="url"   name="instagram"  class="form-control " value="{{$footer->instagram}}" >
                                    @if ($errors->has('instagram'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('instagram') }}.</strong>
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
            ClassicEditor
            .create(document.querySelector('.ckeditor1'))
            .catch(error => {
                console.error(error);
            });
            ClassicEditor
            .create(document.querySelector('.ckeditor2'))
            .catch(error => {
                console.error(error);
            });
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