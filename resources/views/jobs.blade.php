<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Wehaye Jobs</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/colors/green.css" id="colors">
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
                <span>WEHAYE JOBS</span>
                <h2>Web, Software & IT</h2>
            </div>

        </div>
    </div>


    <!-- Content
    ================================================== -->
    <div class="container">
        <!-- Recent Jobs -->
        <div class="">
            <div class="">

                <div class="search-container">
                    <form method="get" action="{{ route('jobs') }}">
                        {{-- @csrf --}}

                        <input type="text" class="ico-01" name="description" placeholder="job title, keywords or company name" value=""/>
                        <input type="text" class="ico-02" name="location" placeholder="city, province or region" value=""/>
                        <ul class="checkboxes">
                            <li>
                                <input id="check-1" type="checkbox" name="fulltime" value="1">
                                <label for="check-1">Full Time Only</label>
                            </li>
                        </ul>
                        <button type="submit"><i class="fa fa-search"></i></button>

                    </form>

                </div>

                <ul class="job-list full">
                    @forelse ($dataJson as $item)

                        <li><a href="{{ route('details', $item->id ?? "") }}">
                            <img src="{{ $item->company_logo ?? "" }}" alt="">
                            <div class="job-list-content">
                                <h4>{{ $item->title ?? "" }} <span class="{{ $item->type ?? "" == "Full Time" ? "full-time" : "part-time" }}">{{ $item->type ?? "" }}</span></h4>
                                <div class="job-icons">
                                    <span><i class="fa fa-briefcase"></i> {{ $item->company ?? "" }}</span>
                                    <span><i class="fa fa-map-marker"></i> {{ $item->location ?? "" }}</span>
                                    <span><i class="fa fa-calendar"></i> {{ date('d M Y', strtotime($item->created_at ?? "")) }}</span>
                                </div>
                            </div>
                            </a>
                            <div class="clearfix"></div>
                        </li>

                    @empty
                        <h1>DATA NOT FOUND</h1>
                    @endforelse
                </ul>
                <div class="clearfix"></div>

                <div class="pagination-container">
                    <nav class="pagination">
                        <ul>
                            <li><a href="#" class="current-page">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="blank">...</li>
                            <li><a href="#">22</a></li>
                        </ul>
                    </nav>

                    <nav class="pagination-next-prev">
                        <ul>
                            <li><a href="#" class="prev">Previous</a></li>
                            <li><a href="#" class="next">Next</a></li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>


    <!-- Footer
    ================================================== -->
    <div class="margin-top-25"></div>

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
<script src="assets/scripts/jquery-2.1.3.min.js"></script>
<script src="assets/scripts/custom.js"></script>
<script src="assets/scripts/jquery.superfish.js"></script>
<script src="assets/scripts/jquery.themepunch.tools.min.js"></script>
<script src="assets/scripts/jquery.themepunch.revolution.min.js"></script>
<script src="assets/scripts/jquery.themepunch.showbizpro.min.js"></script>
<script src="assets/scripts/jquery.flexslider-min.js"></script>
<script src="assets/scripts/chosen.jquery.min.js"></script>
<script src="assets/scripts/jquery.magnific-popup.min.js"></script>
<script src="assets/scripts/waypoints.min.js"></script>
<script src="assets/scripts/jquery.counterup.min.js"></script>
<script src="assets/scripts/jquery.jpanelmenu.js"></script>
<script src="assets/scripts/stacktable.js"></script>


</body>
</html>
