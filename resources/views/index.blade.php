<!doctype html>
<!--
	Solution by GetTemplates.co
	URL: https://gettemplates.co
-->
<html dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- awesone fonts css-->
    <!-- owl carousel css-->
    <!-- Bootstrap CSS -->
    @if (app()->getLocale() == 'ar')
    <link 
    rel="stylesheet"
    href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css"
    integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If"
    crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('h2s/owl-carousel/assets/owl.carousel-rtl.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('h2s/css/style-rtl2.css') }}">
    @else
    <link rel="stylesheet" href="{{ asset('h2s/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('h2s/owl-carousel/assets/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('h2s/css/style.css') }}">
    @endif
    <link rel="stylesheet" href="{{ asset('h2s/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('h2s/css/hover-min.css') }}">
    <link rel="stylesheet" href="{{ asset('h2s/css/animate.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">


    <title>H2S </title>
    <style>

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent" id="gtco-main-nav">
        <div class="container"><a class="navbar-brand hvr-grow" href="#">
            <img src="{{ asset('h2s/images/logolast.jpg') }}" class="img-circle" width="120" height="45" alt="">
        </a>
            <button class="navbar-toggler" data-target="#my-nav" onclick="myFunction(this)" data-toggle="collapse"><span
                    class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span></button>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" >@lang('site.home')</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">@lang('site.services')</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">@lang('site.about')</a></li>
                    <li class="nav-item"><a class="nav-link" href="#work">@lang('site.ourproducts')</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">@lang('site.contact')</a></li>
       
                    <li class="nav-item dropdown">
                                        
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flag-icon flag-icon"> </span> @lang('site.language')</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown09">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                               @if($localeCode=='en')

                                <a class="dropdown-item" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"><span class="flag-icon flag-icon-us"> </span>  {{ $properties['native'] }}</a>
                                @elseif($localeCode=='ar')

                                <a class="dropdown-item" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"><span class="flag-icon flag-icon-tn"> </span>  {{ $properties['native'] }}</a>
                                @else
                                <a class="dropdown-item" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"><span class="flag-icon flag-icon-{{ $localeCode }}"> </span>  {{ $properties['native'] }}</a>
                                @endif

                            @endforeach

                            </div>
                    </li>
                </ul>
             
            </div>
        </div>
    </nav>
    <div class="container-fluid gtco-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ">
                    <h1> @lang('site.hometitle')
                    </h1>
                    <p> @lang('site.homebady')</p>
                    <a href="#contact">@lang('site.contact')<i class="fa fa-angle-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}" aria-hidden="true"></i></a>
                </div>
                <div class="col-md-6">
                    <div class="card >
                        <img class="card-img-top img-fluid" src="{{ asset('h2s/images/banner-img.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid gtco-feature" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="cover">
                        <div class="card ">
                            <svg class="back-bg " width="100%" viewBox="0 0 900 700"
                                style="position:absolute; z-index: -1">
                                <defs>
                                    <linearGradient id="PSgrad_01" x1="64.279%" x2="0%" y1="76.604%" y2="0%">
                                        <stop offset="0%" stop-color="rgb(1,230,248)" stop-opacity="1" />
                                        <stop offset="100%" stop-color="rgb(29,62,222)" stop-opacity="1" />
                                    </linearGradient>
                                </defs>
                                <path fill-rule="evenodd" opacity="0.102" fill="url(#PSgrad_01)"
                                    d="M616.656,2.494 L89.351,98.948 C19.867,111.658 -16.508,176.639 7.408,240.130 L122.755,546.348 C141.761,596.806 203.597,623.407 259.843,609.597 L697.535,502.126 C748.221,489.680 783.967,441.432 777.751,392.742 L739.837,95.775 C732.096,35.145 677.715,-8.675 616.656,2.494 Z" />
                            </svg>
                            <!-- *************-->

                            <svg width="100%" viewBox="0 0 700 500">
                                <clipPath id="clip-path">
                                    <path
                                        d="M89.479,0.180 L512.635,25.932 C568.395,29.326 603.115,76.927 590.357,129.078 L528.827,380.603 C518.688,422.048 472.661,448.814 427.190,443.300 L73.350,400.391 C32.374,395.422 -0.267,360.907 -0.002,322.064 L1.609,85.154 C1.938,36.786 40.481,-2.801 89.479,0.180 Z">
                                    </path>
                                </clipPath>
                                <!-- xlink:href for modern browsers, src for IE8- -->
                                <image clip-path="url(#clip-path)" xlink:href="{{ asset('h2s/images/learn-img.jpg') }}" width="100%"
                                    height="465" class="svg__image"></image>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 ">
                    <h2 style = "text-transform:capitalize;"> @lang('site.about')
                    </h2>
                    <p>
                    @lang('site.abouttext')
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid gtco-features" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 ">
                    <h2 style = "text-transform:capitalize;"> @lang('site.services')</h2>
                    <p>@lang('site.servicestext') </p>
                </div>
                <div class="col-lg-8">
                    <svg id="bg-services" width="100%" viewBox="0 0 1000 800">
                        <defs>
                            <linearGradient id="PSgrad_02" x1="64.279%" x2="0%" y1="76.604%" y2="0%">
                                <stop offset="0%" stop-color="rgb(1,230,248)" stop-opacity="1" />
                                <stop offset="100%" stop-color="rgb(29,62,222)" stop-opacity="1" />
                            </linearGradient>
                        </defs>
                        <path fill-rule="evenodd" opacity="0.102" fill="url(#PSgrad_02)"
                            d="M801.878,3.146 L116.381,128.537 C26.052,145.060 -21.235,229.535 9.856,312.073 L159.806,710.157 C184.515,775.753 264.901,810.334 338.020,792.380 L907.021,652.668 C972.912,636.489 1019.383,573.766 1011.301,510.470 L962.013,124.412 C951.950,45.594 881.254,-11.373 801.878,3.146 Z" />
                    </svg>
                    <div class="row">
                        <div class="col">
                        @foreach ($services as $index=>$service)

                          @if($index<=(($services->count()/2)-1))
                            <div class="wow slideInDown card text-center hvr-skew">
                                <div class=""> <i class="fa {{$service->icon}} fa-3x"></i></div>
                                <div class="card-body">
                                    <h3 class="card-title">{{$service->name}} </h3>
                                    <p class="card-text"> {!! $service->description !!}</p>
                                </div>
                            </div>
                           @else
                           <div class="wow slideInUp card text-center hvr-skew">
                                <div class="h"> <i class="fa {{$service->icon}} fa-3x"></i>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">{{$service->name}}</h3>
                                    <p class="card-text">{!! $service->description !!}</p>
                                </div>
                            </div>
                           @endif  
                        @endforeach
   
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid gtco-numbers-block">
        <div class="container">
            <svg width="100%" viewBox="0 0 1600 400">
                <defs>
                    <linearGradient id="PSgrad_03" x1="80.279%" x2="0%" y2="0%">
                        <stop offset="0%" stop-color="rgb(250, 133, 64)" stop-opacity="1" />
                        <stop offset="100%" stop-color="rgb(249, 183, 108)" stop-opacity="1" />

                    </linearGradient>

                </defs>
                <!-- <clipPath id="clip-path3">

                                      </clipPath> -->

                <path fill-rule="evenodd" fill="url(#PSgrad_03)"
                    d="M98.891,386.002 L1527.942,380.805 C1581.806,380.610 1599.093,335.367 1570.005,284.353 L1480.254,126.948 C1458.704,89.153 1408.314,59.820 1366.025,57.550 L298.504,0.261 C238.784,-2.944 166.619,25.419 138.312,70.265 L16.944,262.546 C-24.214,327.750 12.103,386.317 98.891,386.002 Z">
                </path>

                <clipPath id="ctm" fill="none">
                    <path
                        d="M98.891,386.002 L1527.942,380.805 C1581.806,380.610 1599.093,335.367 1570.005,284.353 L1480.254,126.948 C1458.704,89.153 1408.314,59.820 1366.025,57.550 L298.504,0.261 C238.784,-2.944 166.619,25.419 138.312,70.265 L16.944,262.546 C-24.214,327.750 12.103,386.317 98.891,386.002 Z">
                    </path>
                </clipPath>



            </svg>
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $homes->activeproject }}</h5>
                            <p class="card-text">@lang('site.activeproject')</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $homes->completedproject }}</h5>
                            <p class="card-text">@lang('site.complateproject')</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $homes->clients}}</h5>
                            <p class="card-text">@lang('site.clients')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid gtco-testimonials">
        <div class="container">
            <h2 style = "text-transform:capitalize;">@lang('site.teams')</h2>
            <div class="row">
            @foreach ($teams as $index=>$team)

                <div class="col-md-6 col-sm-12 ">
                    <div class="card text-center "><img class="card-img-top" src="{{ $team->image_path}}" alt="{{$team->name}}">
                        <div class="card-body">
                            <h5>{{$team->name}} <br />
                                <span> {{$team->job}} </span></h5>

                        </div>
                    </div>
                </div>
            @endforeach   

            </div>
        </div>
    </div>


    <div class="container-fluid gtco-news" id="work">
        <div class="container">
            <h2 style = "text-transform:capitalize;">@lang('site.ourproducts')</h2>
            <div class="owl-carousel owl-carousel2 owl-theme">

            @foreach ($products as $index=>$product)

                <div >
                    <div class="card text-center"><img class="card-img-top " src="{{$product->image_path}}" alt="{{$product->name}}">
                        <div class="card-body text-left pr-0 pl-0">
                            <h5> {{$product->name}}</h5>

                            <a href="#">@lang('site.readmore')<i class="fa fa-angle-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach

            </div>
        </div>
    </div>
    <footer class="container-fluid" id="gtco-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 " id="contact">
                    <h4> @lang('site.contact') </h4>
                    <form action="{{ url('contact-us')}}" method="post"> 

                        @csrf
                        
                        <input type="text" class="form-control" name="name" class="form-contror"placeholder="@lang('site.name')" > 
                        <input type="text" class="form-control" name="subject" class="form-contror" placeholder="@lang('site.title')"> 

                        <input type="email " class="form-control" name="email " class="form-control" placeholder="@lang('site.email')">

                        <textarea name="message_body" class="form-control" class="form-control" placeholder="@lang('site.message')"></textarea>

                        <button type="submit" class="submit-button">@lang('site.submit')<i class="fa fa-angle-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}" aria-hidden="true"></i></button>

                        </form>
                   
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-6">
                            <h4>@lang('site.services')</h4>
                            <ul class="nav flex-column company-nav">
                            @foreach ($services as $index=>$service)
                            <li class="nav-item"><a class="nav-link" href="#">{{$service->name}}</a></li>

                            @endforeach
                                       </ul>
                            
                        </div>
                        <div class="col-6">
                            <h4>@lang('site.contactinformation') </h4>
                            <ul class="nav flex-column services-nav">
                                <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-envelope"></i> {{$homes->mail}} </a></li>
                                <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-phone"></i>{{$homes->phone}}</a></li>
                                <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-map-marker"></i> {{$homes->address}} </a></li>

                            </ul>
                            <h4 class="mt-5">@lang('site.fllow')</h4>
                            <ul class="nav follow-us-nav ">
                                <li class="nav-item"><a class="nav-link pl-0" href="{{ $homes->facebooklink}}"><i class="fa fa-facebook"
                                            aria-hidden="true"></i></a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ $homes->twitter}}"><i class="fa fa-twitter"
                                            aria-hidden="true"></i></a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ $homes->facebooklink}}"><i class="fa fa-google"
                                            aria-hidden="true"></i></a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ $homes->googlelink}}"><i class="fa fa-linkedin"
                                            aria-hidden="true"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('h2s/js/jquery-3.3.1.slim.min.js') }}"></script>
    <script src="{{ asset('h2s/js/popper.min.js') }}"></script>
    <script src="{{ asset('h2s/js/bootstrap.min.js') }}"></script>
    <!-- owl carousel js-->
    <script src="{{ asset('h2s/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('h2s/js/main.js') }}"></script>
    <script src="{{ asset('h2s/js/wow.min.js') }}"></script>
    <script>
        new WOW().init();
    </script>

</body>

</html>