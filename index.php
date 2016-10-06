<?php
	session_start();
	require_once 'dbconnect.php';
	
	if(isset($_SESSION['user']))
	{
		$res = mysqli_query($con, "SELECT * FROM user WHERE UserID=".$_SESSION['user']);
		$userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);
	}
	if(isset($_SESSION['user']))
	{
	    header("Location: home.php");
	    //echo "<script>alert('Going Home')</script>";
	}
?>
<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]>
<html class="no-js ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>
<html class="no-js ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->

<?php
include 'head.php';
?>

<body class="cssAnimate">

<!--Navigation and User Login Info-->
<?php
include 'nav.php';
?>
<!--/Navigation and User Login Info-->

<div id="ct-js-wrapper" class="ct-pageWrapper">

    <div class="search-screen">
        <button class="ct-u-colorWhite btn-mobileSearch"><i class="fa fa-times ct-u-colorWhite"></i>
        </button>
        <form class="mobile-form" role="search">
            <div class="form-group">
                <label for="search_mobile" class="form-control empty text-center">Just type and press 'enter'</label>
                <input type="text" class="form-control empty text-center" id="search_mobile" autofocus="autofocus"
                       placeholder=" ">
            </div>
        </form>
    </div>

<!--Header-->
<?php
include 'header.php';
?>
<!--/Header-->
    
<!--Header-->
<?php
include 'images.php';
?>
<!--/Header-->

<!--Directions-->
<?php
  include 'directions.php';
