@extends('layouts.super-admin.master')
@section('title')
Contact Us
@endsection
@section('header-extra-links')
@endsection
@section('content')
<div class="page-content container-fluid">
                <div class="d-flex">
                    <div>
                        <p class="ml-4 pt-3 mb-0" style="color:#6c63ff;font-size: 20px;">Contact Us</p>
                    </div>
                </div>
                <div class="main-content p-4">
                    <table class="table responsive" id="data-table" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sr No</th>
                                <th>Business Name</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Message</th>
                                <th>Recieved At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contacts as $index=>$m)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$m->bname}}</td>
                                <td>{{$m->fullname}}</td>
                                <td>{{$m->email}}</td>
                                <td>{{$m->phone}}</td>
                                <td><p style="word-break:break-word">{{$m->msg}}</p></td>
                                <td>{{$m->created_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table> 
                </div>
            </div>
@endsection