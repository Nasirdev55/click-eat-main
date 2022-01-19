@extends('layouts.super-admin.master')
@section('title')
Edit About Page
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
                <h5 class="ml-4 pt-3">Edit About Page</h5>
                <div class="main-content p-4">
                     <h3 class="text-center my-3">Our Story</h3>
                     <div style="width: 100%;" class="bg-light">
                     <form action="{{url('/admin/pages/about/story')}}" method="post" enctype="multipart/form-data">@csrf
                     @if(Session::has('msg'))
                     <div class="alert alert-primary mt-3">{{Session('msg')}}</div>
                     @endif    
                     <div class="row pt-3">
                         <div class="col-sm-4 form-group">
                             <textarea name="title" id="" cols="30" rows="10">{{$data1->title}}</textarea>
                         </div>
                         <div class="col-sm-4 form-group">
                             <textarea name="text" id="" cols="30" rows="10">{{$data1->text}}</textarea>
                         </div>
                         <div class="col-sm-4 form-group">
                             <img src="{{asset('/images/'.$data1->image)}}" alt="" style="width:200px;height:200px">
                             <div class="form-group mt-2">
                             <input type="file" class="ml-5" name="image">
                         </div>
                            </div>
                         </div>
                         
                         <div class="form-group pb-3">
                             <input type="submit" class="btn btn-success" value="Update">
                         </div>
                     </form>
                     </div>
                     <h3 class="text-center my-3">Our Commitment</h3>
                     <div style="width: 100%;" class="bg-light">
                     <form action="{{url('/admin/pages/about/commit')}}" method="post" enctype="multipart/form-data">@csrf
                     @if(Session::has('msg1'))
                     <div class="alert alert-primary mt-3">{{Session('msg1')}}</div>
                     @endif
                       <div class="row pt-3">
                         <div class="col-sm-4 form-group">
                             <textarea name="title" id="" cols="30" rows="10">{{$data2->title}}</textarea>
                         </div>
                         <div class="col-sm-4 form-group">
                             <textarea name="text" id="" cols="30" rows="10">{{$data2->text}}</textarea>
                         </div>
                         <div class="col-sm-4 form-group">
                             <img src="{{asset('/images/'.$data2->image)}}" alt="" style="width:200px;height:200px">
                             <div class="form-group mt-2">
                             <input type="file" class="ml-5" name="image">
                         </div>
                            </div>
                         </div>
                         
                         <div class="form-group pb-3">
                             <input type="submit" class="btn btn-success" value="Update">
                         </div>
                     </form>
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