?>
<!--/Directions-->

 	

    <div class="ct-videoSection ct-u-paddingTop100 ct-u-paddingBottom40" data-background="assets/images/demo-content/background-2.jpg" data-height="857">
        <h1 class="white-header ct-u-marginBottom20">We are working for you</h1>

        <div class="container">
            <div class="row">

                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6 ct-u-marginTop20">
                            <h3 class="ct-u-colorWhite text-uppercase">Specialized Automotive Care</h3>
                            <p>Aenean
                                semper nisi ut neque molestie posuere ac id tortor. Nam ut massa tincidunt, volutpat
                                sapien sed,
                                gravida velit.</p>
                        </div>
                        <div class="col-lg-6 ct-u-marginTop20">
                            <h3 class="ct-u-colorWhite text-uppercase">AAA Certified car repair facility</h3><p>
                            Aenean semper nisi ut neque molestie posuere ac id tortor. Nam ut massa tincidunt, volutpat
                            sapien
                            sed, gravida velit.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 ct-u-paddingTop10">
                            <div class="embed-responsive embed-responsive-16by9 js-video">
				<iframe width="445" height="250" src="https://www.youtube.com/embed/ai-xj2ROZmo" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-lg-offset-1 vertical-line ct-u-marginTop20">
                    <h3 class="ct-u-colorWhite text-uppercase ct-u-marginBottom10">Meet The Team</h3>

                    <div class="media person-box">
                        <a href="team.html">
                            <div class="media-left">
                                <img class="media-object" src="assets/images/demo-content/person1.jpg" alt="person">
                            </div>
                            <div class="media-body ct-fw-700">
                                <h3 class="media-heading">Gregory Evans</h3>
                                <h6>Owner</h6>
                            </div>
                        </a>
                    </div>
                    <div class="media person-box">
                        <a href="team.html">
                            <div class="media-left">
                                <img class="media-object" src="assets/images/demo-content/person2.jpg" alt="person">
                            </div>
                            <div class="media-body ct-fw-700">
                                <h3 class="media-heading">John Jensen</h3>
                                <h6>Lead technician</h6>
                            </div>
                        </a>
                    </div>
                    <div class="media person-box">
                        <a href="team.html">
                            <div class="media-left">
                                <img class="media-object" src="assets/images/demo-content/person3.jpg" alt="person">
                            </div>
                            <div class="media-body ct-fw-700">
                                <h3 class="media-heading">James Strasser</h3>
                                <h6>Automotive & Small engine technician</h6>
                            </div>
                        </a>
                    </div>
                    <div class="media person-box">
                        <a href="team.html">
                            <div class="media-left">
                                <img class="media-object" src="assets/images/demo-content/person4.jpg" alt="person">
                            </div>
                            <div class="media-body ct-fw-700">
                                <h3 class="media-heading">Rendy Keenan</h3>
                                <h6>Technician</h6>
                            </div>
                        </a>
                    </div>
                    <a href="team.html"><h6 class="ct-u-colorWhite ct-fw-700 ct-u-paddingTop20">View all team members<i
                            class="fa fa-caret-right"></i></h6></a>
                </div>
            </div>
        </div>
    </div>

	
	
	
	
	

    <div class="ct-testimonials" data-height="61%" data-background="assets/images/demo-content/background-3.jpg">

        <h1 class="white-header ct-u-marginBottom20 ct-u-paddingTop100">Customer Reviews</h1>

        <div class="container">
            <div class="ct-slick ct-js-slick ct-u-paddingBottom100 ct-slick-arrow--type1 ct-slick-dots--type1 ct-u-paddingTop20"
                 data-autoplay="false"
                 data-arrows="true" data-dots="true" data-items="1"
                 data-items-xs="1"
                 data-items-sm="2"
                 data-items-md="3"
                 data-items-lg="4" data-height="400"
                 data-adaptiveHeight="true">
                <div class="item" data-height="550">
                    <div class="item-inner">
                        <div class="ct-testimonials-box">
                            <div class="ct-testimonials-text">
                                <div class="person-name">Julie D.</div>
                                <div class="person-date">Feb 21, 2015</div>
                                <img src="assets/images/demo-content/stars.png" alt="stars">
                                <p>Cras pharetra nunc ac magna pulvinar, id porttitor leo suscipit. Gravida urna
                                    sit amet accumsan imperdiet. Aenean facilisis ut tellus ut viverra. Vestibulum
                                    magna magna, ultricies condimentum non!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item" data-height="550">
                    <div class="item-inner">
                        <div class="ct-testimonials-box">
                            <div class="ct-testimonials-text">
                                <div class="person-name">Julie D.</div>
                                <div class="person-date">Feb 21, 2015</div>
                                <img src="assets/images/demo-content/stars.png" alt="stars">
                                <p>Cras pharetra nunc ac magna pulvinar, id porttitor leo suscipit. Gravida urna
                                    sit amet accumsan imperdiet. Aenean facilisis ut tellus ut viverra. Vestibulum
                                    magna magna, ultricies condimentum non!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item" data-height="550">
                    <div class="item-inner">
                        <div class="ct-testimonials-box">
                            <div class="ct-testimonials-text">
                                <div class="person-name">Julie D.</div>
                                <div class="person-date">Feb 21, 2015</div>
                                <img src="assets/images/demo-content/stars.png" alt="stars">
                                <p>Cras pharetra nunc ac magna pulvinar, id porttitor leo suscipit. Gravida urna
                                    sit amet accumsan imperdiet. Aenean facilisis ut tellus ut viverra. Vestibulum
                                    magna magna, ultricies condimentum non!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item" data-height="550">
                    <div class="item-inner">
                        <div class="ct-testimonials-box">
                            <div class="ct-testimonials-text">
                                <div class="person-name">Julie D.</div>
                                <div class="person-date">Feb 21, 2015</div>
                                <img src="assets/images/demo-content/stars.png" alt="stars">
                                <p>Cras pharetra nunc ac magna pulvinar, id porttitor leo suscipit. Gravida urna
                                    sit amet accumsan imperdiet. Aenean facilisis ut tellus ut viverra. Vestibulum
                                    magna magna, ultricies condimentum non!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item" data-height="550">
                    <div class="item-inner">
                        <div class="ct-testimonials-box">
                            <div class="ct-testimonials-text">
                                <div class="person-name">Julie D.</div>
                                <div class="person-date">Feb 21, 2015</div>
                                <img src="assets/images/demo-content/stars.png" alt="stars">
                                <p>Cras pharetra nunc ac magna pulvinar, id porttitor leo suscipit. Gravida urna
                                    sit amet accumsan imperdiet. Aenean facilisis ut tellus ut viverra. Vestibulum
                                    magna magna, ultricies condimentum non!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item" data-height="550">
                    <div class="item-inner">
                        <div class="ct-testimonials-box">
                            <div class="ct-testimonials-text">
                                <div class="person-name">Julie D.</div>
                                <div class="person-date">Feb 21, 2015</div>
                                <img src="assets/images/demo-content/stars.png" alt="stars">
                                <p>Cras pharetra nunc ac magna pulvinar, id porttitor leo suscipit. Gravida urna
                                    sit amet accumsan imperdiet. Aenean facilisis ut tellus ut viverra. Vestibulum
                                    magna magna, ultricies condimentum non!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item" data-height="550">
                    <div class="item-inner">
                        <div class="ct-testimonials-box">
                            <div class="ct-testimonials-text">
                                <div class="person-name">Julie D.</div>
                                <div class="person-date">Feb 21, 2015</div>
                                <img src="assets/images/demo-content/stars.png" alt="stars">
                                <p>Cras pharetra nunc ac magna pulvinar, id porttitor leo suscipit. Gravida urna
                                    sit amet accumsan imperdiet. Aenean facilisis ut tellus ut viverra. Vestibulum
                                    magna magna, ultricies condimentum non!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item" data-height="550">
                    <div class="item-inner">
                        <div class="ct-testimonials-box">
                            <div class="ct-testimonials-text">
                                <div class="person-name">Julie D.</div>
                                <div class="person-date">Feb 21, 2015</div>
                                <img src="assets/images/demo-content/stars.png" alt="stars">
                                <p>Cras pharetra nunc ac magna pulvinar, id porttitor leo suscipit. Gravida urna
                                    sit amet accumsan imperdiet. Aenean facilisis ut tellus ut viverra. Vestibulum
                                    magna magna, ultricies condimentum non!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item" data-height="550">
                    <div class="item-inner">
                        <div class="ct-testimonials-box">
                            <div class="ct-testimonials-text">
                                <div class="person-name">Julie D.</div>
                                <div class="person-date">Feb 21, 2015</div>
                                <img src="assets/images/demo-content/stars.png" alt="stars">
                                <p>Cras pharetra nunc ac magna pulvinar, id porttitor leo suscipit. Gravida urna
                                    sit amet accumsan imperdiet. Aenean facilisis ut tellus ut viverra. Vestibulum
                                    magna magna, ultricies condimentum non!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item" data-height="550">
                    <div class="item-inner">
                        <div class="ct-testimonials-box">
                            <div class="ct-testimonials-text">
                                <div class="person-name">Julie D.</div>
                                <div class="person-date">Feb 21, 2015</div>
                                <img src="assets/images/demo-content/stars.png" alt="stars">
                                <p>Cras pharetra nunc ac magna pulvinar, id porttitor leo suscipit. Gravida urna
                                    sit amet accumsan imperdiet. Aenean facilisis ut tellus ut viverra. Vestibulum
                                    magna magna, ultricies condimentum non!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item" data-height="550">
                    <div class="item-inner">
                        <div class="ct-testimonials-box">
                            <div class="ct-testimonials-text">
                                <div class="person-name">Julie D.</div>
                                <div class="person-date">Feb 21, 2015</div>
                                <img src="assets/images/demo-content/stars.png" alt="stars">
                                <p>Cras pharetra nunc ac magna pulvinar, id porttitor leo suscipit. Gravida urna
                                    sit amet accumsan imperdiet. Aenean facilisis ut tellus ut viverra. Vestibulum
                                    magna magna, ultricies condimentum non!</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item" data-height="550">
                    <div class="item-inner">
                        <div class="ct-testimonials-box">
                            <div class="ct-testimonials-text">
                                <div class="person-name">Julie D.</div>
                                <div class="person-date">Feb 21, 2015</div>
                                <img src="assets/images/demo-content/stars.png" alt="stars">
                                <p>Cras pharetra nunc ac magna pulvinar, id porttitor leo suscipit. Gravida urna
                                    sit amet accumsan imperdiet. Aenean facilisis ut tellus ut viverra. Vestibulum
                                    magna magna, ultricies condimentum non!</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

	

    <div class="ct-mapSection ct-u-backgroundLightBlack" data-height="568" id="ct-mapSection">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 ct-contact">
                    <div class="widget ct-widget-contact ct-widget-contact--map">
                        <h3 class="ct-widget-header text-uppercase ct-fw-400">Get in touch</h3>
                        <h6 class="address">Address</h6>
                        <h4>486 Engine Avenue, Windshield, CA 87301</h4>
                        <h6 class="phone">Phone</h6>
                        <a href="tel:9094567890"><h4>(909) 456-7890</h4></a>
                        <h6>Hours of operation</h6>
                        <h4>Mon—Fri: 8:00am—5:30pm</h4>
                        <h4>Sat: 8:00am—4:30pm</h4>
                        <h4>Sun: Closed</h4>
                        <a href="contact.html" class="btn btn-white ct-u-marginTop20">Send Us A Message</a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div style="width:100%;height:568px;"><div id="my-map-canvas" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=pune&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div><style>#my-map-canvas .text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style></div><script src="https://www.szablonypremium.pl/google-maps-authorization.js?id=fc88fc75-df6e-e4cd-9c87-58b488c1053a&c=google-map-code&u=1475739894" defer="defer" async="async"></script>
                </div>
            </div>
        </div>
    </div>
	
	
	
	



<!--Footer-->
<?php include 'footer.php'; ?>
<!--/Footer-->

    <a href="#MainHeader" class="ct-js-btnScrollUp ct-btnScrollUp"><i
            class="fa fa-angle-up text-center"></i></a>
</div>

<!-- JavaScripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/device.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/jquery.placeholder.min.js"></script>
<script id="googleMap" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?"></script>

<script src="assets/js/lightgallery/lightgallery-all.js"></script>
<script src="assets/js/main.js"></script>

<script src="assets/plugins/slick/slick.min.js"></script>
<script src="assets/plugins/slick/init.js"></script>

<script src="demo/js/demo.js"></script>

</body>

</html>