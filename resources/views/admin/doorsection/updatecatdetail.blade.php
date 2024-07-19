@extends('admin.layout.app')
@section('admintitle') Category Details @endsection
@section('maincontent')
<div class="main-content">
    <div class="container-fluid">
        <div class="d-inline-block align-items-center">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:history.back()" >Back</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Door Category</li>
                    <li class="breadcrumb-item " aria-current="page"><a href="{{url('admin/dashboard')}}" >Dashboard</a></li>
                </ol>
            </nav>
        </div>
        <div class="row">
<div class="col-xl-12 box-margin">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Update Door Category </h4>
            <form class="cmxform"  method="POST" enctype="multipart/form-data" action="{{route('category-updatePost',$category->id)}}">
                @csrf
                <fieldset>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Select Door Category</label>
                               <select class="form-control" name="category_id">
                                <option selected>Select Door Category</option>
                                @foreach ($categories as $item)
                                 <option value="{{$item->id}}" @if($item->id == $category->category_id) selected @endif>{{$item->title}}</option>
                                @endforeach
                                </select>
                                @if ($errors->has('category_id'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('category_id') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Door Title <span class="text-danger">(Door Title Different From Select Door Category)</span></label>
                                <input type="text"  class="form-control" name="title"  value="{{$category->titletype}}">
                                @if ($errors->has('title'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('title') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Door Image 1</label>
                                <input type="file"  class="form-control file-input" name="image1"  id="fileInput1">
                                <a href="{{asset('website/doortype/'.$category->image1)}}"><img src="{{asset('website/doortype/'.$category->image1)}}" style="width:80px;height:80px;"></a> <br>
                                <span class="text-danger">(NOTE-PNG,JPG,JPEG,Size-512KB,Min_Dim-300X400,Max_Dim-900X1300)</span>
                                <span id="message1" class="text-danger"></span>
                                @if ($errors->has('image1'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('image1') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Door Image 2</label>
                                <input type="file"  class="form-control file-input" name="image2"  id="fileInput2">
                                <a href="{{asset('website/doortype/'.$category->image2)}}"><img src="{{asset('website/doortype/'.$category->image2)}}" style="width:80px;height:80px;"></a> <br>

                                <span class="text-danger">(NOTE-PNG,JPG,JPEG,Size-512KB,Min_Dim-300X400,Max_Dim-900X1300)</span>
                                <span id="message2" class="text-danger"></span>
                                @if ($errors->has('image2'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('image2') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Door Image 3</label>
                                <input type="file"  class="form-control file-input" name="image3"  id="fileInput3">
                                <a href="{{asset('website/doortype/'.$category->image3)}}"><img src="{{asset('website/doortype/'.$category->image3)}}" style="width:80px;height:80px;"></a> <br>

                                <span class="text-danger">(NOTE-PNG,JPG,JPEG,Size-512KB,Min_Dim-300X400,Max_Dim-900X1300)</span>
                                <span id="message3" class="text-danger"></span>
                                @if ($errors->has('image3'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('image3') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Door Image 4</label>
                                <input type="file"  class="form-control file-input" name="image4"  id="fileInput4">
                                <a href="{{asset('website/doortype/'.$category->image4)}}"><img src="{{asset('website/doortype/'.$category->image4)}}" style="width:80px;height:80px;"></a> <br>

                                <span class="text-danger">(NOTE-PNG,JPG,JPEG,Size-512KB,Min_Dim-300X400,Max_Dim-900X1300)</span>
                                <span id="message4" class="text-danger"></span>
                                @if ($errors->has('image4'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('image4') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Door Image 5</label>
                                <input type="file"  class="form-control file-input" name="image5"  id="fileInput5">
                                <a href="{{asset('website/doortype/'.$category->image5)}}"><img src="{{asset('website/doortype/'.$category->image5)}}" style="width:80px;height:80px;"></a> <br>

                                <span class="text-danger">(NOTE-PNG,JPG,JPEG,Size-512KB,Min_Dim-300X400,Max_Dim-900X1300)</span>
                                <span id="message5" class="text-danger"></span>
                                @if ($errors->has('image5'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('image5') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                       
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Door Brand</label>
                                <input type="text"  class="form-control" name="doorbrand"  value="{{$category->doorbrand}}">
                                @if ($errors->has('doorbrand'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('doorbrand') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image"> Description</label>
                                <textarea type="text"  class="form-control ckeditor" cols="12" rows="5" name="description" value="" >{{$category->description}}</textarea>
                                @if ($errors->has('description'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('description') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                       
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Door Model</label>
                                <input type="text"  class="form-control" name="doormodel" value="{{$category->doormodel}}" >
                                @if ($errors->has('doormodel'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('doormodel') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Price</label>
                                <input type="text"  class="form-control" name="price" value="{{$category->price}}" >
                                @if ($errors->has('price'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('price') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Sale Price </label>
                                <input type="text"  class="form-control" name="saleprice" value="{{$category->saleprice}}" >
                                @if ($errors->has('saleprice'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('saleprice') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                    </div>
                        <h5>Product Details</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="image"> Paragraph</label>
                                    <textarea type="text"  class="form-control ckeditor1" cols="12" rows="5" name="paragraph" value="" >{{$category->paragraph}}</textarea>
                                    @if ($errors->has('paragraph'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('paragraph') }}.</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="image"> More Details</label>
                                    <textarea type="text"  class="form-control ckeditor2" cols="12" rows="5" name="moredetails"  >{{$category->moredetails}}</textarea>
                                    @if ($errors->has('moredetails'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('moredetails') }}.</strong>
                                    </span>
                                    @endif
                                </div>
                            </div> 
                        </div>
                        <h5>ADDITIONNAL INFORMATION</h5>
                   <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="image">Color</label>
                            <input type="text"  class="form-control "  name="color"  value="{{$category->color}}">
                            @if ($errors->has('color'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('color') }}.</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="image">Wood Type</label>
                            <input type="text"  class="form-control "  name="woodtype"  value="{{$category->woodtype}}">
                            @if ($errors->has('woodtype'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('woodtype') }}.</strong>
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
                                <option value="1" {{$category->status == 1 ? 'selected' : ''}}>Active</option>
                                <option value="0"  {{$category->status == 0 ? 'selected' : ''}}>Inactive</option>
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
    // image validate 
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