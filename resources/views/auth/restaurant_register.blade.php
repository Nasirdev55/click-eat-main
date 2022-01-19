@extends('layouts.app')

@section('content')
<div class="card login m-3">
    <div class="text-center mt-4">
        <h2>Logo</h2>
    </div>
    <div class="login-form">
        <form method="POST" action="{{ route('restaurant.register') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label for="">Restaurant Name</label>
                    <input id="name" type="text" class="form-control @error('restaurant_name') is-invalid @enderror"
                        name="restaurant_name" value="{{ old('restaurant_name') }}" required
                        autocomplete="restaurant_name" autofocus>

                    @error('restaurant_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-sm-6 form-group">
                    <label for="">Address</label>
                    <input id="domain_url" type="text" class="form-control @error('address') is-invalid @enderror"
                        name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                    @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="">Restaurant Image</label>
                    <input id="domain_url" type="file" class="form-control @error('image') is-invalid @enderror"
                        name="image" value="{{ old('image') }}" required autocomplete="image" autofocus>

                    @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-md-6 form-group mt-3">
                    <label for="">Deploy on your domain</label>
                    <input type="checkbox">
                    @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label for="">Domain URL</label>
                        <input id="domain_url" type="text"
                            class="form-control @error('domain_url') is-invalid @enderror @if(Session::has('error')) is-invalid @endif"
                            name="domain_url" value="{{ old('domain_url') }}" required autocomplete="domain_url"
                            autofocus>

                        @error('domain_url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        @if(Session::has('error'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ Session('error') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            <div class="form-group">
                <label for="">Select Theme</label>
                <div class="row mt-3">
                    <div class="col-sm-4 mt-3">
                        <img src="{{asset('/logo/theme1.PNG')}}" alt="" style="width:200px">
                        <div class="d-flex align-items-center min-h-screen">
                            <div>
                                <a href="{{url('preview/theme-1/home')}}" target="_blank"
                                    style="background-color: #ffcc00;" class="btn mt-2"
                                    rel="noopener noreferrer">Preview</a>
                            </div>
                            <div class="ms-4 d-flex align-items-center min-h-screen mt-2">
                                <input type="radio" value="1" name="theme" class="@error('theme') is-invalid @enderror"
                                    style="display:none" id="r1">
                                <button type="button" class="btn btn-secondary" id="b1"
                                    onclick="selection(this.id)">Select</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-3">
                        <img src="{{asset('/logo/theme2.PNG')}}" alt="" style="width:200px">
                        <div class="d-flex align-items-center min-h-screen">
                            <div>
                                <a href="{{url('preview/theme-2/home')}}" target="_blank"
                                    style="background-color: #ffcc00;" class="btn mt-2"
                                    rel="noopener noreferrer">Preview</a>
                            </div>
                            <div class="ms-4 d-flex align-items-center min-h-screen mt-2">
                                <input type="radio" name="theme" value="2" class="@error('theme') is-invalid @enderror"
                                    style="display:none" id="r2">
                                <button type="button" class="btn btn-secondary" id="b2"
                                    onclick="selection(this.id)">Select</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-3">
                        <img src="{{asset('/logo/theme3.PNG')}}" alt="" style="width:200px">
                        <div class="d-flex align-items-center min-h-screen">
                            <div>
                                <a href="{{url('preview/theme-3/home')}}" target="_blank"
                                    style="background-color: #ffcc00;" class="btn mt-2"
                                    rel="noopener noreferrer">Preview</a>
                            </div>
                            <div class="ms-4 d-flex align-items-center min-h-screen">
                                <button type="button" class="btn btn-secondary mt-2" id="b3"
                                    onclick="selection(this.id)">Select</button>
                                @error('theme')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="radio" value="3" name="theme" class="@error('theme') is-invalid @enderror"
                                style="display:none" id="r3">
                            @error('theme')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>

            </div>
            <input type="submit" id="register" class="mt-3 w-100 mt-4 btn text-white font-weight-bold"
                style="background-color: #ffcc00;" value="Save">
        </form>
    </div>
</div>
@endsection
