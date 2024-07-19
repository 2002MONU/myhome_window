@extends('admin.layout.app')
@section('admintitle') About @endsection
@section('maincontent')
<div class="main-content">
    <div class="container-fluid">
        <div class="d-inline-block align-items-center">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:history.back()" >Back</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Edit</li>
                    <li class="breadcrumb-item " aria-current="page"><a href="{{url('admin/dashboard')}}" >Dashboard</a></li>
                </ol>
            </nav>
        </div>
        <div class="row">
<div class="col-xl-6 box-margin">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit About Details</h4>
            <form class="cmxform"  method="post" enctype="multipart/form-data" action="{{route('home.about-details-update',$homeabout->id)}}" id="myForm">
                @csrf
                <fieldset>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{$homeabout->title}}">
                        @if ($errors->has('title'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="title">Description</label>
                        <textarea type="text" name="description" id="title" class="form-control" cols="6" rows="3"> {{$homeabout->description}}</textarea>
                        @if ($errors->has('description'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exper">Experiance</label>
                        <input type="text" name="experiance" id="exper" class="form-control" value="{{$homeabout->experiance}}"> 
                        <div id="experienceError" class="error text-danger"></div>
                        @if ($errors->has('experiance'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('experiance') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="title">Happy Clients</label>
                        <input type="text" name="happyclient" id="happycust" class="form-control" value="{{$homeabout->happyclient}}"> 
                        <div id="happycustError" class="error text-danger"></div>
                        @if ($errors->has('happyclient'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('happyclient') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="title"> Projects Delivered</label>
                        <input type="text" name="projectdeli" id="projectdeli" class="form-control" value="{{$homeabout->projectdeli}}"> 
                        <div id="projectdeliError" class="error text-danger"></div>
                        @if ($errors->has('projectdeli'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('projectdeli') }}</strong>
                        </span>
                        @endif
                    </div>
                    
                    <div class="form-group">
                        <label for="title">Quality</label>
                        <input type="text" name="quality" id="quality" class="form-control" value="{{$homeabout->quality}}"> 
                        <div id="qualityError" class="error text-danger"></div>
                        @if ($errors->has('quality'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('quality') }}</strong>
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