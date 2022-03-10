@extends('frontend.layouts.app')
@section('content')

	<div class="content_info">
                        <div class="padding-bottom-mini">
                            <!-- title-vertical-line-->
                            <div class="title-vertical-line">
                                <h2>Categories</h2>
                                <div class="dlab-separator-outer ">
                                    <div class="dlab-separator bg-secondry style-skew"></div>
                                </div>
                            </div>
                            <!-- End title-vertical-line-->

                            <!-- Container Area - Boxes services -->
                            <div class="container">
                                <!-- boxes-services -->
                                <div class="row paddings">

                                @foreach($categories as $category)
                                    <!--Col Item Blog Post-->
                                    <div class="col-md-4">
                                        <!--Item Blog Post-->
                                        <div class="item-blog-post">

                                            <!--Img Blog Post-->
                                            <div class="img-item-blog-post">
                                                <a href="{{ route('customer.view-category', $category->id) }}">
													<h3>{{$category->title}}</h3>
                                                </a>
                                                <div class="post-meta">

                                                </div>
                                            </div>
                                            <!--End Img Blog Post-->

                                            <!--Head Blog Post-->
                                            <div class="head-item-blog-post">
												<a href="{{ route('customer.view-category', $category->id) }}">
													<h3>{{$category->title}}</h3>
                                                </a>
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
@endsection