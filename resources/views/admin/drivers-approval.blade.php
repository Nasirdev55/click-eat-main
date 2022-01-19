@extends('layouts.super-admin.master')
@section('title')
Drivers Approval
@endsection
@section('header-extra-links')
@endsection
@section('content')
<div class="page-content container-fluid">
                <div class="d-flex">
                    <div>
                        <p class="ml-4 pt-3 mb-0" style="color:#6c63ff;font-size: 20px;">Drivers Approval List</p>
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
                                <th>Approved</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($drivers as $index=>$m)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$m->name}}</td>
                                <td>{{$m->email}}</td>
                                <td>{{$m->approved}}</td>
                                <td>
                                    <a href="{{url('admin/driver/approval/'.$m->id)}}" class="btn btn-primary">Approve</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table> 
                </div>
            </div>
            
@endsection