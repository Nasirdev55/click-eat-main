@extends('layouts.click-eat-main.master')
@section('title')
About Us
@stop

   

  
@section('content')
    <div class="container-fluid blog-img">
     
    </div>

    <div class="container story mt-5">
       <div class="what-do">
           <p class="text-center">Our Story</p>
           <div class="line center"></div>
         </div>
         <div class="text-center well mt-5"><p>@if($data1){{$data1->title}} @endif</p></div>
    </div>

    <section>
      <div class="container intro mt-5">
        <div class="row">
          <div class="col-md-5">
            <div class="image center">
              <img src="@if($data1) {{ asset('images/'.$data1->image)}} @endif">
            </div>
          </div>
          <div class="col-md-7">
            <p class="center">@if($data1) {{$data1->text}} @endif</p>
          </div>
        </div>
      </div>
    </section>

    <section style="background: #F7F7F7 0% 0% no-repeat padding-box;">
  <div class="container star mt-5 py-5">
    <div class="row">
      <div class="col-md-3 text-center mt-4">
        <div class="main ml-auto mr-auto">
          <img src="{{ asset('main-assets/img/images/17ad23e3-8ef2-497d-b102-d76d62ef81d4.png')}}">
        </div>
        <p class="mt-4">Active Customers</p>
        <b>5.5M</b>
       
      </div>
      <div class="col-md-3 text-center mt-4">
        <div class="main ml-auto mr-auto">
          <img src="{{ asset('main-assets/img/images/04230946-fbde-44a7-b907-934d11e1c891.png')}}">
        </div>
        <p class="mt-4">Active Orders</p>
        <b>65.5K</b>
       
      </div>

     <div class="col-md-3 text-center mt-4">
        <div class="main ml-auto mr-auto">
          <img src="{{ asset('main-assets/img/images/67c156c0-2d93-4070-af55-c1a608981a34.png')}}">
        </div>
        <p class="mt-4">Local Restaurants</p>
        <b>65.5K</b>
       
      </div>

       <div class="col-md-3 text-center mt-4">
        <div class="main ml-auto mr-auto">
          <img src="{{ asset('main-assets/img/images/b58007e7-7361-4205-aa44-1e58631b70e5.png')}}">
        </div>
        <p class="mt-4">Employees</p>
        <b>65.5K</b>
       
      </div>
    </div>
  </div>
</section>

<div class="container story mt-5">
       <div class="what-do">
           <p class="text-center">OUR COMMITMENT</p>
           <div class="line center"></div>
         </div>
         <div class="text-center well mt-5"><p>@if($data1) {{$data2->title}} @endif</p></div>
    </div>


     <section class="pb-5">
      <div class="container intro mt-5">
        <div class="row">

                 <div class="col-md-7">
            <p class="center">@if($data1) {{$data2->text}} @endif</p>
          </div>




          <div class="col-md-5">
            <div class="image center">
              <img src="@if($data1) {{ asset('images/'.$data2->image)}} @endif">
            </div>
          </div>
           </div>
      </div>
    </section>
@stop


   
     


  