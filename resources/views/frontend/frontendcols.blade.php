<!doctype html>
<html>
<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<!-- set the viewport width and initial-scale on mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>ELN</title>
	<!-- include the site stylesheet -->
	<link type="text/css" rel="stylesheet" href="{{ asset('/frontend/css/bootstrap.min.css') }}" media="all">
	<link type="text/css" rel="stylesheet" href="{{ asset('/frontend/css/main.css') }}" media="all">


</head>
<body>
	<!-- main wrapper-->
	<div id="wrapper">
		<div class="inner-wrapper">

        @include('frontend/_header')

		<!-- Section-->
		<div class="social hidden-xs">
			<ul class="list-unsltyled">
				<li class="facebook">
				<a target="_blank" href="#"> facebook</a>
				</li>
				<li class="twitter">
				<a target="_blank" href="#"> twitter</a>
				</li>
				<li class="google">
				<a target="_blank" href="#"> google</a>
				</li>
			</ul>
		</div>

        @yield('content')

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<h2>WHAT WE OFFER</h2>
						<p>Individual and Corporate Packages QCF Vocational Qualifications Quality Management Systems Training Online, flexible, accessible e-Learning Holistic, personalised, individual support</p>
					</div>
					<div class="col-sm-4">
						<h2>FEATURES</h2>
						<p>Interactive, dynamic e-Learning Named tutor support 24/7 Skype or phone interviews and contact points Coursework and timeline management Accredited by recognised UK Awarding Bodies</p>
					</div>
					<div class="col-sm-4">
						<h2>RESOURCES</h2>
						<p>Interactive course materials with in-built activities Frequently Asked Questions Video and Audio lessons Ready-made assignment templates Easy to understand course outlines Wide variety of optional units</p>
					</div>
				</div>
			</div>
		</footer>
		<div class="copyright">
				<div class="container">
					<div class="social-icons">
						<ul class="list-inline">
							<li class="facebook">
								<a target="_blank" href="#"> facebook</a>
							</li>
							<li class="twitter">
								<a target="_blank" href="#"> twitter</a>
							</li>
							<li class="google">
								<a target="_blank" href="#"> google</a>
							</li>
							<li class="mail">
								<a target="_blank" href="#"> mail</a>
							</li>
						</ul>
					</div>
					<p>2015 All Rights Reserved</p>
				</div>
			</div>
		</div>
	</div>

	<!-- include jQuery library -->
    	{{--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>--}}
    	<script type="text/javascript" src="{{ asset('/frontend/js/jquery-1.11.2.min.js') }}"></script>
    	<script type="text/javascript" src="{{ asset('/frontend/js/bootstrap.min.js') }}"></script>
    	<script type="text/javascript" src="{{ asset('/frontend/js/jquery.custom.js') }}"></script>

    	<script type="text/javascript">
            if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
                var msViewportStyle = document.createElement('style')
                msViewportStyle.appendChild(
                    document.createTextNode(
                        '@-ms-viewport{width:auto!important}'
                    )
                )
                document.querySelector('head').appendChild(msViewportStyle)
            }
        </script>

        @yield('footer')

</body>
</html>