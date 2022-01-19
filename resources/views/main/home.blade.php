@extends('layouts.click-eat-main.master')
@section('title')
Home
@stop
@section('content')

   <div style="padding:0px; margin:0px; background-color:#fff;font-family:arial,helvetica,sans-serif,verdana,'Open Sans'">

    <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Composer -->
    <!-- Source: https://www.jssor.com/demos/full-width-slider.slider/=edit -->
    <script src="js/jssor.slider-28.1.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        window.jssor_1_slider_init = function() {

            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,ls:0.5},{b:0,d:1000,y:5,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:200,d:1000,y:25,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:400,d:1000,y:45,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:600,d:1000,y:65,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:800,d:1000,y:85,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:500,d:1000,y:195,e:{y:6}}],
              [{b:0,d:2000,y:30,e:{y:3}}],
              [{b:-1,d:1,rY:-15,tZ:100},{b:0,d:1500,y:30,o:1,e:{y:3}}],
              [{b:-1,d:1,rY:-15,tZ:-100},{b:0,d:1500,y:100,o:0.8,e:{y:3}}],
              [{b:500,d:1500,o:1}],
              [{b:0,d:1000,y:380,e:{y:6}}],
              [{b:300,d:1000,x:80,e:{x:6}}],
              [{b:300,d:1000,x:330,e:{x:6}}],
              [{b:-1,d:1,r:-110,sX:5,sY:5},{b:0,d:2000,o:1,r:-20,sX:1,sY:1,e:{o:6,r:6,sX:6,sY:6}}],
              [{b:0,d:600,x:150,o:0.5,e:{x:6}}],
              [{b:0,d:600,x:1140,o:0.6,e:{x:6}}],
              [{b:-1,d:1,sX:5,sY:5},{b:600,d:600,o:1,sX:1,sY:1,e:{sX:3,sY:3}}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $LazyLoading: 1,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 20,
                $SpacingY: 20
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1600;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,regular,italic,700,700italic&subset=latin-ext,greek-ext,cyrillic-ext,greek,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
    <style>
        /* jssor slider loading skin spin css */
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        /*jssor slider bullet skin 132 css*/
        .jssorb132 {position:absolute;}
        .jssorb132 .i {position:absolute;cursor:pointer;}
        .jssorb132 .i .b {fill:#fff;fill-opacity:0.8;stroke:none;stroke-width:1600;stroke-miterlimit:10;stroke-opacity:0.7;}
        .jssorb132 .i:hover .b {fill:#000;fill-opacity:.7;stroke:#fff;stroke-width:2000;stroke-opacity:0.8;}
        .jssorb132 .iav .b {fill:#EF4B23;stroke:none;stroke-width:2400;fill-opacity:0.8;stroke-opacity:1;}
        .jssorb132 .i.idn {opacity:0.3;}

        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>
    <svg viewbox="0 0 0 0" width="0" height="0" style="display:block;position:relative;left:0px;top:0px;">
        <defs>
            <filter id="jssor_1_flt_1" x="-50%" y="-50%" width="200%" height="200%">
                <feGaussianBlur stddeviation="4"></feGaussianBlur>
            </filter>
            <radialGradient id="jssor_1_grd_2">
                <stop offset="0" stop-color="#fff"></stop>
                <stop offset="1" stop-color="#000"></stop>
            </radialGradient>
            <mask id="jssor_1_msk_3">
                <path fill="url(#jssor_1_grd_2)" d="M600,0L600,400L0,400L0,0Z" x="0" y="0" style="position:absolute;overflow:visible;"></path>
            </mask>
        </defs>
    </svg>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1600px;height:560px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="{{ asset('main-assets/img/images/spin.svg')}}" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1600px;height:560px;overflow:hidden;">
            
        @if(count($data['sliders']))
        @foreach($data['sliders'] as $s)    
        <div style="background-color:#d3890e;">
                <img data-u="image" data-src="{{ asset('images/'.$s->name)}}" />
                <div data-ts="flat" data-p="275" data-po="40% 50%" style="left:150px;top:40px;width:800px;height:300px;position:absolute;">   
                </div>
            </div>
            @endforeach
        @else   
        <div style="background-color:#d3890e;">
                <img data-u="image" data-src="{{ asset('images/1639031543.jpg')}}" />
                <div data-ts="flat" data-p="275" data-po="40% 50%" style="left:150px;top:40px;width:800px;height:300px;position:absolute;">
                </div>
            </div>
            @endif  
        
            
        </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">slider html</a>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb132" style="position:absolute;bottom:24px;right:16px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:20px;height:20px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();
    </script>
    <!-- #endregion Jssor Slider End -->
</div>


      <div class="container story mt-5">
       <div class="what-do">
        <div class="text-center">
           <p class="text-center">WE UNDERSTAND HOSPITALITY</p>
         </div>
          <div class="text-center">
           <p class="text-center">+</p>
         </div>

          <div class="text-center">
           <p class="text-center">REQUIREMENTS OF AUSTRALIAN MARKET</p>
         </div>
           <div class="line center"></div>
         </div>
         <div class="text-center solutions mt-5"><p>Our Solutions Increase Efficiency and help manage your Business</p></div>
    </div>
  
  <section>
    <div class="container-custom cards mt-5">
      <div class="row">
        <div class="col-md-4 mt-4">
          <div class="card border-0 pt-5 pb-5" style="background-color: #003e7b;">
            <b class="text-white text-center mt-5">Pickup & Delivery</b>
            <p class="text-white mt-5 text-center">Get the best online ordering system for your business. Small business and enterprise solutions.</p>


            <div class="icons text-center align-items-center">
              <img src="{{ asset('main-assets/img/images/Boost.png')}}" class="ml-3">
            </div>
          </div>
        </div>

        <div class="col-md-4 mt-4">
          <div class="card border-0 pt-5 pb-5" style="background-color: #f4ac40;">
            <b class="text-white text-center mt-5">Table Ordering</b>
            <p class="text-white mt-5 text-center">Customers can now Scan to view your menu on their own device, order and pay the table.</p>
            <br>

            <div class="icons text-center align-items-center" style="background-color: #f1cd96;">
              <img src="{{ asset('main-assets/img/images/Document Large Icon.png')}}" class="ml-3 mb-4">
            </div>
          </div>
        </div>

        <div class="col-md-4 mt-4">
          <div class="card border-0 pt-5 pb-5" style="background-color: #d8d344;">
            <b class="text-white text-center mt-5">Room Service</b>
            <p class="text-white mt-5 text-center man">Smart menus on your guests own mobile device. No app needed, just Scan to order.</p>
<br>
            <!-- <button class="button center border-0 mt-4">
              Read More
            </button> -->

            <div class="icons text-center align-items-center" style="background-color: #f2ee7f;">
              <img src="{{ asset('main-assets/img/images/Link.png')}}" class="ml-3 mb-3">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section style="background-color: #F5F7FA" class="pt-3 pb-5 mt-5 pack">
    <div class="container story mt-5">
       <div class="what-do">
           <p class="text-center">LATEST MARKETING SOLUTIONS TO INCREASE YOUR CUSTOMER BASE</p>
           <div class="line center"></div>
         </div>

         <div class="center image mt-5">
           <img src="{{ asset('main-assets/img/images/Cros.PNG')}}" class="center">
         </div>
         
    </div>
  </section>

 <div class="container story mt-5 pt-4">
       <div class="what-do">
           <p class="text-center">YOU ARE THE BOSS</p>
           <div class="line center"></div>
         </div>
    </div>

    <section>
      <div class="container-custom boss pb-5">
        <div class="row">
        @if(count($data['team']))
        @foreach($data['team'] as $t)
          <div class="col-md-4 mt-5">
            <div class="card border-0">
              <div class="top-img center">
                <img src="{{ asset('/images/'.$t->image)}}">
              </div>

              <div class="card-title center mt-2">
                <b class="text-center center">{{$t->role}}</b>
              </div>
            </div>
          </div>
        @endforeach
        @else
          <div class="col-md-4 mt-5">
            <div class="card border-0">
              <div class="top-img center">
                <img src="{{ asset('main-assets/img/images/boss1.PNG')}}">
              </div>

              <div class="card-title center mt-5">
                <b class="text-center center">Manage Orders with Ease</b>
              </div>
            </div>
          </div>

           <div class="col-md-4 mt-5">
            <div class="card border-0">
              <div class="top-img center">
                <img src="{{ asset('main-assets/img/images/boss.PNG')}}">
              </div>

              <div class="card-title center mt-5">
                <b class="text-center center">Manage Delivery to Provide great experience</b>
              </div>
            </div>
          </div>

           <div class="col-md-4 mt-5">
            <div class="card border-0">
              <div class="top-img center">
                <img src="{{ asset('main-assets/img/images/boss2.PNG')}}">
              </div>

              <div class="card-title center mt-5">
                <b class="text-center center">Ensure Happy Customers Come back for more</b>
              </div>
            </div>
          </div>
          @endif
        </div>

         <div class="container story mt-5 pt-5">
       <div class="what-do">
           <p class="text-center">CUSTOMER SUPPORT THE AUSTRALIAN WAY</p>
           <div class="line center"></div>
         </div>
        
        <div class="center mac mt-5">
          <img src="{{ asset('main-assets/img/images/mac.PNG')}}" class="center">
        </div>
    </div>
      </div>
    </section>

    <section style="background-color: #F5F7FA" class="py-5 mt-5 goals">
       <div class="container story mt-5">
       <div class="what-do">
        <div class="text-center">
           <p class="text-center">YOUR GOALS + OUR EXPERTISE = INCREASE IN PROFIT</p>
         </div>
           <div class="line center"></div>
         </div>
         <div class="text-center solutions mt-5"><p>We Understand you are unique and so are your goals, we have variety of ways to help you achieve them</p></div>
    </div>

    <div class="container py-5">
      <div class="row">
        <div class="col-md-4 mt-5">
            <div class="card border-0">
              <div class="top-img center">
                <img src="{{ asset('main-assets/img/images/000e92d4-83f0-4dc7-9698-888c0ff110f6.png')}}">
              </div>

              <div class="card-title center mt-4">
                <b class="text-center center">World Class Online Presence Management</b>
              </div>
            </div>
        </div>

         <div class="col-md-4 mt-5">
            <div class="card border-0">
              <div class="top-img center">
                <img src="{{ asset('main-assets/img/images/27d2727d-aaf0-412a-992f-b2f21ebab81c.png')}}">
              </div>

              <div class="card-title center mt-4">
                <b class="text-center center">Personalized Marketing</b>
              </div>
            </div>
        </div>

         <div class="col-md-4 mt-5">
            <div class="card border-0">
              <div class="top-img center">
                <img src="{{ asset('main-assets/img/images/249ade6f-1c82-43e1-89a2-4ca40c5dda28.png')}}">
              </div>

              <div class="card-title center mt-4">
                <b class="text-center center">More Money in your Pocket</b>
              </div>
            </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2"></div>  
          <div class="col-md-4 mt-5">
            <div class="card border-0">
              <div class="top-img center">
                <img src="{{ asset('main-assets/img/images/03a7f5ec-7402-4a2a-8d97-c414eaf75c16.png')}}">
              </div>

              <div class="card-title center mt-4">
                <b class="text-center center">Be Better via Increased Efficiency</b>
              </div>
            </div>
        </div>

        <div class="col-md-4 mt-5">
            <div class="card border-0">
              <div class="top-img center">
                <img src="{{ asset('main-assets/img/images/c3607941-181d-4c16-9c95-e948b31e767e.png')}}">
              </div>

              <div class="card-title center mt-4">
                <b class="text-center center">Create Loyalty</b>
              </div>
            </div>
        </div>

        <div class="col-md-2"></div>
      </div>
    </div>
    </section>
  

  <section class="py-5 cafe">
     <div class="container story py-3">
       <div class="what-do">
           <p class="text-center">HOW IT WORK</p>
           <div class="line center"></div>
         </div>
         <div class="text-center well mt-5 pb-3"><p>Online Cafe & Food Ordering System Australia</p></div>
         <div class="img center mt-5 justify-content-center">
           <div class="align-items-center play-btn">
          <i class="fa fa-play" aria-hidden="true"></i>
          </div>
           <img src="{{ asset('main-assets/img/images/pexels-sam-lion-5710198.jpg')}}">

           <div class="layer"></div>
           
         </div>
    </div>


  </section>

  <section style="background-color: #F5F7FA;" class="book pt-3 pb-5">
     <div class="container story mt-5">
       <div class="what-do">
           <p class="text-center">BOOK A CONSULTATION</p>
           <div class="line center"></div>
         </div>
         <div class="text-center well mt-5"><p>Get in touch for business inquiries</p></div>

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
                     <input type="text" name="business_name" class="form-control @error('business_name') is-invalid @enderror" value="{{old('business_name')}}" placeholder="Business Name">
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
  @stop



   
     


   