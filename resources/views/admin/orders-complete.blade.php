@extends('layouts.super-admin.master')
@section('title')
Complete Orders
@endsection
@section('header-extra-links')
@endsection
@section('content')
<div class="page-content container-fluid">
                <div class="d-flex">
                    <div>
                        <p class="ml-4 pt-3 mb-0" style="color:#6c63ff;font-size: 20px;">Complete Orders</p>
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
                        <th>Product Id</th>
                        <th>Restaurant Id</th>
                        <th>Items</th>
                        <th>Total Price</th>
                        <th>Status</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody> 
                    @foreach($orders as $index=>$order)   
                <tr>
                        <td>{{$index + 1}}</td>
                        <td>{{$order->user_id}}</td>
                        <td>{{$order->product_id}}</td>
                        <td>{{$order->vendor_id}}</td>
                        <td>{{$order->items}}</td>
                        <td>{{$order->totals}}</td>
                        <td>{{$order->status}}</td>
                        <td>{{$order->created_at}}</td>
                    </tr>
                    @endforeach
                </tbody>
                        </table> 
                </div>
            </div>
            
@endsection