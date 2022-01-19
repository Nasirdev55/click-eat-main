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
                        <th>Capacity</th>
                        <th>Currency</th>
                        <th>Price</th>
                        <th>Discount Price</th>
                        <th>Category</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
                <tbody> 
                    @foreach($products as $index=>$product)   
                <tr>
                        <td>{{$index + 1}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->capacity}}</td>
                        <td>{{$product->currency}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->dprice}}</td>
                        <td>{{$product->category}}</td>
                        <td>{{$product->updated_at}}</td>
                    </tr>
                    @endforeach
                </tbody>
                        </table> 
                </div>
            </div>
            
@endsection