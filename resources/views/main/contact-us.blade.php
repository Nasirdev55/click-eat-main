@extends('layouts.click-eat-main.master')
@section('title')
Contact Us
@stop
@section('content')
<style>
  .form-control:focus{box-shadow:none}
</style>
    <div class="container-fluid contact-img">
     
    </div>

    
   <section style="background-color:#FBFBFB;
opacity: 1;">
  <div class="container p-5 form">
    <div class="container story mt-5">
       <div class="what-do">
           <p class="text-center">Contact us</p>
           <div class="line center"></div>
         </div>
         <div class="text-center well mt-5"><b>Taking the stress out of online business marketing and development</b></div>
    </div>

        
       <div class="row mt-5">
        <div class="col-md-2"></div>
        <div class="col-md-8 mt-4">
          <div class="card align-items-center border-0" style="background-color: #FBFBFB">
          @if(Session::has('msg'))
                     <div class="alert alert-primary mt-3">{{Session('msg')}}</div>
                     @endif  
          <form action="{{url('/contactform')}}" method="post">@csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                     <input type="text" name="business_name" class="form-control @error('business_name') is-invalid @enderror" value="{{old('business_name')}}" placeholder="Business Name" autofocus>
                     @error('business_name')
                      <span class="invalid-feedback">
                          {{$message}}
                      </span>
                     @enderror 
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                     <input type="text" name="full_name" class="form-control @error('full_name') is-invalid @enderror" value="{{old('full_name')}}" placeholder="Full Name">
                     @error('business_name')
                      <span class="invalid-feedback">
                          {{$message}}
                      </span>
                     @enderror
                    </div>
                </div>

                 <div class="col-md-6">
                  <div class="form-group">
                     <input type="email"  name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" placeholder="Email">
                     @error('email')
                      <span class="invalid-feedback">
                          {{$message}}
                      </span>
                     @enderror
                    </div>
                </div>

                 <div class="col-md-6">
                  <div class="form-group">
                     <input type="text"  name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{old('phone')}}" placeholder="Phone">
                     @error('phone')
                      <span class="invalid-feedback">
                          {{$message}}
                      </span>
                     @enderror
                    </div>
                </div>
           
            
             </div>
             <div class="form-group">
            <textarea  name="message" class="form-control @error('message') is-invalid @enderror" value="{{old('message')}}" id="exampleFormControlTextarea1" placeholder="Your Messgae..." rows="3"></textarea>
            @error('message')
                      <span class="invalid-feedback">
                          {{$message}}
                      </span>
                     @enderror
             </div>

            <button type="submit" class="btn center mt-4" style="background: #010080;border-radius: 8px; color: white;font-size: 14px; height: 50px;width: 163px;background-color: #EF4B23;">Submit</button>
          </form>
          </div>
        </div>
        <div class="col-md-2"></div>
       </div>
  </div>
</section>

<section>
  <div class="container story mt-5">
       <div class="what-do text-center">
           <p class="text-center">GIVE US A CALL</p>
           <div class="line center"></div>
         </div>

         <div class="text-center mt-4 person">
           <p>More of a phone person?</p>
         </div>

         <div class="text-center mt-5 general">
           <p>GENERAL INQUIRIES: (111) 222-3333</p><p class="mt-4"> BUSINESS DEVELOPMENT: (111) 222-3333</p>
         </div>

         <div class="row mt-5">
          <div class="col-md-2"></div>
           <div class="col-md-3 py-5">
              <div class="what-do text-center">
           <p class="text-center">SEND EMAIL</p>
           <div class="line center"></div>
         </div>

           <div class="text-center mt-4 person">
           <p>Get in touch for more business inquries</p>
         </div>

          <div class="text-center mt-4 person">
           <p>info@clickeats.com.au marketing@clickeats.com.au sales@clickeats.com.au</p>
         </div>

           </div>

           <div class="col-md-2"></div>

            <div class="col-md-3 py-5">
              <div class="what-do text-center">
           <p class="text-center">COME BY</p>
           <div class="line center"></div>
         </div>

           <div class="text-center mt-4 person">
           <p>Head Office</p>
         </div>
           <div class="text-center mt-4 person">
           <p>97845 Baker st. 567 Los Angeles - US</p>
         </div>

           </div>

           <div class="col-md-2"></div>
         </div>
        
    </div>
</section>
@stop


   



   
     


    