@extends('layouts.click-eat-main.master')
@section('title')
Services
@stop

   

  @section('content')
<section style="background-color: black;" class="pb-4">
    <div class="container py-3 services">
      <div class="what-do">
           <p class="text-center">Our Services</p>
           <div class="line center"></div>
         </div>
         <div class="text-center well mt-5"><p>Take a look at the range of marketing and advertising services we can offer to your brand as a full service marketing agency.</p></div>
    </div>
    </section>


    <section>
      <div class="container-custom pick">
        <div class="row">
        @foreach($services as $s)  
        <div class="col-md-4 cal1">
            <div class="image center">
              <img src="{{ asset('images/'.$s->image)}}">
              <div class="layer"></div>
            </div>
            <div class="text">
              <b>{{$s->name}}</b>
              <div class="btn1 py-3">
             <!-- <button type="button" class="btn btn-outline-light">More Details</button> -->
           </div>
            </div>
            
          </div>

        @endforeach

        </div>      </div>
    </section>

   




   
     


   @stop