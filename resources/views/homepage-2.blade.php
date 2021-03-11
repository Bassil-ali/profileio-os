<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>TRISONILE GLOBAL</title>
        <meta name="author" content="TheShahriyar">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#fe4157">
        <link rel="shortcut icon" href="{{asset('assets/images/logo/362.png')}}">


        @if (app()->getLocale() == 'ar')
        <style>

                @font-face {
                font-family: 'NotoKufiArabic';
                font-weight: 400;
                font-display: swap;
                src: url('assets/fonts/NotoKufiArabic.woff2') format('woff2');
            }
            body, h1, h2, h3, h4, h5, h6 ,p,a{
                font-family: 'NotoKufiArabic';
            }
        </style>

       @endif

       <style>
           .slid{
               width: 100%;
               height: 150px;
           }
           .centered {
           
            top: 35%;
            left: 50%;    
           }
          .bold{
            font-weight: 1000;
          }

          @media only screen and (main-width: 992px) {

            .logo{
              margin-top: 5px;
            }
          }
       </style>

       <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('assets/css/rev_slider/settings.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/rev_slider/layers.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/rev_slider/navigation.css')}}">
        <!-- fontawesome css -->
        <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
        <!-- ET Lineicon CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/lineicon.css')}}">
        <!-- Light Box CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/lightbox.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">

        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/owl.theme.css')}}">

        <!-- theme style css -->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <!-- responsive css -->
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
        <!-- all stylesheets include end -->
    </head>
    <body>
    <div id="container">
        <header class="clearfix" id="header">
            <!-- Static navbar -->
            <nav class="navbar navbar-default dark-color">
                 
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <br>
                        <img style="vertical-align: super;" width="100px"  src="{{asset('assets/images/logo/362.png')}}">
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="drop"><a  href="">@lang('site.home')</a>
                            </li>
                            <li class="drop"><a  data-scroll href="#3services">@lang('site.services')</a>
                            </li>
                            <li class="drop"><a  data-scroll href="#3about">@lang('site.about')</a>
                            </li>
                            <li class="drop"><a data-scroll href="#3ourwork">@lang('site.ourwork')</a>
                            </li>
                           
                            <li class="drop"><a  data-scroll href="#3contact">@lang('site.contact')</a>
                            </li>
                            <li ><a  class="active" href="https://www.china.trisoline.com" target="_blank">@lang('site.china_branch')</a>
                            </li>
                            <li ><a class="active"  href="https://www.turkey.trisoline.com" target="_blank">@lang('site.torkey')</a>
                            </li>
                            <li class="dropdown tasks-menu">
                                
                                     @if (App::getLocale() == 'ar')
                                     <a rel="alternate"  href="{{ LaravelLocalization::getLocalizedURL('en') }}">
                                        ENGLISH
                                    </a>
                                  
                                    @else
                                    <a rel="alternate"  href="{{ LaravelLocalization::getLocalizedURL('ar') }}">
                                     العربية
                                    </a>
                                    
                                    @endif</a>
                               
                            </li>
                    </div>
                </div>
            </nav>
        </header>
@if (session()->has('success'))
<div class="container">
<br>
<div class="alert alert-success" role="alert">
   @if(app()->getLocale() == 'ar' &&  session()->get('success')== 'send successfully')
    <center><p>تم ارسال الرسالة بنجاح</p></center>
   @else
   <center><p>{{ session()->get('success') }}</p></center>
    @endif
</div>
</div>
@endif      
        <div id="myCarousel" class="carousel slide z-depth-1-half" data-ride="carousel">
            <!-- Indicators -->
            
            <div class="carousel-inner">
            
              @foreach($headers as $header)
              <div class="item   @if($header->id ==1 ) active @endif">
                <img class="slid ovelflow " style="height: 100vh; " src="{{ $header->image_path }}"  >
                <div    class="container">
                    <center>
                  <div class="carousel-caption centered text">
                     
                    <h1 style="color: #fe4157" >{{ $header->address }}</h1>
                    <p class="bold" style="color: rgb(255, 255, 255)">{!! $header->text !!}</p>
                  </div>
                    </center>
                </div>
              </div>
              @endforeach
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="icon-next"></span>
            </a>  
          </div>  
        </div>  
    <div>
