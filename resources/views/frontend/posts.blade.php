@extends('frontend.layouts.app')
@section('content')

	<div class="content">

            <!-- Info Content - Section Title-->
            <div class="content_info">
                <!-- Info Section title-->
                <div class="section-title-01">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h3>{{$post->title}}</h3>
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
						{{$post->title}}
                        </li>
                    </ul>
                </div>
                <!-- End breadcrumbs-->
            </div>
            <!-- End Info Content - Section Title-->


            <!-- Info Content - News Items-->
            <div class="content_info">
                <div class="paddings">
                    <!-- events Container-->
                    <div class="container">
                        <div class="row">
						<div class="col-md-12">

							<div class="outer">
								<div class="row" style="border: 5px solid #f1f1f1; ">
									@foreach($post->multipic as $img)
										<div class="col-md-4 col-sm-3 col-xs-12">
											<div class="chemical-img-box img-box catergori-list" style="margin-top: 10px;">
												<a href="{{ asset('storage/image/multipic/'.$img->image) }}" data-lightbox="mygallery"
													style="display: inline-block;">
													<img class="thumbnail"
														style="height: 205px;width: 360px;" alt="{{$post->title}}"
														src="{{ asset('storage/image/multipic/'.$img->image) }}">
												</a>
											</div>
										</div>
									@endforeach

								</div>
							</div>
						</div>
						<div class="col-md-12 blog-post-section">
							<!--Item Blog Post-->
							<div>
								<div class="info-item-blog-post">
									<p>{!! $post->description !!}</p>

									<p>&nbsp;</p>
									<a href="{{$post->url}}" target="_blank">Click here to know more...</a>
								</div>
								<!--End Ingo Blog Post-->
							</div>
							<!--End Item Blog Post-->

						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection