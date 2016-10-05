<?php
	session_start();
	include_once 'dbconnect.php';

	if(!isset($_SESSION['user']))
	{
		header("Location: login.php?page=assist");
		
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

<div class="ct-menuMobile">
    <div class="search-button ct-u-backgroundBlack2">
        <a href="appointments.html" class="btn btn-accent">Request an appointment</a>
    </div>
    <ul class="ct-menuMobile-navbar">
        <li class="active"><a href="index.html">Home</a></li>
        <li class="panel-title"><a href="#about" role="button" data-toggle="collapse" aria-expanded="true"
                                   aria-controls="about"><span>About us</span><span class="caret"></span></a>
            <div id="about" class="panel-collapse collapse" role="tabpanel"
                 aria-expanded="true">
                <ul class="list-group">
                    <li><a href="about-us.html">Who we are</a></li>
                    <li><a href="team.html">Team</a></li>
                    <li><a href="careers.html">Careers</a></li>
                </ul>
            </div>
        </li>
        <li class="panel-title"><a href="#services" role="button" data-toggle="collapse" aria-expanded="true"
                                   aria-controls="services">
            <span>Services</span><span class="caret"></span></a>
            <div id="services" class="panel-collapse collapse" role="tabpanel"
                 aria-expanded="true">
                <ul class="list-group">
                    <li><a href="services_overview.html">Services overview</a></li>
                    <li><a href="preventive_maintenance.html">Preventive Maintenance</a></li>
                    <li><a href="oil_change.html">Oil Change</a></li>
                    <li><a href="tires.html">Tires &amp; Tire Repair</a></li>
                    <li><a href="brakes.html">Brakes &amp; Brake Repair</a></li>
                    <li><a href="mufflers.html">Mufflers &amp; Exhaust</a></li>
                    <li><a href="steering.html">Steering &amp; Suspension</a></li>
                    <li><a href="batteries.html">Batteries, Starters &amp; Charging</a></li>
                    <li><a href="climate.html">Climate Control</a></li>
                    <li><a href="belts.html">Belts &amp; Hoses</a></li>
                    <li><a href="engine.html">Engine Cooling</a></li>
                    <li><a href="check_engine.html">Check Engine Light</a></li>
                    <li><a href="lights.html">Lights, Wipers &amp; Accessories</a></li>
                </ul>
            </div>
        </li>
        <li class=""><a href="appointments.html">Appointments</a></li>
        <li class=""><a href="coupons.html">Coupons</a></li>
        <li class=""><a href="faq.html">Faq</a></li>
        <li class="panel-title"><a href="#blog" role="button" data-toggle="collapse" aria-expanded="true"
                                   aria-controls="blog">
            <span>Blog</span><span
                class="caret"></span></a>
            <div id="blog" class="panel-collapse collapse" role="tabpanel"
                 aria-expanded="true">
                <ul class="list-group">
                    <li><a href="blog.html">Posts</a></li>
                    <li><a href="blog-post.html">Single post</a></li>
                </ul>
            </div>
        </li>
        <li class=""><a href="contact.html">Contact us</a></li>
    </ul>
</div>


<div id="ct-js-wrapper" class="ct-pageWrapper">

<!--Header-->
<?php
include 'header.php';
?>
<!--/Header-->


    <div class="ct-couponsSection ct-priceSection" data-height="600">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 ct-u-marginBoth50">
                    <div class="ct-mainContent">
                    <div class="headerSection">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                        </ol>

                        <h1 class="big-blackHeader">Request an appointment</h1>

                        <p class="subtitle">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus.</p>
                    </div>
                    </div>

                    <div class="successMessage alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <strong>Success!</strong> Congratulation, mission success
                    </div>

                    <div class="errorMessage alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <strong>Danger!</strong> You did something wrong
                    </div>

                    <form action="https://rota.html.themeplayers.net/assets/form/send.php" method="POST" data-email-subject="My Rota"
                          class="ct-js-validate ct-formAppointment">
                        <div class="form-header"><h4 class="text-uppercase">Personal information</h4></div>


                        <div class="form-group">
                            <label for="full_name" class="col-sm-2 control-label short-label">Full name
                                <span>*</span></label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control ct-input" id="full_name" placeholder=""
                                       data-placeholder="Full name" name="field[]" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label short-label">Email address
                                <span>*</span></label>

                            <div class="col-sm-10">
                                <input type="email" class="form-control ct-input" id="email" placeholder=""
                                       data-placeholder="Email address" name="field[]" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone_number" class="col-sm-2 control-label short-label">Phone
                                number <span>*</span></label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control ct-input ct-input--short"
                                       data-placeholder="Phone number" id="phone_number"
                                       placeholder="" name="field[]" required="required">
                            </div>
                        </div>

                        <div class="form-header"><h4 class="text-uppercase">Vehicle information</h4></div>


                        <div class="form-group">
                            <label for="year" class="col-sm-2 control-label short-label">Year <span>*</span></label>

                            <div class="col-sm-10">
                                <select class="form-control ct-input ct-input--short" id="year" data-placeholder="Year"
                                        name="field[]" required="required">
                                    <option value="">2011</option>
                                    <option>2012</option>
                                    <option>2013</option>
                                    <option>2014</option>
                                    <option>2015</option>
                                </select>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="model" class="col-sm-2 control-label short-label">Model <span>*</span></label>

                            <div class="col-sm-10">
                                <select class="form-control ct-input" id="model"
                                        data-placeholder="Model" name="field[]" required="required" data-target="submodel">
                                    <option disabled selected value="">Select model...</option>
                                    <option>Volkswagen</option>
                                    <option>Toyota</option>
                                    <option>Honda</option>
                                    <option>BMW</option>
                                    <option>Mercedes</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="submodel" class="col-sm-2 control-label short-label">Submodel</label>

                            <div class="col-sm-10">
                                <select class="form-control ct-input" id="submodel"
                                        data-placeholder="Submodel" disabled name="field[]">
                                    <option value="" disabled selected>Select submodel...</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mileage" class="col-sm-2 control-label short-label">Mileage</label>

                            <div class="col-sm-10">
                                <select class="form-control ct-input" id="mileage" data-placeholder="Mileage"
                                        name="field[]">
                                    <option value="" disabled selected>Select mileage...</option>
                                    <option>10000+</option>
                                    <option>50000+</option>
                                    <option>100000+</option>
                                    <option>200000+</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-header"><h4 class="text-uppercase">Appointment information</h4></div>


                        <div class="form-group ">
                            <label for="waiting" class="col-sm-2 control-label">Waiting
                                or&nbsp;Drop&nbsp;off&nbsp;<span>*</span></label>

                            <div class="col-sm-10">
                                <select class="form-control ct-input ct-input--medium" id="waiting"
                                        data-placeholder="Waiting or Drop" name="field[]" required="required">
                                    <option value="" disabled selected>Select an option...</option>
                                    <option>Waiting</option>
                                    <option>Drop off</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="date" class="col-sm-2 control-label short-label">Date <span>*</span></label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control ct-input ct-input--short datepicker" data-placeholder="Date"
                                       id="date"
                                       placeholder="" name="field[]" required="required">
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="time" class="col-sm-2 control-label short-label">Time<span>*</span></label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control ct-timepicker ct-input ct-input--short" data-placeholder="Time"
                                       id="time"
                                       placeholder="" name="field[]" required="required">
                            </div>
                        </div>

                        <div class="form-header"><h4 class="text-uppercase">Services requested</h4></div>


                        <div class="form-group">

                            <div class="container">
                                <div class="row">

                                    <div class="col-md-1 col-xs-12 label-services">
                                        <label class="label-checkbox">Services <span>*</span></label>
                                    </div>

                                    <div class="col-md-3">
                                        <ul>
                                            <li><label class="checkbox-inline">
                                                <input type="checkbox" value=""
                                                       data-placeholder="Preventive maintenance" name="field[]">
                                                Preventive maintenance
                                            </label></li>
                                            <li><label class="checkbox-inline">
                                                <input type="checkbox" value="" data-placeholder="Oil change"
                                                       name="field[]">
                                                Oil change
                                            </label></li>
                                            <li><label class="checkbox-inline">
                                                <input type="checkbox" value="" data-placeholder="Brakes & Brake repair"
                                                       name="field[]">
                                                Brakes & Brake repair
                                            </label></li>
                                            <li><label class="checkbox-inline">
                                                <input type="checkbox" value="" data-placeholder="Tires & Tire repair"
                                                       name="field[]">
                                                Tires & Tire repair
                                            </label></li>
                                            <li><label class="checkbox-inline">
                                                <input type="checkbox" value="" data-placeholder="Mufflers & Exhaust"
                                                       name="field[]">
                                                Mufflers & Exhaust
                                            </label></li>
                                            <li><label class="checkbox-inline">
                                                <input type="checkbox" value="" data-placeholder="Steering & Suspension"
                                                       name="field[]">
                                                Steering & Suspension
                                            </label></li>
                                            <li><label class="checkbox-inline">
                                                <input type="checkbox" value=""
                                                       data-placeholder="Batteries, Starters & Charging" name="field[]">
                                                Batteries, Starters & Charging
                                            </label></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <ul>
                                            <li><label class="checkbox-inline">
                                                <input type="checkbox" value="" data-placeholder="Engine cooling"
                                                       name="field[]">
                                                Engine cooling
                                            </label></li>
                                            <li><label class="checkbox-inline">
                                                <input type="checkbox" value="" data-placeholder="Climate control"
                                                       name="field[]">
                                                Climate control
                                            </label></li>
                                            <li><label class="checkbox-inline">
                                                <input type="checkbox" value="" data-placeholder="Check engine light"
                                                       name="field[]">
                                                Check engine light
                                            </label></li>
                                            <li><label class="checkbox-inline">
                                                <input type="checkbox" value="" data-placeholder="Belts & Hoses"
                                                       name="field[]">
                                                Belts & Hoses
                                            </label></li>
                                            <li><label class="checkbox-inline">
                                                <input type="checkbox" value=""
                                                       data-placeholder="Lights, Wipers & Accessories" name="field[]">
                                                Lights, Wipers & Accessories
                                            </label></li>
                                            <li><label class="checkbox-inline">
                                                <input type="checkbox" value="" data-placeholder="Other" name="field[]">
                                                Other
                                            </label></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="form-group">
                            <label for="desc" class="col-lg-2 col-md-2 col-sm-12 control-label">Describe service
                                request</label>

                            <div class="col-lg-10 col-md-10 col-sm-12">
                                <textarea class="form-control ct-input ct-input--wide" id="desc" data-placeholder="Describe service
                                request" placeholder="" name="field[]">
                                </textarea>
                            </div>
                        </div>

                        <div class="btn-group ct-u-paddingBoth20">
                            <button type="submit" class="btn btn-accent">schedule it now</button>
                        </div>

                        <div role="alert" class="successMessage alert alert-success alert-dismissible">
                            <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span
                                    aria-hidden="true">&times;</span>
                            </button>
                            Your Email has been sent successfully.
                        </div>
                        <div role="alert" class="errorMessage alert alert-danger alert-dismissible">
                            <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span
                                    aria-hidden="true">&times;</span>
                            </button>
                            Ups, something went wrong.
                        </div>

                    </form>


                </div>

                <div class="col-lg-3 ct-u-buttonRightSection">


                    <div class="ct-color-box ct-color-box--right-bottom hidden-md hidden-sm hidden-xs">
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

                    <div class="ct-color-box ct-color-box--right-bottom">
                        <div class="widget ct-widget-contact ct-u-paddingTop40">
                            <h3 class="ct-widget-header text-uppercase ct-fw-400">We’re certified</h3>

                            <div class="logos-box row">
                                <div class="col-lg-12 col-md-4 col-sm-4 col-xs-4"><img src="assets/images/demo-content/cert1.png" alt="Certificate 1">
                                </div>
                                <div class="col-lg-12 col-md-4 col-sm-4 col-xs-4"><img src="assets/images/demo-content/cert2.png" alt="Certificate 2">
                                </div>
                                <div class="col-lg-12 col-md-4 col-sm-4 col-xs-4"><img src="assets/images/demo-content/cert3.png" alt="Certificate 3">
                                </div>
                            </div>
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

<script src="assets/plugins/bootstrap-datapicker/js/bootstrap-datepicker.min.js"></script>
<script src="assets/js/timepicker/bootstrap-clockpicker.min.js"></script>

<script src="assets/js/main.js"></script>

<script src="assets/plugins/slick/slick.min.js"></script>
<script src="assets/plugins/slick/init.js"></script>

<script src="assets/form/js/contact-form.js"></script>

<!-- switcher -->
<script src="demo/js/demo.js"></script>
<!-- end switcher -->
</body>

</html>