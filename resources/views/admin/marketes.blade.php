@extends('layouts.super-admin.master')
@section('title')
Restaurants
@endsection
@section('header-extra-links')
@endsection
@section('content')
<div class="page-content container-fluid">
                <div class="d-flex">
                    <div>
                        <p class="ml-4 pt-3 mb-0" style="color:#6c63ff;font-size: 20px;">Restaurants List</p>
                    </div>
                    <div>
                        <a href="{{url('/admin/restaurant/create')}}" style="text-decoration:none;cursor:pointer;color:black"><div class="d-flex">
                            <div>
                                <img src="{{ asset('super-admin-assets/icons/Plus.svg')}}" alt="" style="margin-top: 24px;" class="ml-4">
                            </div>
                            <div>
                                <p class="ml-2 pt-3 mb-0" style="font-size: 20px;">New Restaurant</p>
								</div>
                        </div></a>
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
                                <th>Owner Name</th>
                                <th>Email</th>
                                <th>Restaurant Name</th>
                                <th>Approved</th>
                                <th>Theme</th>
                                <th>Domain</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($marketes as $index=>$m)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$m->userinfo->name}}</td>
                                <td>{{$m->userinfo->email}}</td>
                                <td>{{$m->business_name}}</td>
                                <td>{{$m->approved}}</td>
                                <td>{{$m->theme}}</td>
                                <td>{{$m->domain}}</td>
                                <td>
                                    <a href="{{url('admin/restaurant/delete/'.$m->id)}}"><img src="{{ asset('super-admin-assets/icons/bin.png')}}" alt=""></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table> 
                </div>
            </div>
            
@endsection