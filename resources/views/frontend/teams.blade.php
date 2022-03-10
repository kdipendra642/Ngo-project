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

								
									<h3 style="text-align:justify"><span style="font-size:36px">CEST Nepal governing body</span></h3>
									<br>
									<p>
										CEST Nepal is governed by the Executive Committee comprising 9 members from the diversified field of Tourism, 
										Environment, Sociology, Geography, Agriculture, Economics, Population, Law etc. The Executive Committee is also 
										backed by the several sub committees including Tourism and culture sub-committee, Social and gender inclusion 
										sub-committee, Environment and climate change sub-committee etc as and when required.
									</p>
									<br>
									<p>
										A Glimpse of CEST Nepal Executive Committee members
									</p>
									<table class="table table-hover">
										<thead>
											<tr>
											<th scope="col">Name</th>
											<th scope="col">Position</th>
											<th scope="col">Expertise</th>
											</tr>
										</thead>
										<tbody>
										@foreach($staffs as $pst)
											<tr>
												<td scope="row" style="text-align: left;">
													<!-- <img src="{{ asset('image/staff/'.$pst->image)}}" alt="{{$pst->name}}" style="height: 50px; width: 50px;"> -->
													{{$pst->name}}
												</td>
												<td style="text-align: left;">{{ $pst->designation}}</td>
												<td style="text-align: left;">{!! $pst->description !!}</td>
											</tr>
											@endforeach
										</tbody>
									</table>
									<br>
									<br>

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