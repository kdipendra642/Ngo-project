@extends('frontend.layouts.app')
@section('content')
<!-- new contact form -->
<div class="content">

<!-- Info Content - Section Title-->
<div class="content_info">
	<!-- Info Section title-->
	<div class="section-title-01">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<h3>Contact Us</h3>
				</div>
			</div>
		</div>
	</div>
	<!-- End Info Section Title-->

	<!-- breadcrumbs-->
	<div class="breadcrumbs breadcrumbs-sections">
		<ul>
			<li class="breadcrumbs-home">
				<a href="{{ route('customer.index')}}" title="Back To Home">
					<i class="fa fa-home"></i>
				</a>
			</li>
			<li>
				/
			</li>
			<li>
				Contact
			</li>
		</ul>
	</div>
	<!-- End breadcrumbs-->
</div>
<!-- End Info Content - Section Title-->

<!-- Info Content - Boxes services-->
<div class="content_info">
	<div class="padding-top padding-bottom-mini">
		<!-- Container Area - Boxes services -->
		<div class="container">
			<div class="row">

				<!-- Sidebars -->
				<div class="col-md-4">
					<h3>Contact Details</h3>
					<!-- contact-list-->
					<div class="contact-list-container">
						<ul class="contact-list">
							<li>
								<h4><i class="fa fa-phone"></i>Feel Free To Contact Us:</h4>
								<h5><b>{{$setting->site_name}} (Head Office) : </b></h5>
								<p style="padding-bottom: 8px;">{{$setting->address_1}}</p>
								<h5><b>Phone: </b></h5>
								<p style="padding-bottom: 8px;"> {{$setting->contact_phone}}, {{$setting->contact_phone2}}</p>
							</li>
							<li>
								<h4><i class="fa fa-map-marker"></i>Visit Us:</h4>
								<i class="fa fa-arrow"></i>{{$setting->address_title}}
							</li>
							<li>
								<h4><i class="fa fa-envelope-o"></i>Email Us:</h4>
								{{$setting->contact_email}}, 
								{{$setting->contact_email2}} 
							</li>


						</ul>
					</div>
					<!-- End contact-list-->
				</div>
				<!-- End Sidebars -->

				<!--Form Column -->
				<div class="col-md-8 col-sm-9 col-xs-12">
					<h3>Send Us Your Feedback</h3>
					<!--form-box-->
					<div class="form-box default-form">
						<div class="default-form">
							<form action="{{ route('customer.contact-us.store') }}" class="form-theme"
								method="POST" style="max-width: 100%">
								@csrf
								<div class="row clearfix">
									<div class="col-md-12 col-sm-6 col-xs-12">
										<div class="form-group col-12">
											<input required="required" placeholder="Name" id="first-name"
												class="form-control" name="name" type="text">
										</div>
										<div class="form-group col-12">
											<input required="required" placeholder="Email" id="email"
												class="form-control" name="email" type="email">
										</div>
										<div class="form-group col-12">
											<input required="required" placeholder="Phone No." id="phone"
												class="form-control" name="phone" type="tel">
										</div>
										<div class="form-group col-12">
											<input required="required" placeholder="Address" id="address"
												class="form-control" name="address" type="text">
										</div>
										<div class="form-group col-12">
											<input required="required" placeholder="Company Name" id="company"
												class="form-control" name="company" type="text">
										</div>
										<div class="form-group col-12">
											<input placeholder="Subject" id="subject" class="form-control"
												name="subject" type="text">
										</div>
										<div class="form-group col-lg-12" style="right: 13px;">
											<textarea required="required" placeholder="Message"
												id="description" class="form-control" name="message"
												rows="3"></textarea>
										</div>
									</div>
									<div class="col-md-8 col-sm-6 col-xs-12">
										<div class="form-group">
											<button type="submit" class="btn btn-primary" id="submitButton"
												name="submit" value="submit">
												Send Message
											</button>
										</div>
									</div>


								</div>
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- End Container Area - Boxes services -->
	</div>
</div>
<!-- End Info Content - Boxes services-->
</div>
@endsection