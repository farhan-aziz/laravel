@extends('frontend.frontend')

@section('content')
		<section id="#slider" class="carousel slide slider" data-interval="3000" data-ride="carousel">
			<!-- Carousel items -->
			<div class="carousel-inner">
				<div class="item active" style="background-image: url('{{ asset('/frontend/images/img6.jpg') }}');">
					<div class="container">
						<div class="text">
						<h1>Award in Education and Training <br>(AET) (CET) &amp; (DET)</h1>
						<ul class="list-unstyled hidden-xs">
							<li>
								<p>Gain recognised qualifications. Boost your career prospects!</p>
							</li>
							<li class="user">
								<p>For individuals and businesses!</p>
							</li>
							<li class="mobile">
								<p>Your learning at your convenience!</p>
							</li>
						</ul>
						<a href="inner.html" class="apply">Apply Now!</a>
						</div>
					</div>
				</div>
				<div class="item" style="background-image: url({{ asset('/frontend/images/img7.jpg') }});">
					<div class="container">
						<div class="text">
							<h1>Certificate in Leading the EQA of <br>Assessment Processes and Practice</h1>
								<ul class="list-unstyled hidden-xs">
									<li>
										<p>Gain recognised qualifications. Boost your career prospects!</p>
									</li>
									<li class="user">
										<p>For individuals and businesses!</p>
									</li>
									<li class="mobile">
										<p>Your learning at your convenience!</p>
									</li>
								</ul>
							<a href="inner(11).html" class="apply">Apply Now!</a>
						</div>
					</div>
				</div>
				<div class="item" style="background-image: url({{ asset('/frontend/images/img8.jpg') }});">
					<div class="container">
						<div class="text">
						<h1>Certificate in Leading the IQA of <br>Assessment Processes and Practice</h1>
						<ul class="list-unstyled hidden-xs">
							<li>
								<p>Gain recognised qualifications. Boost your career prospects!</p>
							</li>
							<li class="user">
								<p>For individuals and businesses!</p>
							</li>
							<li class="mobile">
								<p>Your learning at your convenience!</p>
							</li>
						</ul>
						<a href="inner(8).html" class="apply">Apply Now!</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Section 1 -->
		<section class="courses container text-center">
			<h2>Popular Courses</h2>
			<p>Access LIVE, INTERACTIVE e-learning audio, video course materials and assignment content on the go, on your mobile, tablet, laptop or pc.</p>
			<div class="stars">
				<img src="{{ asset('/frontend/images/stars.png') }}" alt="">
			</div>
			<div class="courses-holder">
			<ul class="list-inline">
				<li>
					<a href="#">
					<span>AET</span>
					</a>
					<p>Award in Education <br><strong>&amp; Training (AET)</strong></p>
				</li>
				<li>
					<a href="#">
					<span>CET</span>
					</a>
					<p>Certificate in Education <br><strong>&amp; Training(CET)</strong></p>
				</li>
				<li>
					<a href="#">
					<span>DET</span>
					</a>
					<p>Diploma in Education <br><strong>&amp; Training (DET)</strong></p>
				</li>
				<li>
					<a href="#">
					<span>IQA</span>
					</a>
					<p>Internal Quality of <br><strong>Assurance (IQA)</strong></p>
				</li>
			</ul>
			</div>
		</section>
		<!-- Section 2-->
		<section class="choose-us text-center">
			<div class="container">
			   <h2>Why choose us?</h2>
				<div class="row">
				   <div class="col-sm-4">
					   <div class="holder">
						   <img src="{{ asset('/frontend/images/icon-4.png') }}" alt="">
						   <p>Innovative, revolutionary, engaging Learning Management System! You have got to try it!</p>
					   </div>
				   </div>
				   <div class="col-sm-4">
					   <div class="holder">
						   <img src="{{ asset('/frontend/images/icon-5.png') }}" alt="">
						   <p>Contact your tutor 24/7 via the LMS, email or even phone! Yes, it’s true!Yes, it’s true!</p>
					   </div>
				   </div>
				   <div class="col-sm-4">
					   <div class="holder">
						   <img src="{{ asset('/frontend/images/icon-6.png') }}" alt="">
						   <p>Experienced, QTLS, Diploma level qualified, UK-based tutor support! tutor support!</p>
					   </div>
				   </div>
				   <div class="clearfix"></div>
				   <div class="col-sm-4">
					   <div class="holder">
						   <img src="{{ asset('/frontend/images/icon-7.png') }}" alt="">
						   <p>Fully ACCREDITED courses by recognised UK Awarding Organisations and/or the CPD!</p>
					   </div>
				   </div>
				   <div class="col-sm-4">
					   <div class="holder">
						   <img src="{{ asset('/frontend/images/icon-8.png') }}" alt="">
						   <p>Work at your own pace, at your own hours, set your own deadlines. Or, tell us beforehand </p>
					   </div>
				   </div>
				   <div class="col-sm-4">
					   <div class="holder">
						   <img src="{{ asset('/frontend/images/icon-9.png') }}" alt="">
						   <p>Access LIVE, INTERACTIVE e-learning audio, video course materials and assignment content on the go</p>
					   </div>
				   </div>
				</div>
			</div>
		</section>
		<!-- Section 3-->
		<section class="potential container text-center">
			<div class="text">
				<h2>Realise your full potential</h2>
				<p>Interactive mutli-media presentations that integrate audio, video, images, HTML, &amp; slides</p>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<div class="holder">
						<img src="{{ asset('/frontend/images/icon-1.png') }}" alt="">
						<h3>ASSIGNMENT</h3>
						<p>Interactive mutli-media presentations that integrate audio, video, images, HTML, &amp; slides</p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="holder">
						<img src="{{ asset('/frontend/images/icon-2.png') }}" alt="">
						<h3>ASSIGNMENT</h3>
						<p>Interactive mutli-media presentations that integrate audio, video, images, HTML, &amp; slides</p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="holder">
						<img src="{{ asset('/frontend/images/icon-3.png') }}" alt="">
						<h3>ASSIGNMENT</h3>
						<p>Interactive mutli-media presentations that integrate audio, video, images, HTML, &amp; slides</p>
					</div>
				</div>
			</div>
		</section>
		<!-- Section 4-->
		<section class="testimonials text-center">
			<div class="container">
			<h2>Clients testimonies</h2>
				<div id="testimonials" class="carousel slide" data-interval="3000" data-ride="carousel">
				<!-- Carousel items -->
				<div class="carousel-inner">
					<div class="active item">
						<p>"The tutor was excellent and was available throughout the course to answer any query big or small, that made such a difference to me, I don't think I could have completed my course otherwise." <strong>SF, Bucks.</strong></p>
					</div>
					<div class="item">
						<p>"The tutor was excellent and was available throughout the course to answer any query big or small, that made such a difference to me, I don't think I could have completed my course otherwise." <strong>SF, Bucks.</strong></p>
					</div>
					<div class="item">
						<p>"The tutor was excellent and was available throughout the course to answer any query big or small, that made such a difference to me, I don't think I could have completed my course otherwise." <strong>SF, Bucks.</strong></p>
					</div>
				</div>
					<!-- Carousel indicators -->
					<ol class="carousel-indicators">
						<li data-target="#testimonials" data-slide-to="0" class="active"></li>
						<li data-target="#testimonials" data-slide-to="1"></li>
						<li data-target="#testimonials" data-slide-to="2"></li>
					</ol>
				</div>
			</div>
		</section>
		<!-- Section 5-->
		<section class="begin text-center">
			<div class="container">
				<h2>Begin your learning journey now!</h2>
				<p>ALL OUR COURSES ARE ACCREDITED!</p>
			</div>
		</section>
		<!-- Section 6-->
@endsection