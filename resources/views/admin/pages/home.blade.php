@extends('layouts.super-admin.master')
@section('title')
Edit Home Page
@endsection
@section('header-extra-links')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<!-- Styles -->
	<style type="text/css">
		body {background: whitesmoke;text-align: center;}
		button{background-color: darkslategrey;color: white;border: 0;font-size: 18px;font-weight: 500;border-radius: 7px;padding: 10px 10px;cursor: pointer;white-space: nowrap;}
		#success{background: green;}
		#error{background: red;}
		#warning{background: coral;}
		#info{background: cornflowerblue;}
		#question{background: grey;}
	</style>
@endsection
@section('content')
<div class="page-content container-fluid">
                <h5 class="ml-4 pt-3">Edit Home Page</h5>
                <div class="main-content p-4">
                     <h3 class="text-center my-3">Home Page Slider</h3>
                     <div style="width: 100%;" class="bg-light">
                         <input type="file" id="slider" class="d-none" multiple onchange="upload_images()">
                         <div id="status-slider"></div>
                         <div class="row p-4" id="slider-images">
                             @foreach($data['sliders'] as $s)
                             <div class="col-sm-3 mt-3">
                                    <div style="width: 150px;height: 150px;cursor:pointer">
                                        <img src="{{asset('images/'.$s->name)}}" alt="" style="width:100%;height:100%">
                                    </div>
                                    <div class="text-left mt-2">
                                        <a href="{{url('/admin/pages/home/slider/delete/'.$s->id)}}" class="btn btn-danger">Delete</a>
                                    </div>
                             </div>
                             @endforeach
                             <div class="col-sm-3 mt-3">
                                    <div style="width: 150px;height: 150px;cursor:pointer" onclick="document.querySelector('#slider').click()">
                                        <img src="{{asset('super-admin-assets/img/plus.png')}}" alt="" style="width:100%;height:100%">
                                    </div>
                             </div>
                         </div>
                     </div>
                     <h3 class="text-center my-3">YOU ARE THE BOSS</h3>
                     <div style="width: 100%;" class="bg-light">
                         <div id="status-slider"></div>
                         <div class="row p-4">
                             @foreach($data['team'] as $s)
                             <div class="col-sm-3 mt-3">
                                    <div style="width: 150px;height: 150px;cursor:pointer">
                                        <img src="{{asset('images/'.$s->image)}}" alt="" style="width:100%;height:100%">
                                    </div>
                                    <div class="text-left mt-2">
                                        {{$s->role}}
                                        <a href="{{url('/admin/pages/home/team/delete/'.$s->id)}}" class="btn btn-danger">Delete</a>
                                    </div>
                             </div>
                             @endforeach
                             <div class="col-sm-3 mt-3">
                                    <div style="width: 150px;height: 150px;cursor:pointer" data-toggle="modal" data-target="#exampleModal">
                                        <img src="{{asset('super-admin-assets/img/plus.png')}}" alt="" style="width:100%;height:100%">
                                    </div>
                             </div>
                             
                         </div>
                     </div>
                </div>
            </div>
      

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Team</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="{{url('admin/pages/home/team')}}" method="post" enctype="multipart/form-data">@csrf
          <div class="form-group">
              <input type="text" name="employee_role" class="form-control @error('employee_role') is-invalid @enderror" placeholder="What does this employee do ?">                
                              @error('employee_role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    <script>document.getElementById('exampleModal').showModal()</script>
                                @enderror
          </div>
          <div class="form-group">
              <input type="file" name="employee_image" class="form-control">
              @error('employee_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="save-team">Save</button>
      </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('footer-extra-links')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<script>
    // Default Configuration
		$(document).ready(function() {
			toastr.options = {
				'closeButton': true,
				'debug': false,
				'newestOnTop': false,
				'progressBar': false,
				'positionClass': 'toast-top-right',
				'preventDuplicates': false,
				'showDuration': '1000',
				'hideDuration': '1000',
				'timeOut': '5000',
				'extendedTimeOut': '1000',
				'showEasing': 'swing',
				'hideEasing': 'linear',
				'showMethod': 'fadeIn',
				'hideMethod': 'fadeOut',
			}
		});

    function mc(el){return document.querySelector(el);}
    function upload_images()
    {
        var f = mc('#slider').files[0];
        var fd = new FormData();
        fd.append('Image',f);
        fd.append('_token','{{csrf_token()}}');
        var ajax = new XMLHttpRequest();
        ajax.addEventListener('load',complete,false);
        ajax.open('post','{{url("/admin/pages/home/slider")}}');
        ajax.send(fd);
    }
        function complete(event)
        {
            $s = JSON.parse(event.target.responseText);
            console.log($s)
            if($s.status == false)
                toastr.error($s.error);
            if($s.status == true){
                toastr.success('Image Uploaded Successfully');
                setTimeout(redirect,2000);
            }
        }
        function redirect()
        {
            window.location.href = '/admin/pages/home';
        }

</script>
@endsection