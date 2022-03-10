@extends('frontend.layouts.app')
@section('content')
 <!-- fond-header-->
 <div class="fond-header-02">
                    <!-- Slide Section-->
                    <div class="tp-banner-container">
                        <div class="tp-banner">
                            <!-- SLIDES CONTENT-->
                            <ul>
                                <!--SLIDER -->
                                @foreach($banners as $ban)
                                <li data-transition="zoomout" data-slotamount="7" data-masterspeed="1500">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{ asset('image/banner/'.$ban->image)}}" alt="fullslide1"
                                        data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                                </li>
                                @endforeach
                               
                            </ul>
                            <!-- END SLIDES-->
                            <div class="tp-bannertimer"></div>
                        </div>
                    </div>
                    <!-- End Slide Section-->
                </div>
                <!-- End fond-header-->

                <!-- content-central-->
                <div>
                    <!-- Container Area  -  Slide and tabs -->
                    <div class="content_info">
                        <!-- breadcrumbs-->
                        <div class="breadcrumbs breadcrumbs-sections">
                            <ul>
                                <li class="breadcrumbs-home">
                                    <a href="#" title="Back To Home">
                                        <i class="fa fa-home"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('customer.index')}}">Home</a>
                                </li>

                            </ul>
                        </div>
                        <!-- End breadcrumbs-->
                    </div>
                    <!-- End Container Area - Slide and tabs -->

                    <div class="content_info">
                        <!-- Info Result-->
                        <div class="skin_base color-white paddings">
                            <div class="container wow fadeInUp">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h2>{{$setting->site_name}}</h2>
                                        <p>
                                        <p>{!! str_limit($setting->about_description, 400) !!}.</p>

                                        <p>&nbsp;</p>

                                        <a href="{{ route('customer.about-us') }}" class="btn btn-primary"
                                            style="margin-top: 10px">View
                                            Details</a>
                                    </div>

                                    <div class="col-md-4">
                                        <img src="{{ asset('image/sitesettings/'.$setting->about_image)}}"
                                            style="" alt="" class="img-responsive">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Info Resalt-->
                    </div>

                    <!-- Info Content - Carousel services-->
                    <div class="content_info">
                        <div class="padding-bottom-mini">
                            <!-- title-vertical-line-->
                            <div class="title-vertical-line">
                                <h2><span>Our</span> Work</h2>
                                <div class="dlab-separator-outer ">
                                    <div class="dlab-separator bg-secondry style-skew"></div>
                                </div>
                            </div>
                            <!-- End title-vertical-line-->

                            <!-- Container Area - Boxes services -->
                            <div class="container">
                                <!-- boxes-services -->
                                <div class="row paddings">

                                @foreach($post as $posts)
                                    <!--Col Item Blog Post-->
                                    <div class="col-md-4">
                                        <!--Item Blog Post-->
                                        <div class="item-blog-post">

                                            <!--Img Blog Post-->
                                            <div class="img-item-blog-post">
                                                <a href="{{ route('customer.view-posts', $posts->slug) }}">
                                                    <img src="{{ asset('image/posts/'.$posts->cover)}}"
                                                        alt="{{$posts->title}}" style="height: 200px;">
                                                </a>
                                                <div class="post-meta">

                                                </div>
                                            </div>
                                            <!--End Img Blog Post-->

                                            <!--Head Blog Post-->
                                            <div class="head-item-blog-post">

                                                <h3>{{$posts->title}}</h3>
                                            </div>
                                        </div>
                                        <!--End Item Blog Post-->
                                    </div>
                                    @endforeach
                                    
                                    <!--End Col Item Blog Post-->
                                </div>

                            </div>
                            <!-- End Info Content - Carousel services-->

                            <!-- Info Varius-->


                        </div>
                        <!-- End content-central-->
                    </div>
                    <!-- End content-central-->

                    <!-- Testimonials Container-->
                    <!-- <div class="content-central content-central-02" style="margin: 10px 0">
                        <div class="content_info">
                            <div class="paddings">
                                <div class="title-vertical-line">
                                    <p class="lead" style="font-style: italic;text-align: center">
                                        <b><strong>&ldquo;Kumari is My First Choice Co-operative&rdquo;</strong></b>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- End Testimonials Container-->

                    <!-- Sponsors Container-->
                    <div class="container wow fadeInUp">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Sponsors Zone-->
                                <div class="title-vertical-line">
                                    <h2><span>Our</span> Projects</h2>
                                    <div class="dlab-separator-outer ">
                                        <div class="dlab-separator bg-secondry style-skew"></div>
                                    </div>
                                </div>
                                <!-- End title-vertical-line-->

                                <!-- Container Blog Post -->
                                <div class="container">
                                    <!--Blog Post Items-->
                                    <div class="row paddings">
                                        <!--Col Item Blog Post-->
                                        @foreach($projects as $pst)
                                        <div class="col-md-4">
                                            <!--Item Blog Post-->
                                            <div class="item-blog-post">
                                                <!--Head Blog Post-->
                                                <div class="head-item-blog-post">
                                                    <h3>{{$pst->title}}</h3>
                                                </div>
                                                <!--End Head Blog Post-->

                                                <!--Img Blog Post-->
                                                <div class="img-item-blog-post">
                                                    <a href="{{ route('customer.view-posts', $pst->slug) }}">
                                                        <img src="{{ asset('image/posts/'.$pst->cover)}}"
                                                            alt="{{$pst->title}}" style="height: 200px;">
                                                    </a>
                                                    <div class="post-meta">
                                                    </div>
                                                </div>
                                                <!--End Img Blog Post-->

                                                <!--Ingo Blog Post-->
                                                <div class="info-item-blog-post">
                                                    <p>{!! str_limit($pst->description, 50) !!}</p>
                                                    <br>
                                                    <a href="{{ route('customer.view-posts', $pst->slug) }}">
                                                        <i class="fa fa-plus-circle"></i> View more</a>
                                                </div>
                                                <!--End Ingo Blog Post-->
                                            </div>
                                            <!--End Item Blog Post-->
                                        </div>
                                        @endforeach
                                      
                                        <!--End Col Item Blog Post-->

                                        <div class="col-md-12 text-center margin-top">
                                            <a href="#" class="btn btn-primary">View All Projects</a>
                                        </div>
                                    </div>
                                    <!--End Blog Post Items-->
                                </div>
                                <!-- End Sponsors Zone-->
                            </div>
                        </div>
                    </div>
                    <!-- End Sponsors Container-->
                    <div class="content-central content-central-02" style="margin-top: 0px;">
                        <div class="content_info">
                            <div class="paddings">
                                <!-- events Container-->
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="title-subtitle padding-bottom-mini">
                                                        <h5>Keep informed and updated on all news related to CEST Nepal.
                                                        </h5>
                                                        <h3>Upcoming {{$setting->site_name}} Events.</h3>
                                                    </div>
                                                </div>

                                                <!-- Item event-->
                                                @foreach($postss as $pst)
                                                <div class="col-md-12">
                                                    <div class="item-event">
                                                        <div class="event-icon">
                                                            <img src="{{ asset('image/posts/'.$pst->cover) }}" alt="{{$pst->title}}">
                                                        </div>

                                                        <div class="event-info">
                                                            <h4>
                                                                <a href="{{ route('customer.view-posts', $pst->slug) }}">
                                                                    {{$pst->title}}
                                                                </a>
                                                            </h4>
                                                            <p>
                                                                {!! str_limit($pst->description, 50) !!} 
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                                <div class="col-md-12 text-center margin-top">
                                                    <a href="#" class="btn btn-primary">View other Events</a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Sidebars-->
                                        <div class="col-md-4">

                                            <!-- Widget Text -->
                                            <aside class="widget">

                                            </aside>

                                            <!-- Widget List -->
                                            <aside class="widget">
                                                <div class="right-sidebar">
                                                    <h4>Notices</h4>
                                                    @foreach($notices as $notice)
                                                    <ul class="list-styles">
                                                        <li><i class="fa fa-check"></i>
                                                            <a href="{{ route('customer.view-posts', $notice->slug) }}">{{$notice->title}}</a>
                                                        </li>
                                                    </ul>
                                                    @endforeach
                                                </div>
                                            </aside>
                                            <!-- End Widget List -->

                                            <!-- Widget List -->
                                            <aside class="widget">
                                                <div class="right-sidebar">
                                                    <h4>News</h4>
                                                    @foreach($postss as $pst)
                                                    <ul class="list-styles">
                                                        <li><i class="fa fa-check"></i>
                                                            <a href="{{ route('customer.view-posts', $pst->slug) }}">{{$pst->title}}</a>
                                                        </li>
                                                    </ul>
                                                    @endforeach
                                                </div>
                                            </aside>
                                            <!-- End Widget List -->
                                        </div>
                                        <!-- End  Sidebars-->
                                    </div>
                                </div>
                                <!-- End events Container-->
                            </div>
                        </div>
                    </div>
                    <!-- End Info Content - Events Items-->
