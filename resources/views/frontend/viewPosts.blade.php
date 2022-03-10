@extends('frontend.layouts.app')
@section('content')
<!-- new posts -->
<div class="content">
            <!-- Info Content - Section Title-->
            <div class="content_info">
                <!-- Info Section title-->
                <div class="section-title-01">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h3>{{$cate->title}}</h3>
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
                            /
                        </li>
                        <li>
						{{$cate->title}}
                        </li>
                    </ul>
                </div>
                <!-- End breadcrumbs-->
            </div>
            <!-- End Info Content - Section Title-->

            <!-- Sponsors Container-->
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Sponsors Zone-->
                        <!-- End title-vertical-line-->

                        <!-- Container Blog Post -->
                        <div class="container">
                            <!--Blog Post Items-->
                            <div class="row paddings">
                                <!--Col Item Blog Post-->
							@foreach($post as $posts)

                                <div class="col-md-4">
                                    <!--Item Blog Post-->
                                    <div class="item-blog-post">
                                        <!--Head Blog Post-->
                                        <div class="head-item-blog-post">
                                            <h3>{{$posts->title}}</h3>
                                        </div>
                                        <!--End Head Blog Post-->

                                        <!--Img Blog Post-->
                                        <div class="img-item-blog-post">
                                            <a href="{{ route('customer.view-posts', $posts->slug) }}">
                                                <img src="{{ asset('image/posts/'.$posts->cover)}}" alt="{{$posts->title}}"
                                                    style="height: 200px;">
                                            </a>
                                            <div class="post-meta">
                                            </div>
                                        </div>
                                        <!--End Img Blog Post-->

                                        <!--Ingo Blog Post-->

                                        <!--End Ingo Blog Post-->
                                    </div>
                                    <!--End Item Blog Post-->
                                </div>
							@endforeach
                                <!--End Col Item Blog Post-->

                            </div>
                            <!--End Blog Post Items-->
                        </div>
                        <!-- End Sponsors Zone-->
                    </div>
                </div>
            </div>
            <!-- End Sponsors Container-->



        </div>
@endsection