</div>
<!-- Start Service Section -->
        <section class="pad-t100 pad-b70"  id="3services">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div  class="section-title text-center">
                            <h3 style="font-size: 1.5em;"  class="title">@lang('site.service_we')</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="services" class="col-md-12">
                        <div  class="max-tab" id="max-tab">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#tab1" role="tab" data-toggle="tab" aria-expanded="false">
                                        <i class="fa fa-ship"></i>
                                    </a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#tab2" role="tab" data-toggle="tab" aria-expanded="false">
                                        <i class="fa fa-briefcase"></i>
                                    </a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#tab3" role="tab" data-toggle="tab" aria-expanded="false">
                                        <i class="fa fa-users"></i>
                                    </a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#tab4" role="tab" data-toggle="tab" aria-expanded="false">
                                        <i class="fa fa-commenting"></i>
                                    </a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#tab5" role="tab" data-toggle="tab" aria-expanded="false">
                                        <i class="fa fa-handshake-o"></i>
                                    </a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#tab6" role="tab" data-toggle="tab" aria-expanded="true">
                                        <i class="fa fa-life-ring"></i>
                                    </a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- Start Tab Content 1 -->
                                @foreach($services as $service)
                                <div role="tabpanel" class="tab-pane active" id="tab1">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="template-image mbl-mar-bottom">
                                                <img style="border-radius: 3px" src="{{asset('uploads/product_images/' . $service->image1)}}" class="img-responsive" alt="Revenue">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="tab-text">
                                                <h4>{{ $service->address1}}</h4>
                                                <p>{!! $service->text1 !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Tab Content 2 -->
                                <div role="tabpanel" class="tab-pane" id="tab2">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="template-image mbl-mar-bottom">
                                                <img style="border-radius: 3px" src="{{asset('uploads/product_images/' . $service->image2)}}" class="img-responsive" alt="Revenue">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="tab-text">
                                                <h4>{{ $service->address2}}</h4>
                                                <p>{!! $service->text2 !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Tab Content 3 -->
                               
                                <div role="tabpanel" class="tab-pane" id="tab3">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="template-image mbl-mar-bottom">
                                                <img style="border-radius: 3px" src="{{asset('uploads/product_images/' . $service->image3)}}" class="img-responsive" alt="Revenue">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="tab-text">
                                                <h4>{{ $service->address3}}</h4>
                                                <p>{!! $service->text3 !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Tab Content 4 -->
                                <div role="tabpanel" class="tab-pane" id="tab4">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="template-image mbl-mar-bottom">
                                                <img style="border-radius: 3px" src="{{asset('uploads/product_images/' . $service->image4)}}" class="img-responsive" alt="Revenue">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="tab-text">
                                                <h4>{{ $service->address4}}</h4>
                                                <p>{!! $service->text4 !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Tab Content 5 -->
                                <div role="tabpanel" class="tab-pane" id="tab5">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="template-image mbl-mar-bottom">
                                                <img style="border-radius: 3px" src="{{asset('uploads/product_images/' . $service->image5)}}" class="img-responsive" alt="Revenue">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="tab-text">
                                                <h4>{{ $service->address5}}</h4>
                                                <p>{!! $service->text5 !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Tab Content 6 -->
                                <div role="tabpanel" class="tab-pane" id="tab6">
                                    <div class="row">
                                        
                                        <div class="col-md-6 col-sm-6">
                                            <div class="template-image mbl-mar-bottom">
                                                <img style="border-radius: 3px" src="{{asset('uploads/product_images/' . $service->image6)}}" class="img-responsive" alt="Revenue">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="tab-text">
                                                <h4>{{ $service->address6}}</h4>
                                                <p>{!! $service->text6 !!}</p>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    @endforeach
                                   
                                </div>
                                <div ></div>
                            </div>
                                <!-- End Tab Content 7 -->
                            </div>

                        </div>
                    </div>
                </div>
                <div id="3about" ></div>
            </div>
        </section>
       
         <section class="pad80" >
            
            <div class="container">
                <div class="row">
                    <div class="col-md-12" >
                        <div class="section-title text-center">
                            <h3 style="font-size: 1.5em;" >@lang('site.about_us')</h3>
                        </div>
                        @foreach($abouts as $about)
                       <center> <p style="width: 70%">{!! $about->text !!}</p></center>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="feature-box">
                            <li>
                                <div class="feature-2 br text-center">
                                    <img src="{{asset('assets/images/others/map.png')}}" alt="">
                                    <a href="#"><h4>{!! $about->address_1 !!}</h4></a>
                                    <p>{!! $about->section_1 !!}</p>
                                </div>
                            </li>
                            <li>
                                <div class="feature-2 br text-center">
                                    <img src="{{asset('assets/images/others/map.png')}}" alt="">
                                    <a href="#"><h4>{!! $about->address_2 !!}</h4></a>
                                    <p>{!! $about->section_2 !!}</p>
                                </div>
                            </li>
                            <li>
                                <div class="feature-2 text-center">
                                    <img src="{{asset('assets/images/others/map.png')}}" alt="">
                                    <a href="#"><h4>{!! $about->address_3 !!}</h4></a>
                                    <p>{!! $about->section_3 !!}</p>
                                </div>
                            </li>
                            <li>
                                <div class="feature-2 br bt text-center">
                                    <img src="{{asset('assets/images/others/map.png')}}" alt="">
                                    <a href="#"><h4>{!! $about->address_4 !!}</h4></a>
                                    <p>{!! $about->section_4 !!}</p>
                                </div>
                            </li>
                            <li>
                                <div class="feature-2 br bt text-center">
                                    <img src="{{asset('assets/images/others/map.png')}}" alt="">
                                    <a href="#"><h4>{!! $about->address_5 !!}</h4></a>
                                    <p>{!! $about->section_5 !!}</p>
                                </div>
                            </li>
                            <li>
                                <div class="feature-2 bt text-center">
                                    <img src="{{asset('assets/images/others/map.png')}}" alt="">
                                    <a href="#"><h4>{!! $about->address_6 !!}</h4></a>
                                    <p>{!! $about->section_6 !!}</p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div><div ></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pad-t100 pad-b70"id="3ourwork"  >
            <div class="container">
                <div class="row">
                    <div class="col-md-12" >
                        <div class="section-title text-center">
                            <h3 style="font-size: 1.5em;">@lang('site.ourwork_us')</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($ourworks as $ourwork)
                    <div class="col-md-4 col-sm-4">
                        <div class="team-member-1">
                            <div> 
                                <img width="100%" style="height: 300px" class="img-responsive" src="{{ $ourwork->image_path }}" alt="">
                            </div>
                            <div class="team-info">
                                <div class="team-name">{{ $ourwork->address}}</div>
                            </br>
                                <p>{!! $ourwork->text !!}</p>
                            </div>
                        </div>
                        </div>
                        @endforeach
                      </div>
                    </div>
                </div>
                <div id="3contact"></div><br><br> <br>
            </div>
         </section>
        <div  class="container" >
            <div class="section-title text-center"  >
            <h3  style="font-size: 1.5em;"  class="text-center text-uppercase">@lang('site.contact')</h3>
            </div>
            @foreach($contacts as $contact)
            <center><p style="width: 60%;" class="text-center w-75 m-auto">{!! $contact->address!!}</p></center>
            <div class="row ">
              </br></br>
              <div class="section-title text-center">
               <h3  style="font-size: 1.5em;" class="text-center text-uppercase">@lang('site.china')</h3>
              </div></br>
              <div class="col-sm-12 col-md-6 col-lg-4 my-5">
                <div class="card border-0">
                   <div class="card-body text-center">
                     <i style="margin-bottom: 18px" class="fa fa-phone fa-3x mb-3 " aria-hidden="true"></i>
                     <h4 style="margin-bottom: 10px" class="text-uppercase mb-5">@lang('site.contact')</h4>
                     <p>{{ $contact->phone_1 }}</p>
                   </div>
                 </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-4 my-5">
                <div class="card border-0">
                   <div class="card-body text-center">
                     <i style="margin-bottom: 18px" class="fa fa-map-marker fa-3x mb-3" aria-hidden="true"></i>
                     <h4 style="margin-bottom: 10px" class="text-uppercase mb-5">@lang('site.office_log')</h4>
                    <address>{{ $contact->map_1 }}</address>
                   </div>
                 </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-4 my-5">
                <div class="card border-0">
                   <div class="card-body text-center">
                     <i style="margin-bottom: 18px" class="fa fa-globe fa-3x mb-3" aria-hidden="true"></i>
                     <h4 style="margin-bottom: 10px" class="text-uppercase mb-5">@lang('site.email-e')</h4>
                     <p>{{ $contact->email_1 }}</p>
                   </div>
                 </div>
              </div>
            </div>
            <hr style="color: black">
            <div class="row ">
            </br>
            <div class="section-title text-center"></br>
             <h3  style="font-size: 1.5em;" class="text-center text-uppercase">@lang('site.torki')</h3>
            </div></br>
            <div class="col-sm-12 col-md-6 col-lg-4 my-5">
              <div class="card border-0">
                 <div class="card-body text-center">
                   <i style="margin-bottom: 18px" class="fa fa-phone fa-3x mb-3" aria-hidden="true"></i>
                   <h4 style="margin-bottom: 10px" class="text-uppercase mb-5">@lang('site.contact')</h4>
                   <p>{{$contact->phone_2 }}</p>
                 </div>
               </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 my-5">
              <div class="card border-0">
                 <div class="card-body text-center">
                   <i style="margin-bottom: 18px" class="fa fa-map-marker fa-3x mb-3" aria-hidden="true"></i>
                   <h4 style="margin-bottom: 10px" class="text-uppercase mb-5">@lang('site.office_log')</h4>
                  <address>{{$contact->map_2}}</address>
                 </div>
               </div>
            </div>
           
            <div class="col-sm-12 col-md-6 col-lg-4 my-5">
              <div class="card border-0">
                 <div class="card-body text-center">
                   <i style="margin-bottom: 18px" class="fa fa-globe fa-3x mb-3" aria-hidden="true"></i>
                   <h4 style="margin-bottom: 10px" class="text-uppercase mb-5">@lang('site.email-e')</h4>
                   <p>{{ $contact->email_2}}</p>
                 </div>
                 @endforeach
               </div>
            </div>
            
            </div>

<div class="container">
	<div class="row">
        <form id="contact-form"  action="Message" method="GET">

            {{ csrf_field() }}

            {{ method_field('GET') }}

            <div class="col-md-6">
                <div class="md-form ">
                    <br>
                    
                    <input type="text" id="name" name="name" class="form-control" placeholder="your name">
                   
                </div>
            </div>
        </br>
            <div class="col-md-6">
                <div class="md-form ">
                    <input type="text" id="email" name="email" class="form-control" placeholder="email">
                </div>
            </div>
        </br>
            <div class="col-md-6">
                <div class="md-form mb-0">
                    <br>
                    <input type="text" id="subject" name="supject" class="form-control" placeholder="subject">
                </div>
            </div>
        </br>
            <div class="col-md-6">
                <div class="md-form">
                    
                    <textarea style="margin-top: 8px" type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="message"></textarea>
                </div>
            </div>
        </br>
    </form>
    </div><br><br>
    <div class="text-center">
        <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">@lang('site.send_message')</a>
    </div>
    <div class="status"></div>
</div>
<br>
</div>
</div>
</div <div class="alert alert-danger" role="alert">
<strong><center> @include('partials._errors')</center></strong>
</div>
</div>
</div>
</div>
        <section class="footer-section pad-t100 pad-b70 parallax" style="background-image: url({{asset('assets/images/bg/bg2.png')}});">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="section-title-2">
                            <h3>@lang('site.address')</h3>
                        </div>
                        <div class="footer-address">
                            @foreach($footers as $footer)
                            <p>{!! $footer->address!!}</p>
                            <p><span>@lang('site.email-e') :</span> {{ $footer->email}}</p>
                            <p><span>@lang('site.phone') :</span> {{ $footer->phone }}</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                    </div>
                    <div class="col-md-3">
                        <div class="section-title-2">
                            <h3>{{ $footer->company_name }}</h3>
                        </div>
                        <p>{!! $footer->text!!}</p>
                       @endforeach
                       <br>
                        <div class="footer-social">
                            <ul class="top-social">
                                <li><a href="https://www.facebook.com/Trisoline" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/TrisolineGlobal" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/trisoline-global-company-ltd-4a2766191" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="copyright-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright-text text-center">
                            <p> © All Rights Reserved. Developed by <a href="#">TRISONILE GLOBAL</a></p>
                        </div>
                        <div id="back-to-top" class="back-to-top reveal">
                            <img src="assets/images/others/up.png" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="{{asset('assets/js/jquery-3.1.1.min.js')}}"></script>
      
        <!-- bootstrap latest version -->
        <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>

        <!-- revolution slider js files start -->
        <script src="{{asset('assets/js/rev_slider/jquery.themepunch.tools.min.js')}}"></script>
        <script src="{{asset('assets/js/rev_slider/jquery.themepunch.revolution.min.js')}}"></script>
        
        <script src="{{asset('assets/js/rev_slider/extensions/revolution.extension.actions.min.js')}}"></script>
        <script src="{{asset('assets/js/rev_slider/extensions/revolution.extension.carousel.min.js')}}"></script>
        <script src="{{asset('assets/js/rev_slider/extensions/revolution.extension.kenburn.min.js')}}"></script>
        <script src="{{asset('assets/js/rev_slider/extensions/revolution.extension.layeranimation.min.js')}}"></script>
        <script src="{{asset('assets/js/rev_slider/extensions/revolution.extension.migration.min.js')}}"></script>
        <script src="{{asset('assets/js/rev_slider/extensions/revolution.extension.navigation.min.js')}}"></script>
        <script src="{{asset('assets/js/rev_slider/extensions/revolution.extension.parallax.min.js')}}"></script>
        <script src="{{asset('assets/js/rev_slider/extensions/revolution.extension.slideanims.min.js')}}"></script>
        <script src="{{asset('assets/js/rev_slider/extensions/revolution.extension.video.min.js')}}"></script>
        <!-- revolution slider js files end -->
        <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

<!-- Get minor updates and patch fixes within a major version -->
<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15/dist/smooth-scroll.polyfills.min.js"></script>

<!-- Get patch fixes within a minor version -->
<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0/dist/smooth-scroll.polyfills.min.js"></script>

<!-- Get a specific version -->
<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>
<script>
	var scroll = new SmoothScroll('a[href*="#3"]');
    
</script>

        <!-- Other jQuery library -->
        <script src="{{asset('assets/js/jquery.appear.js')}}"></script>
        <script src="{{asset('assets/js/jquery.countTo.js')}}"></script>
        <script src="{{asset('assets/js/jquery.isotope.min.js')}}"></script>
        <script src="{{asset('assets/js/lightbox.js')}}"></script>
        <script src="{{asset('assets/js/owl.carousel.js')}}"></script>
        <script src="{{asset('assets/js/jquery.easypiechart.js')}}"></script>
        <script src="{{asset('assets/js/jquery.mb.YTPlayer.js')}}"></script>
        <script src="{{asset('assets/js/countdown.js')}}"></script>
        <script src="{{asset('assets/js/jquery.fitvids.js')}}"></script>
        

        <!-- template main js file -->
        <script src="{{asset('assets/js/main.js')}}"></script>
        <!-- all js include end -->
    </div>    
    </body>
</html>