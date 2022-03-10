@include('frontend.includes.header')

<body>

    <!-- layout-->
    <div id="layout" class="layout-semiboxed">
        <header id="header" class="header-2">
            <div class="container" style="padding-left: 0px">
                <div class="row">
                <div class="row">
                    <!-- Logo Area -->
                    <div class="col-md-6 col-lg-6" style="left: 100px;">
                        <p class="logo_top" style="margin-left: 94px; font-size: 10px;">GoN Regd. No. 82/064-065, Social Welfare Council (SWC) Aff. No 23160, PAN No. 303408956</p>
                        <div class="row logo">
                            <div class="icon-logo">
                                <a href="{{route('customer.index')}}">
                                    <img src="{{ asset('image/sitesettings/'.$setting->favicon)}}" alt="fullslide1" style="height: 150px; width: 150px;">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Logo Area -->

                    <!-- Login Area -->
                    <div class="col-md-4 col-lg-4" style="right: 250px;">
                    <div class="row logo">
                            <div class="icon-logo">
                                <a href="{{route('customer.index')}}">
                                    <img src="{{ asset('image/sitesettings/'.$setting->logo)}}" alt="fullslide1" style="height: 180px; width: 500px;">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class=" col-md-2 col-lg-2" style="right: 138px; top: 25px;">
                        <div class="row logo">
                            <div class="icon-logo">
                                <a href="{{route('customer.index')}}">
                                    <img src="{{ asset('image/sitesettings/'.$setting->favicon)}}" alt="fullslide1" style="height: 150px; width: 150px;">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Login Area -->
                </div>
                    <!-- Logo Area -->
                    
                    <!-- End Logo Area -->

                    <!-- <div class="col-md-4 col-lg-4">

                        <div style="margin-top: 30px">
                            <div class="txt-right header_margin">
                                <h4 style="padding: 0px; float: left;" class="logo_top">CEST NEPAL OFFICE</h4>
                                <ul class="contact-footer header_info">
                                    <li style="padding: 0px;">
                                        <p><i class="fa fa-home header_info"> {{$setting->address_1}} </i> <i
                                                class="fa fa-phone"> {{$setting->contact_phone}}</i></p>
                                    </li>
                                </ul>
                                <ul class="contact-footer header_info">
                                    <li style="padding: 0px;">
                                        <p><i class="fa fa-home header_info"> {{$setting->address_2}} </i>
                                            <i class="fa fa-phone"> {{$setting->contact_phone2}} </i></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </header>
        <!-- End Header Area -->

        <!-- layout-->
        <div class="content-central">
            <!-- Nav-->
            <nav id="menu">
                <div class="navbar yamm navbar-default">
                    <div class="container">
                        <div class="row">
                            <div class="navbar-header">
                                <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1"
                                    class="navbar-toggle">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div id="navbar-collapse-1" class="navbar-collapse collapse" style="width: 1255px;">
                                <!-- Nav Bar Items -->
                                @include('frontend.includes.navbar')
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- End Nav-->

            <!-- Nav-->
            <div class="content">

                @yield('content')
               

                <!-- End layout-->


            </div>

            <!-- footer-->
            <footer id="footer">
                <!-- Items Footer -->
                <div class="container">
                    <div class="row paddings-mini">
                        <!-- contact Items Footer -->
                        <!-- End contact items Footer -->

                        <!-- Recent Newsletter Footer -->
                        <div class="col-sm-6 col-md-4">
                            <div class="border-right txt-right">
                                <h2>Contact Us</h2>
                                <ul class="contact-footer">
                                    <li class="location">
                                        <i class="fa fa-home"></i><a>{{$setting->contact_title}}: {{$setting->address_1}}</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-phone"></i> <a>{{$setting->contact_phone}}, {{$setting->contact_phone2}}</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope"></i> <a> {{$setting->contact_email}}</a>
                                    </li>
                                </ul>
                                <div class="col-sm-6 col-md-12" style="">
                                    <div class="border-right-none">
                                        <h4>Follow To {{$setting->site_name}}</h4>
                                        <ul class="social">
                                            <li class="facebook"><span><i class="fa fa-facebook"></i></span><a
                                                    href="{{$setting->social_profile_fb}}"
                                                    target="_blank">Facebook</a></li>
                                            <li class="twitter"><span><i class="fa fa-twitter"></i></span><a
                                                    href="{{$setting->social_profile_twitter}}" target="_blank">Twitter</a></li>
                                            <li class="youtube"><span><i class="fa fa-youtube-play"></i></span><a
                                                    href="{{$setting->social_profile_youtube}}"
                                                    target="_blank">Youtube</a></li>
                                            <li class="linkedin"><span><i class="fa fa-linkedin"></i></span><a
                                                    href="{{$setting->social_profile_linkedin}}" target="_blank">Linkedin</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Newsletter Footer -->

                        <!-- Recent Links Items Footer -->
                        <div class="col-sm-6 col-md-8">
                            <div>
                                <iframe
                                    src="https://maps.google.com/maps?q=kathmandu&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                    width="100%" height="440" frameborder="0" style="border:0;"
                                    allowfullscreen=""></iframe>
                            </div>
                        </div>
                        <!-- End Follow Items Footer -->
                    </div>
                </div>
                <!-- End Items Footer -->
                <!-- footer Down-->
                <div class="footer-down">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">

                                <p style="text-align: left;">{{$setting->site_name}}. All Rights Reserved.
                                </p>
                            </div>
                            <div class="col-md-2">
                                <p style="text-align: center;"> XXX</p>
                            </div>
                            <div class="col-md-5">
                                <p>Powered by <a href="#" target="_blank"
                                        style="color: #00A7E4"> 
                                        Prabidhi Enterprise.</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer Down-->
            </footer>
            <!-- End footer-->
        </div>

@include('frontend.includes.footer')