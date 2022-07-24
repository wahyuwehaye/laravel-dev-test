<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Work Scout</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/colors/green.css') }}" id="colors">

</head>

<body>
<div id="wrapper">
<header>
<div class="container">
	<div class="sixteen columns">

        <!-- Menu -->
        <nav id="navigation" class="menu">
            <ul class="responsive float-right">
                @guest
                    <li><a href="{{ route('register') }}"><i class="fa fa-user"></i> Sign Up</a></li>
                    <li><a href="{{ route('login') }}"><i class="fa fa-lock"></i> Log In</a></li>
                @else
                    <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> Log Out</a></li>
                @endguest
            </ul>

        </nav>

        <!-- Navigation -->
        <div id="mobile-navigation">
            <a href="#menu" class="menu-trigger"><i class="fa fa-reorder"></i> Menu</a>
        </div>

	</div>
</div>
</header>
<div class="clearfix"></div>


<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="ten columns">
			<span><a href="browse-jobs.html">{{ date('d M Y', strtotime($dataJson->created_at)) }}</a></span>
			<h2>{{ $dataJson->title }} <span class="{{ $dataJson->type == "Full Time" ? "full-time" : "part-time" }}">{{ $dataJson->type }}</span></h2>
		</div>

		<div class="six columns">
			<a href="#" class="button dark"><i class="fa fa-star"></i> Bookmark This Job</a>
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<div class="container">

	<!-- Recent Jobs -->
	<div class="">
	<div class="">

		<!-- Company Info -->
		<div class="company-info">
			<img src="{{ $dataJson->company_logo }}" alt="">
			<div class="content">
				<h4>{{ $dataJson->company }}</h4>
				<span><a href="#"><i class="fa fa-link"></i> {{ $dataJson->company_url }}</a></span>
				<span><a href="#"><i class="fa fa-map-marker"></i> {{ $dataJson->location }}</a></span>
			</div>
			<div class="clearfix"></div>
		</div>

		<p class="margin-reset">
			{!! $dataJson->description !!}
		</p>

		<h4 class="margin-bottom-10">How To Apply</h4>

		{!! $dataJson->how_to_apply !!}

	</div>
	</div>


	<!-- Widgets -->
	<div class="five columns">

		<!-- Sort by -->
		<div class="widget">
			<h4>Overview</h4>

			<div class="job-overview">

				<ul>
					<li>
						<i class="fa fa-map-marker"></i>
						<div>
							<strong>Location:</strong>
							<span>{{ $dataJson->location }}</span>
						</div>
					</li>
					<li>
						<i class="fa fa-user"></i>
						<div>
							<strong>Job Title:</strong>
							<span>{{ $dataJson->title }}</span>
						</div>
					</li>
				</ul>


				<a href="#small-dialog" class="popup-with-zoom-anim button">Apply For This Job</a>

				<div id="small-dialog" class="zoom-anim-dialog mfp-hide apply-popup">
					<div class="small-dialog-headline">
						<h2>Apply For This Job</h2>
					</div>

					<div class="small-dialog-content">
						<form action="#" method="get" >
							<input type="text" placeholder="Full Name" value=""/>
							<input type="text" placeholder="Email Address" value=""/>
							<textarea placeholder="Your message / cover letter sent to the employer"></textarea>

							<!-- Upload CV -->
							<div class="upload-info"><strong>Upload your CV (optional)</strong> <span>Max. file size: 5MB</span></div>
							<div class="clearfix"></div>

							<label class="upload-btn">
							    <input type="file" multiple />
							    <i class="fa fa-upload"></i> Browse
							</label>
							<span class="fake-input">No file selected</span>

							<div class="divider"></div>

							<button class="send">Send Application</button>
						</form>
					</div>

				</div>

			</div>

		</div>

	</div>
	<!-- Widgets / End -->


</div>


<!-- Footer
================================================== -->
<div class="margin-top-50"></div>


<div id="footer">

    <!-- Bottom -->
    <div class="container">
        <div class="footer-bottom">
            <div class="sixteen columns">
                <h4>Follow Us</h4>
                <ul class="social-icons">
                    <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                    <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                    <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
                </ul>
                <div class="copyrights">©  Copyright <?php echo date('Y') ?> by <a href="#">WEHAYE JOBS</a>. All Rights Reserved.</div>
            </div>
        </div>
    </div>

</div>

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script src="{{ asset('assets/scripts/jquery-2.1.3.min.js') }}"></script>
<script src="{{ asset('assets/scripts/custom.js') }}"></script>
<script src="{{ asset('assets/scripts/jquery.superfish.js') }}"></script>
<script src="{{ asset('assets/scripts/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('assets/scripts/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('assets/scripts/jquery.themepunch.showbizpro.min.js') }}"></script>
<script src="{{ asset('assets/scripts/jquery.flexslider-min.js') }}"></script>
<script src="{{ asset('assets/scripts/chosen.jquery.min.js') }}"></script>
<script src="{{ asset('assets/scripts/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/scripts/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/scripts/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/scripts/jquery.jpanelmenu.js') }}"></script>
<script src="{{ asset('assets/scripts/stacktable.js') }}"></script>



</body>
</html>
