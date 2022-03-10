@extends('frontend.layouts.app')
@section('content')

	<!-- new about page -->
	<div class="content">

<!-- Info Content - Section Title-->
<div class="content_info">
	<!-- Info Section title-->
	<div class="section-title-01">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3>About {{$setting->site_name}}</h3>
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
				Objectives
			</li>
		</ul>
	</div>
	<!-- End breadcrumbs-->
</div>
<!-- End Info Content - Section Title-->

<!-- Info Content - News Items-->
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
									<p>
									<h3 style="text-align:justify"><span style="font-size:36px">{{$setting->site_name}}</span></h3>

									<p style="text-align:justify">&nbsp;</p>

									<h3 style="text-align:justify"><span style="font-size:36px">Objectives</span></h3>

									<p style="text-align:justify">&nbsp;</p>

									<p>{!! $setting->site_description !!}</p>

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
<!-- End Info Content - News Items-->

</div>
@endsection