<?php
	session_start();
	require_once 'dbconnect.php';
	
	if(isset($_SESSION['user']))
	{
		$res = mysqli_query($con, "SELECT * FROM user WHERE UserID=".$_SESSION['user']);
		$userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);
	}
?>
<div class="ct-menuMobile">
    <div class="search-button ct-u-backgroundBlack2">
        <a href="login.php" class="btn btn-accent">SIGNUP/LOGIN</a>
    </div>
    <ul class="ct-menuMobile-navbar">
        <li class="active"><a href="index.php">Home</a></li>
		
        <li class="panel-title"><a href="#about" role="button" data-toggle="collapse" aria-expanded="true"
                                   aria-controls="about"><span>Services</span><span class="caret"></span></a>
            <div id="about" class="panel-collapse collapse" role="tabpanel"
                 aria-expanded="true">
                <ul class="list-group">
                    <li><a href="service_req.php">Book a Servicing</a></li>
                    <li><a href="24x7.php">24x7 Road Assistance</a></li>
                    <li><a href="#">Get your Vehicle Insured</a></li>
                    <li><a href="#">RTO Registration</a></li>
                </ul>
            </div>
        </li>
		
		<li class=""><a href="24x7.php">Assistance</a></li>
		<li class=""><a href="#">Coupons</a></li>
		<li class=""><a href="faq.php">Faq</a></li>
		
        <li class="panel-title"><a href="#services" role="button" data-toggle="collapse" aria-expanded="true"
                                   aria-controls="services">
            <span>About us</span><span class="caret"></span></a>
            <div id="services" class="panel-collapse collapse" role="tabpanel"
                 aria-expanded="true">
                <ul class="list-group">
                     <li><a href="about-us.php">Who we are</a></li>
                     <li><a href="history.php">Our history</a></li>
                     <li><a href="team.php">Meet the team</a></li>
                     <li><a href="reviews.php">Reviews</a></li>
                </ul>
            </div>
        </li>
     
        <li class=""><a href="#">Contact us</a></li>
    </ul>
</div>


