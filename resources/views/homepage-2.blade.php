<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>TRISONILE GLOBAL</title>
        <meta name="author" content="TheShahriyar">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:image" content="{{asset('assets/images/logo/logo.png')}}" />
        <meta name="theme-color" content="#fe4157">

        <!-- load google font -->
        @if (app()->getLocale() == 'ar')
        <style>
            body, h1, h2, h3, h4, h5, h6 {
                font-family: 'Cairo', sans-serif !important;
            }
        </style>
       @endif

       {{-- <style>
          .branch{
              
              margin-top: 30px;
              height: 0px;
              border-radius: 3px;
              margin-right: 3px;
              background-color: #fe4157;
          } --}}

       </style>
     
     

        <script>
            var scroll = new SmoothScroll('a[href*="#"]');
        </script>
       
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

        <!-- Start Top Header Section -->
        <section class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <ul class="social-icons">
                            <li><a target="_blank" href="https://www.facebook.com/Trisoline"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank" href="https://twitter.com/TrisolineGlobal"><i class="fa fa-twitter"></i></a></li>
                            <li><a target="_blank" href="https://www.linkedin.com/in/trisoline-global-company-ltd-4a2766191"><i class="fa fa-linkedin"></i></a></li>
                            <li><a target="_blank" href="#"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-7">
                        <div class="contact-info text-right">
                            <li>
                                @foreach($footers as $footer)
                                <i class="fa fa-envelope"></i>
                                <a href="">{{$footer->email}}</a>
                            </li>@endforeach
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Top Header Section -->

        <!-- Start Header & Navigation Section -->
        <header class="clearfix" id="header">
            <!-- Static navbar -->
            <nav class="navbar navbar-default">
                 
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <br>
                        <a class="img-responsive" href=""><img alt="" style="width: 100px;margine-top:20px" src="{{asset('assets/images/logo/362.png')}}"></a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="drop"><a class="active" data-scroll href="#bazinga">@lang('site.home')</a>
                            </li>
                            <li class="drop"><a  data-scroll href="#services">@lang('site.services')</a>
                            </li>
                            <li class="drop"><a  data-scroll href="#about">@lang('site.about')</a>
                            </li>
                            <li class="drop"><a data-scroll href="#ourwork">@lang('site.ourwork')</a>
                            </li>
                           
                            <li class="drop"><a  data-scroll href="#contact">@lang('site.contact')</a>
                            </li>
                            <li ><a  class="active" href="https://www.china.trisoline.com">@lang('site.china_branch')</a>
                            </li>
                            <li ><a class="active"  href="https://www.china.trisoline.com">@lang('site.torkey')</a>
                            </li>
                            <li class="dropdown tasks-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                                     @if (App::getLocale() == 'ar')
                                     English
                                  
                                    @else
                                    العربية
                                    
                                    @endif</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        {{--<!-- inner menu: contains the actual data -->--}}
                                      
                                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                <li>
                                                    <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                       
                                                        {{ $properties['native'] }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        
                                    </li>
                                </ul>
                            </li>
                    </div>
                </div>
            </nav>
        </header>
      
        <div id="myCarousel" class="carousel slide z-depth-1-half" data-ride="carousel">
            <!-- Indicators -->
            
            <div class="carousel-inner">
            <div class="item active">
                <img style="height: 900px;"  src="{{asset('assets/images/logo/slide.jpeg')}}"  >
                <div class="container">
                  <div class="carousel-caption">
                    <h1  style="color: #fe4157">TRISONILE GLOBAL</h1>
                    <p>Trisoline Global is to connect companies with innovative ideas and products to the world markets. For several years, trisoline global has served the world’s markets; trading and delivering products to countries worldwide. We have excellent communicative approach in ENGLISH, ARABIC TURKEY and CHINESE– giving us a diversity of thinking which we believe translates into a greater understanding of our customers, partners and better and more informed decisions. Every day we use our expertise and logistical networks to distribute products around the world, efficiently and responsibly.</p>
                   
                  </div>
                </div>
              </div>
              @foreach($headers as $header)
              <div class="item">
                <img style="height: 900px" src="{{ $header->image_path }}"  >
                <div class="container">
                  <div class="carousel-caption">
                    <h1 style="color: #fe4157" >{{ $header->address }}</h1>
                    <p>{!! $header->text !!}</p>
                    
                  </div>
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


        <!-- Start Service Section -->
        <section class="pad-t100 pad-b70" id="#services" >
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="services" class="section-title text-center">
                            <h3>@lang('site.service_we')</h3>
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
                                        <i class="fa fa-joomla"></i>
                                    </a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#tab2" role="tab" data-toggle="tab" aria-expanded="false">
                                        <i class="fa fa-wordpress"></i>
                                    </a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#tab3" role="tab" data-toggle="tab" aria-expanded="false">
                                        <i class="fa fa-codepen"></i>
                                    </a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#tab4" role="tab" data-toggle="tab" aria-expanded="false">
                                        <i class="fa fa-desktop"></i>
                                    </a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#tab5" role="tab" data-toggle="tab" aria-expanded="false">
                                        <i class="fa fa-file-code-o"></i>
                                    </a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#tab6" role="tab" data-toggle="tab" aria-expanded="true">
                                        <i class="fa fa-cubes"></i>
                                    </a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- Start Tab Content 1 -->
                                @foreach($services as $service)
                                <div role="tabpanel" class="tab-pane active" id="tab1">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="tab-text">
                                               
                                               <center>
                                                <h3>{{ $service->address1}}</h3>   
                                                <p style="width: 70%">{!! $service->text1 !!}</p></center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Tab Content 2 -->
                                <div role="tabpanel" class="tab-pane" id="tab2">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="tab-text">
                                               
                                               <center>
                                                <h3>{{ $service->address2}}</h3>     
                                                <p style="width: 70%">{!! $service->text2 !!}</p></center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Tab Content 3 -->
                               
                                <div role="tabpanel" class="tab-pane" id="tab3">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="tab-text">
                                               
                                               <center>
                                                <h3>{{ $service->address3}}</h3>     
                                                <p style="width: 70%">{!! $service->text3 !!}</p></center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Tab Content 4 -->
                                <div role="tabpanel" class="tab-pane" id="tab4">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="tab-text">
                                               
                                               <center> 
                                                <h3>{{ $service->address4}}</h3>     
                                                <p style="width: 70%">{!! $service->text4!!}</p></center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Tab Content 5 -->
                                <div role="tabpanel" class="tab-pane" id="tab5">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="tab-text">
                                               
                                               <center> 
                                                <h3>{{ $service->address5}}</h3>     
                                                <p style="width: 70%">{!! $service->text5 !!}</p></center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Tab Content 6 -->
                                <div role="tabpanel" class="tab-pane" id="tab6">
                                    <div class="row">
                                        
                                        <div class="col-md-12 col-sm-12">
                                            <div class="tab-text">
                                               
                                               <center> 
                                                <h3>{{ $service->address6}}</h3>     
                                                <p style="width: 70%">{!! $service->text6 !!}</p></center>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <!-- End Tab Content 7 -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Service Section -->
        <!-- Start Service Section -->
         <section class="pad80">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" >
                        <div class="section-title text-center">
                            <h3 id="about">@lang('site.about_us')</h3>
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
                                    <img src="{{asset('assets/images/others/shopping-cart.png')}}" alt="">
                                    <a href="#"><h4></h4></a>
                                    <p>{!! $about->section_1 !!}</p>
                                </div>
                            </li>
                            <li>
                                <div class="feature-2 br text-center">
                                    <img src="{{asset('assets/images/others/zoom-out.png')}}" alt="">
                                    <a href="#"><h4></h4></a>
                                    <p>{!! $about->section_2 !!}</p>
                                </div>
                            </li>
                            <li>
                                <div class="feature-2 text-center">
                                    <img src="{{asset('assets/images/others/idea.png')}}" alt="">
                                    <a href="#"><h4></h4></a>
                                    <p>{!! $about->section_3 !!}</p>
                                </div>
                            </li>
                            <li>
                                <div class="feature-2 br bt text-center">
                                    <img src="{{asset('assets/images/others/bar-chart.png')}}" alt="">
                                    <a href="#"><h4></h4></a>
                                    <p>{!! $about->section_4 !!}</p>
                                </div>
                            </li>
                            <li>
                                <div class="feature-2 br bt text-center">
                                    <img src="{{asset('assets/images/others/map.png')}}" alt="">
                                    <a href="#"><h4></h4></a>
                                    <p>{!! $about->section_5 !!}</p>
                                </div>
                            </li>
                            <li>
                                <div class="feature-2 bt text-center">
                                    <img src="{{asset('assets/images/others/chat.png')}}" alt="">
                                    <a href="#"><h4></h4></a>
                                    <p>{!! $about->section_6 !!}</p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Service Section -->
        <section class="pad-t100 pad-b70" >
            <div class="container">
                <div class="row">
                    <div class="col-md-12" >
                        <div class="section-title text-center">
                            <h3 id="ourwork">@lang('site.ourwork_us')</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($ourworks as $ourwork)
                    <div class="col-md-4 col-sm-4">
                        <div class="team-member-1">
                            <div>
                                <img class="img-responsive" src="{{ $ourwork->image_path }}" alt="">
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
        </section>
  
        <!-- Start Team Member Section -->
        <div class="container" >
            <div class="section-title text-center"  >
            <h3  id="contact" class="text-center text-uppercase">@lang('site.contact')</h3>
            </div>
            @foreach($contacts as $contact)
            <center><p style="width: 60%;" class="text-center w-75 m-auto">{!! $contact->address!!}</p></center>
            
            <div class="row ">

              </br></br>
              <div class="section-title text-center">
               <h3 class="text-center text-uppercase">@lang('site.china')</h3>
              </div></br>
              <div class="col-sm-12 col-md-6 col-lg-4 my-5">
                <div class="card border-0">
                   <div class="card-body text-center">
                     <i class="fa fa-phone fa-5x mb-3" aria-hidden="true"></i>
                     <h4 class="text-uppercase mb-5">@lang('site.contact')</h4>
                     <p>{{ $contact->phone_1 }}</p>
                   </div>
                 </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-4 my-5">
                <div class="card border-0">
                   <div class="card-body text-center">
                     <i class="fa fa-map-marker fa-5x mb-3" aria-hidden="true"></i>
                     <h4 class="text-uppercase mb-5">@lang('site.office_log')</h4>
                    <address>{{ $contact->map_1 }}</address>
                   </div>
                 </div>
              </div>
             
              <div class="col-sm-12 col-md-6 col-lg-4 my-5">
                <div class="card border-0">
                   <div class="card-body text-center">
                     <i class="fa fa-globe fa-5x mb-3" aria-hidden="true"></i>
                     <h4 class="text-uppercase mb-5">@lang('site.email-e')</h4>
                     <p>{{ $contact->email_1 }}</p>
                   </div>
                 </div>
              </div>

              
            </div>
            <div class="row ">

            </br>
            <div class="section-title text-center"></br>
             <h3 class="text-center text-uppercase">@lang('site.torki')</h3>
            </div></br>
            <div class="col-sm-12 col-md-6 col-lg-4 my-5">
              <div class="card border-0">
                 <div class="card-body text-center">
                   <i class="fa fa-phone fa-5x mb-3" aria-hidden="true"></i>
                   <h4 class="text-uppercase mb-5">@lang('site.contact')</h4>
                   <p>{{$contact->phone_2 }}</p>
                 </div>
               </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 my-5">
              <div class="card border-0">
                 <div class="card-body text-center">
                   <i class="fa fa-map-marker fa-5x mb-3" aria-hidden="true"></i>
                   <h4 class="text-uppercase mb-5">@lang('site.office_log')</h4>
                  <address>{{$contact->map_2}}</address>
                 </div>
               </div>
            </div>
           
            <div class="col-sm-12 col-md-6 col-lg-4 my-5">
              <div class="card border-0">
                 <div class="card-body text-center">
                   <i class="fa fa-globe fa-5x mb-3" aria-hidden="true"></i>
                   <h4 class="text-uppercase mb-5">@lang('site.email-e')</h4>
                   <p>{{ $contact->email_2}}</p>
                 </div>
                 @endforeach
               </div>
            </div></br></br></br>
       
                <form id="contact-form"  action="Message" method="POST">

                    {{ csrf_field() }}
                    {{ method_field('post') }}
               

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="name" class="">@lang('site.name-e')</label>
                            <input type="text" id="name" name="name" class="form-control">
                           
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="email" class="" >@lang('site.email-e')</label>

                            <input type="text" id="email" name="email" class="form-control">
                        </div>
                    </div>
                    <!--Grid column-->

               
                <!--Grid row-->

                <!--Grid row-->
               
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="supject" class="">@lang('site.subject')</label>

                            <input type="text" id="subject" name="supject" class="form-control">
                        </div>
                    </div>
              
                <!--Grid row-->

                <!--Grid row-->
               

                    <!--Grid column-->
                    <div class="col-md-6">

                        <div class="md-form">
                            <label for="message">@lang('site.message')</label>

                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                        </div>

                    </div>
              
                <!--Grid row-->

            </form>
            </div><br>
            

            <div class="text-center">
                
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">@lang('site.send_message')</a>
            </div>
            <div class="status"></div>
        </div>
    </br>

            </div>
        </div>
    </div <div class="alert alert-danger" role="alert">
        <strong><center> @include('partials._errors')</center></strong>
    </div></div>

     
        @if (session()->has('success'))
           <div class="alert alert-success" role="alert">
               @if(app()->getLocale() == 'ar' &&  session()->get('success')== 'send successfully')

                <center><p>تم ارسال الرسالة بنجاح</p></center>
               @else
               <center><p>{{ session()->get('success') }}</p></center>
                @endif
            </div>
        @endif
    
       
          
        <!-- End Team Member Section -->



        <!-- Start Footer & Copyright Section -->
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
                        {{-- <h4>Useful Links</h4>
                        <ul>
                            <li class="menu-active"><a href="#intro">Home</a></li>
                            <li><a href="#about">About Us</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#portfolio">Portfolio</a></li>
    
                            <li><a href="#contact">Contact</a></li>
                        </ul> --}}
                    </div>
                    <div class="col-md-3">
                        <div class="section-title-2">
                            <h3>{{ $footer->company_name }}</h3>
                        </div>
                        <p>{!! $footer->text!!}</p>
                       @endforeach
                        <div class="footer-social">
                            <ul class="top-social">
                                <li><a href="https://www.facebook.com/Trisoline" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/TrisolineGlobal" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                {{-- <li><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li> --}}
                                <li><a href="https://www.linkedin.com/in/trisoline-global-company-ltd-4a2766191" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                {{-- <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Footer & Copyright Section -->

        <!-- Start  Copyright Section -->
        <section class="copyright-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright-text text-center">
                            <p> © All Rights Reserved. Developed by <a href="#">TRISONILE GLOBAL</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Copyright Section -->

        <div id="back-to-top" class="back-to-top reveal">
            <img src="{{asset('assets/images/others/up.png')}}" alt="" class="img-responsive">
        </div>


        <!-- Start Switcher Section -->
        <div class="switcher-box">
            <a href="#" class="open-switcher show-switcher"><i class="fa fa-cog fa-2x"></i></a>
            <h4>Style Switcher</h4>
            <span>Layout Style</span>
            <select id="layout-style" class="layout-style">
                <option value="1">Wide</option>
                <option value="2">Boxed</option>
            </select>
            <span>Patterns for Boxed Version</span>
            <ul class="bg-list">
                <li>
                    <a href="#" class="bg1"></a>
                </li>
                <li>
                    <a href="#" class="bg2"></a>
                </li>
                <li>
                    <a href="#" class="bg3"></a>
                </li>
                <li>
                    <a href="#" class="bg4"></a>
                </li>
                <li>
                    <a href="#" class="bg5"></a>
                </li>
                <li>
                    <a href="#" class="bg6"></a>
                </li>
                <li>
                    <a href="#" class="bg7"></a>
                </li>
                <li>
                    <a href="#" class="bg8"></a>
                </li>
                <li>
                    <a href="#" class="bg9"></a>
                </li>
                <li>
                    <a href="#" class="bg10"></a>
                </li>
                <li>
                    <a href="#" class="bg11"></a>
                </li>
                <li>
                    <a href="#" class="bg12"></a>
                </li>
                <li>
                    <a href="#" class="bg13"></a>
                </li>
                <li>
                    <a href="#" class="bg14"></a>
                </li>
            </ul>
        </div>
        <!-- End Switcher Section -->
        
        

        <!-- all js include start -->
        <!-- jquery latest version -->
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
	var scroll = new SmoothScroll('a[href*="#"]');
    
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