@extends('layouts.super-admin.master')
@section('title')
Products
@endsection
@section('header-extra-links')
@endsection
@section('content')
<div class="page-content container-fluid">
                <div class="d-flex">
                    <div>
                        <p class="ml-4 pt-3 mb-0" style="color:#6c63ff;font-size: 20px;">Products List</p>
                    </div>
                </div>
                <div class="main-content p-4">
                @if(Session::has('msg'))
                     <div class="alert alert-primary mt-3">{{Session('msg')}}</div>
                     @endif
                    <table class="table responsive" id="data-table" class="display" style="width:100%">
                    <thead>
                            <tr>
                                <th>Sr No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>product Id</th>
                                <th>Stars</th>
                                <th>Review</th>
                            </tr>
                        </thead>
                        <tbody>
							@foreach($revs as $index=>$r)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$r->name}}</td>
                                <td>{{$r->email}}</td>
                                <td>{{$r->product_id}}</td>
                                <td>{{$r->stars}}</td>
                                <td>{{$r->review}}</td>
                                <!--td><a href="{{url('/restaurant/review')}}"><img src="{{asset('vendor-admin-assets/icons/bin.png')}}" alt=""></td-->
                            </tr>
							@endforeach
                           
                        </tbody>
                        </table> 
                </div>
            </div>
            
@endsection