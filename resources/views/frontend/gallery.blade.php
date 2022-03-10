@extends('frontend.layouts.app')
@section('content')


<!-- new gallery -->
<div class="content">

            <!-- Info Content - Section Title-->
            <div class="content_info">
                <!-- Info Section title-->
                <div class="section-title-01">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h3>Gallery</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Info Section Title-->

                <!-- breadcrumbs-->
                <div class="breadcrumbs breadcrumbs-sections">
                    <ul>
                        <li class="breadcrumbs-home">
                            <a href="{{route('customer.index')}}" title="Back To Home">
                                <i class="fa fa-home"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">Gallery</a>
                        </li>
                       
                    </ul>
                </div>
                <!-- End breadcrumbs-->
            </div>
            <!-- End Info Content - Section Title-->

            <!--=================================
                    banner -->
            <section
                class="news-content section-padding single-service-page our-features in-wrapper no-container no-pb">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">

                            <div class="outer">
                                <div class="row" style="border: 5px solid #f1f1f1; border-bottom: 5px solid #00A652;">
								@foreach($galery as $image)
                                    <div class="col-md-4 col-sm-3 col-xs-12">
                                        <div class="chemical-img-box img-box catergori-list" style="margin-top: 10px;">
                                            <a href="{{ asset('storage/image/gallery/'.$image->image) }}" data-lightbox="mygallery"
                                                style="display: inline-block;">
                                                <img style="height: 205px;width: 360px;"
                                                    src="{{ asset('storage/image/gallery/'.$image->image) }}">
                                            </a>
                                        </div>
                                    </div>
								@endforeach

                                </div>
                            </div>
                            <div class="mt-30"></div>
                        </div>
                    </div>
                </div>
            </section>


        </div>

@endsection