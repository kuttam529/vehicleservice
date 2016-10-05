<?php
	session_start();
	include_once 'dbconnect.php';
	if(isset($_SESSION['user']))
	{
		header("Location: home.php");
	}
	else
	{
		mysqli_select_db($con, "lalaservice_db");
		if(isset($_POST['btn-signup']))
		{
			$fname = mysqli_real_escape_string($con, $_POST['fname']);
			$lname = mysqli_real_escape_string($con, $_POST['lname']);
			$uname = mysqli_real_escape_string($con, $_POST['uname']);
			$email = mysqli_real_escape_string($con, $_POST['email']);
			$mobNo = mysqli_real_escape_string($con, $_POST['mobNo']);
			$pass = md5(mysqli_real_escape_string($con, $_POST['pass']));
			
			$emailCheck  = mysqli_query($con, "SELECT `Email` FROM `user` WHERE `Email` = '".$_POST['email']."'");

			if(mysqli_num_rows($emailCheck)){
				?>
					<script>alert('Email already registered ');</script>
				<?php
				mysqli_close($con);
			}
			else {
				if(mysqli_query($con, "INSERT INTO user(Fname, Lname, Username, Email, MobNo, Password) VALUES('$fname', '$lname', '$uname','$email', '$mobNo', '$pass')"))
				{
					?>
						<script>alert('successfully registered ');</script>
					<?php
					mysqli_close($con);
					header( "Refresh:2; login.php", true, 303);
				}
				else
				{
					?>
						<script>alert('error while registering you...');</script>
					<?php
					mysqli_close($con);
				}
			}

			
		}
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

<!-- Mirrored from rota.html.themeplayers.net/contact.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 03 Oct 2016 19:21:56 GMT -->


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
                <input type="text" class="form-control empty text-center" id="search_mobile" placeholder="">
            </div>
        </form>
    </div>


<!--Header-->
<?php
include 'header.php';
?>
<!--/Header-->


    <div class="ct-couponsSection ct-priceSection" data-height="600">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 ct-u-marginBoth50">
                    <div class="headerSection">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Register</li>
                        </ol>
                    </div>
             
			 
			 <div id="login_form">
               <form action="login.php" method="POST" class="ct-formAppointment">
                        <div class="form-header"><h4 class="text-uppercase">Register</h4></div>

                        <div class="form-group">
                            <label for="full_name" class="col-sm-2 control-label short-label" >First Name <span>*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control ct-input" placeholder=""  name="fname" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="full_name" class="col-sm-2 control-label short-label" >Last Name <span>*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control ct-input" placeholder=""  name="lname" required="required">
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label short-label">Email address
                                <span>*</span></label>

                            <div class="col-sm-10">
                                <input type="email" class="form-control ct-input" id="email" placeholder=""
                                       data-placeholder="Email address" name="email" required="required">
                            </div>
                        </div>


                         <div class="form-group">
                            <label for="phone_number" class="col-sm-2 control-label short-label">Phone
                                number <span>*</span></label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control ct-input ct-input--short"
                                       data-placeholder="Phone number" id="phone_number"
                                       placeholder="" name="mobNo" required="required">
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="full_name" class="col-sm-2 control-label short-label">Username
                                <span>*</span></label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control ct-input" id="full_name" placeholder=""
                                       data-placeholder="Full name" name="uname" required="required">
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label short-label">Password <span>*</span></label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control ct-input" placeholder="" name="pass" required="required">
                            </div>
                        </div>                    

						
						<div class="btn-group ct-u-paddingBoth20">
                           <button type="submit" class="btn btn-accent" style="background-color: green;" name="btn-signup">Register</button>
                        </div>


                        <div role="alert" class="successMessage alert alert-success alert-dismissible">
                            <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true">&times;</span>
                            </button>Your Email has been sent successfully.
                        </div>
                        <div role="alert" class="errorMessage alert alert-danger alert-dismissible">
                            <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true">&times;</span>
                            </button>Ups, something went wrong.
                        </div>
                    </form>
                </div>
                </div>

                <div class="col-lg-3 ct-u-buttonRightSection hidden-md hidden-sm hidden-xs">


                    <div class="ct-color-box ct-color-box--right-bottom">
                        <div class="widget ct-u-marginTop50 widget-narrow widget-short-message">

                            <h4 class="widget-title">
                                GET IN TOUCH
                            </h4>

                            <ul>
                                <li>
                                    <h6 class="ct-message-title">
                                        Address
                                    </h6>

                                    <h4>
                                        486 ENGINE AVENUE WINDSHIELD, CA 87301
                                    </h4>
                                </li>

                                <li>
                                    <h6 class="ct-message-title">
                                        Phone
                                    </h6>

                                    <a href="tel:9094502735">
                                        <h4>
                                            909.450.2735
                                        </h4>
                                    </a>
                                </li>

                                <li>
                                    <h6 class="ct-message-title">
                                        HOURS OF OPERATION
                                    </h6>

                                    <div class="open-days">
                                        MON—FRI:
                                    </div>
                                    <div class="open-hours">
                                        8:00AM—5:30PM
                                    </div>
                                    <div class="open-days">
                                        SAT:
                                    </div>
                                    <div class="open-hours">
                                        8:00AM—4:30PM
                                    </div>
                                    <div class="open-days">
                                        SUN:
                                    </div>
                                    <div class="open-hours">
                                        CLOSED
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

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
<!-- ct-js-wrapper -->

<!-- JavaScripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/device.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/jquery.placeholder.min.js"></script>
<script id="googleMap" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?"></script>

<script src="assets/js/main.js"></script>

<script src="assets/plugins/slick/slick.min.js"></script>
<script src="assets/plugins/slick/init.js"></script>

<script src="assets/form/js/contact-form.js"></script>

<!-- switcher -->
<script src="demo/js/demo.js"></script>
<!-- end switcher -->
</body>

</html>