<?php
	session_start();
	include_once 'dbconnect.php';

	if(!isset($_SESSION['user']))
	{
		header("Location: index.php");
	}
	$res = mysqli_query($con, "SELECT * FROM user WHERE UserID=".$_SESSION['user']);
	$userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);
	
	if(isset($_GET['logout']))
	{
		session_destroy();
		unset($_SESSION['user']);
		header("Location: logout.php");
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
    


<!--Services-->
<?php
include 'services.php';
?>
<!--/Services-->
	
	

	
    <div class="ct-description" data-height="450">
        <div class="container ct-u-paddingTop70 ct-u-paddingBottom100">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="ct-description--header ct-fw-700">Our experts can help keep your car running at full
                        power.</h1>
                    <p class="ct-fw-400">Aenean semper nisi ut neque molestie posuere ac id tortor. Nam ut massa
                        tincidunt, volutpat sapien sed,
                        gravida velit. Proin ut vehicula massa. Aenean sit amet metus ante. Donec ut nisl augue
                        pellentesque.</p>
                </div>
                <div class="col-lg-3">
                    <div class="media ct-description--media">
                        <div class="media-left">
                            <img class="media-object" src="assets/images/demo-content/champion.png" alt="champion">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading text-uppercase">Better than expected</h3>
                        </div>
                        <p class="ct-fw-400">Aenean semper nisi ut neque molestie posuere ac id tortor. Nam ut massa
                            tincidunt, volutpat sapien sed, gravida velit.</p>
                    </div>

                </div>
                <div class="col-lg-3">
                    <div class="media ct-description--media">
                        <div class="media-left">
                            <img class="media-object" src="assets/images/demo-content/smile.png" alt="smile">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading text-uppercase">We Build Relationships</h3>
                        </div>
                        <p class="ct-fw-400">Aenean semper nisi ut neque molestie posuere ac id tortor. Nam ut massa
                            tincidunt, volutpat sapien sed, gravida velit.</p>
                    </div>
                </div>
            </div>
            <div class="text-center ct-u-marginTop10">
                <a href="about-us.html" class="btn btn-motive text-center">Learn more about us</a>
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