<!-- new gallery -->
                    <div class="container wow fadeInUp">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Sponsors Zone-->
                                <div class="title-vertical-line">
                                    <h2>Gallery</h2>
                                    <div class="dlab-separator-outer ">
                                        <div class="dlab-separator bg-secondry style-skew"></div>
                                    </div>
                                </div>
                                <!-- End title-vertical-line-->

                                <!-- Container Blog Post -->
                                <div class="container">
                                    <!--Blog Post Items-->
                                    <div class="row paddings">
                                        <!--Col Item Blog Post-->
                                        @foreach($galery as $gal)
                                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                                <div class="chemical-img-box img-box catergori-list"
                                                                    style="margin-top: 10px;">
                                                                    <a href="{{ asset('storage/image/gallery/'.$gal->image) }}" data-lightbox="mygallery">
                                                                        <img alt=""
                                                                            style="height: 239px;width: 360px;"
                                                                            src="{{ asset('storage/image/gallery/'.$gal->image) }}">
                                                                        </a>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                      
                                        <div class="col-md-12 text-center margin-top" style="margin-top: 30px;">
                                            <a href="{{ route('customer.gallery') }}" class="btn btn-primary">View Gallery</a>
                                        </div>
                                    </div>
                                    <!--End Blog Post Items-->
                                </div>
                                <!-- End Sponsors Zone-->
                            </div>
                        </div>
                    </div>
                    <!-- Gallery Content -->
                   
                    <!-- End Gallery Content -->

                    <!-- Info Content-->
                    <div class="container wow fadeInUp">
                        <div class="padding-bottom">
                            <!-- Testimonials Container-->
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- title-vertical-line-->
                                        <div class="title-vertical-line">
                                            <h2><span>Our</span> Supporting Partners</h2>
                                            <div class="dlab-separator-outer ">
                                                <div class="dlab-separator bg-secondry style-skew"></div>
                                            </div>
                                        </div>
                                        <!-- End title-vertical-line-->

                                        <ul id="testimonials" class="testimonials padding-top">
                                            @foreach($donor as $don)
                                                <li data-toggle="tooltip" title data-original-title="{{$don->title}}">
                                                        <img src="{{ asset('image/donors/'.$don->image)}}" alt="{{$don->title}}"
                                                            style="height: 85px;">
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Testimonials Container-->
                        </div>
                    </div>
                    <!-- End Info Content-->


                    <!-- Sponsors Container-->

                  
                </div>
                <!-- End content-central-->
@endsection