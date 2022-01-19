@extends('layouts.super-admin.master')
@section('title')
Earnings
@endsection
@section('header-extra-links')
@endsection
@section('content')
<div class="page-content container-fluid">
                <div class="d-flex">
                    <div>
                        <p class="ml-4 pt-3 mb-0" style="color:#6c63ff;font-size: 20px;">Earnings List</p>
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
                                <th>User Id</th>
                                <th>Type</th>
                                <th>Total Earnings</th>
                                <th>Updated At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($earnings as $index=>$m)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$m->user_id}}</td>
                                <td>{{$m->type}}</td>
                                <td>{{$m->earnings}}</td>
                                <td>{{$m->updated_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table> 
                </div>
            </div>
            
@endsection