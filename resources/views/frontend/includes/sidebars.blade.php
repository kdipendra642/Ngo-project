<div class="col-md-3">
					<!-- Sidebar -->

					<!-- End Sidebar-->

					<!-- Widget List -->
					<aside class="widget">
						<div class="right-sidebar">
							<h4>Quick Links</h4>
							<ul class="list-styles">
								<li><i class="fa fa-check"></i>
									<a href="{{route('customer.about-us')}}">About Company</a>
								</li>
								<li><i class="fa fa-check"></i>
									<a href="{{ route('customer.team') }}">Our Team</a>
								</li>
							</ul>
						</div>
					</aside>
					<!-- End Widget List -->

					<!-- Widget List -->
					<aside class="widget">
						<div class="right-sidebar">
							<h4>Projects</h4>
                            @foreach($projects as $pst)
							<ul class="list-styles">
								<li><i class="fa fa-check"></i>
                                    <a href="{{ route('customer.view-posts', $pst->slug) }}">
                                        {{$pst->title}}
                                    </a>
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
                                    <a href="{{ route('customer.view-posts', $pst->slug) }}">
                                        {{$pst->title}}
                                    </a>
								</li>
							</ul>
                            @endforeach
						</div>
					</aside>
				</div>