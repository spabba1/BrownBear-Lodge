<?php
require_once("includes/initialize.php");
// Meta
$pagename = "Lodging";
$title = "";
$description = "";
$keywords = "";

require_once('includes/headerMain.php');

if (SERVERTYPE === 'dev') {
  echo '<span style="position: absolute; color: #fff">dev</span>';
}

?>
        <!--Banner Area Start-->
        <div class="banner-area blog-one">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <div class="title-border">
                                <h1>Lodging</h1>
                            </div>
                            <p class="text-white">At Brown Bear lodge we are dedicated to and passionate about sharing the unrivaled beauty of our home with you. Our only goal is for you to have the time of your life and the best adventure possible. We strive to accomodate you so your experience can be exactly what you want it to be - and we know you won't regret it!</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="lodging.php">Lodging</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Banner Area-->
        <!--Blog Post Area Start-->
        <div class="blog-post-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="single-blog-post blog-post-details">
                            <div class="single-blog-post-img">
                                <!-- <a href="#"><img src="img/blog/large-1.jpg" alt=""></a> -->
                                <!-- <div class="date-time">
                                    <span class="date">10</span>
                                    <span class="month">AUG</span>
                                </div> -->
                            </div>
                            <div class="single-blog-post-text">
                                <h4>Welcome to Brown Bear Lodge!</h4>
                                <p>The Brown Bear Lodge gives the perfect, cozy, quality homemade touch to top off your true Southeast Alaskan experience in Hoonah, Alaska. Our guest rooms feature a queen-sized bed, private bathroom, comfortable couch, and a variety of amenities, including DirecTV, internet access, table, fridge, and more. Our rooms have a private entrance door accessible from outside, and an internal door accessible through the lodge’s main living room and kitchen.</p>
                 
				 <div class="col-md-3 col-sm-7">
<div class="theme-default">				
				<div id="nivoslider" class="slides nivoSlider">
                    <!-- <a href="#"><img src="img/slider/slider-1.jpg" alt="" title="#slider-1-caption1"/></a> -->
					
						  
					<a href="#"><img src="img/curiously-bear.jpg" alt="" title="#slider-1-caption1"/></a>
                    <a href="#"><img src="images/lodging/lodging1.jpg" alt="" title="#slider-1-caption-2"/></a>
					<a href="#"><img src="images/lodging/lodging2.jpg" alt="" title="#slider-1-caption-3"/></a></div>
					</div>
					                
                    </div>
			    </div>                               
							   
								<a href="contact.php"><h1 style="color:skyblue;" autofocus>Book your trip today!</h1></a>
								<form method="link" action="contact.php"><input type="submit" value="Book your trip today!" /></form>
								Due to the seasonal nature of our excursions, availability is limited. Contact Brown Bear Lodge as early as possible to make reservations and ensure that your trip to Alaska is an unforgettable one. During the tourist season, our schedule fills quickly, so don't wait - book with Brown Bear Lodge today. 
                                <p style="font: italic bold 12px/30px Georgia, serif;" class="dark-bold">Please give us a call if you wish to book a room or hear more about the Brown Bear Lodge (907)-945-3150.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Blog Post Area -->




<?php require_once('includes/footerMain.php') ?>
