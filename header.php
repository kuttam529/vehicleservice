<?php
	session_start();
	require_once 'dbconnect.php';
	
	if(isset($_SESSION['user']))
	{
		$res = mysqli_query($con, "SELECT * FROM user WHERE UserID=".$_SESSION['user']);
		$userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);
	}
?>
<header class="ct-mainHeader" id="MainHeader">

        <div class="ct-topBar">
            <div class="navbar ct-topBar-container">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-5 ct-u-marginBoth40 nav-logo">
                            <a href="index.php" class="navbar-logo">
                                <img src="assets/images/demo-content/logo.png" alt="Logo">
                            </a>
                        </div>

                        

                       
						
		<?php
		if(isset($_SESSION['user']))
		{
		?>

			<div class="col-lg-3 visible-lg ct-u-marginBoth40" style="float:right">
			<p style="color:blue"><?php echo $userRow['Fname']; echo " ";echo $userRow['Lname']; ?></p>
             <div class="btn-group">
                 <a href="logout.php" class="btn"><img src="assets/images/demo-content/send.png" alt="send"></a>
                 <a href="logout.php" class="btn btn-accent">
                    LOGOUT
                 </a>
             </div>
           </div>
		<?php
		}
		else{
		?>

			<div class="col-lg-3 visible-lg ct-u-marginBoth40" style="float:right">
             <div class="btn-group">
                 <a href="login.php" class="btn"><img src="assets/images/demo-content/send.png" alt="send"></a>
                 <a href="login.php" class="btn btn-accent">
                    SIGNUP/LOGIN
                 </a>
             </div>
           </div>
			<?php
		}
		?>
		
		<div class="col-lg-4 visible-lg ct-u-marginBoth40" style="float:right">
                            <div class="media contact">
                                <div class="media-left">
                                    <a href="tel:9094502735">
                                        <img class="media-object" src="assets/images/demo-content/contact.png" alt="contact">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="tel:1800-78459078" class="media-right">
                                        <h4 class="ct-u-colorMotive text-uppercase"> Call us now</h4>
                                        <h1 class="ct-u-colorBlack">1800-78459078</h1>
                                    </a>
                                </div>
                            </div>
                        </div>
						
                        <div class="col-xs-6 col-xs-offset-1 visible-xs">
                            <button class="navbar-toggle ct-u-colorBlack" id="ct-js-search-button"><i
                                    class="fa fa-bars ct-u-colorWhite"></i></button>
                            
                        </div>

                        <div class="col-md-3 col-md-offset-7 col-sm-3 col-sm-offset-3 col-xs-12 hidden-lg ct-header-contact">
                            <ul class="list-unstyled list-inline">
                                <li>
                                    <a href="tel:9094502735">
                                        <i class="fa fa-phone"></i>
                                    </a>
                                </li>
                               
                                <li>
                                    <a href="login.php">
                                        <i class="fa fa-envelope-o"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar ct-u-backgroundLightGray hidden-xs">
            <div class="container ct-navbar-container">

                <div class="row">

                    <ul class="navbar-left ct-u-paddingBoth20 col-lg-9">
                        <li class="active"><a href="index.php"><span>Home</span></a></li>

                        <li class="dropdown"><a href="#" data-toggle="dropdown"
                                                class="dropdown-toggle"><span>Services</span><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="service_req.php">Book a Servicing</a></li>
                                <li><a href="24x7.php">24x7 Road Assistance</a></li>
                                <li><a href="#">Get your Vehicle Insured</a></li>
                                <li><a href="#">RTO Registration</a></li>
                            </ul>
                        </li>
                        <li><a href="24x7.php"><span>Assistance</span></a></li>
						
                        <li><a href="#"><span>Coupons</span></a></li>
                        <li><a href="faq.php"><span>Faq</span></a></li>
                       
                        
						<li class="dropdown"><a href="#" data-toggle="dropdown"
                                                class="dropdown-toggle"><span>About us</span><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="about-us.php">Who we are</a></li>
                                <li><a href="history.php">Our history</a></li>
                                <li><a href="team.php">Meet the team</a></li>
                                <li><a href="reviews.php">Reviews</a></li>
                            </ul>
                        </li>
						<li><a href="contact.html"><span>Contact us</span></a></li>
                    </ul>

                    <button class="btn-search ct-tablet-searcher"><i class="fa fa-search"></i></button>



                </div>
            </div>
        </nav>
    </header>