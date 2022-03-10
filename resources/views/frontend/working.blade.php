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
					<h3>Our Teams</h3>
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
				<a href="{{route('customer.index')}}">Home</a>
			</li>
			<li>
				/
			</li>
			<li>
				<a href="#">Teams</a>
			</li>
		   
		</ul>
	</div>
	<!-- End breadcrumbs-->
</div>
<!-- End Info Content - Section Title-->

<!--=================================
		banner -->


<div class="content_info">
	<div class="padding-top padding-bottom-mini">
		<!-- Container Area - Boxes services -->
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="title-subtitle">
						<div class="services-full-boxes">
							<!-- full-box Item-->
							<div class="full-box">
								<div class="info-full-box"
									style="text-align: left;padding: 25px;width: 100%">
								
									<h3 style="text-align:justify"><span style="font-size:36px">Working Approach of CEST Nepal</span></h3>
									<br>
									<p>
										{!! $setting->terms_and_condition !!}
									</p>


								</div>
							</div>
							<!-- End full-box  Item-->
						</div>

					</div>
				</div>

				<!-- Sidebars-->
				@include('frontend.includes.sidebars')
				<!-- End  Sidebars-->
			</div>
		</div>
		<!-- End events Container-->
	</div>
</div>


</div>

@endsection