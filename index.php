<?php
require_once("includes/initialize.php");
// Meta
$title = "";
$description = "";
$keywords = "";

require_once('includes/headerMain.php');

if (SERVERTYPE === 'dev') {
  echo '<span style="position: absolute; color: #fff">dev</span>';
}

?>
        <!--Slider Area Start-->
        <div class="slider-area">
          <div class="theme-default">
            <!-- <div id="nivoslider" class="slides"> -->
              <div id="nivoslider" class="slides nivoSlider">
                    <!-- <a href="#"><img src="img/slider/slider-1.jpg" alt="" title="#slider-1-caption1"/></a> -->
					
                    <a href="#"><img src="images/mountain/mountain.jpg" alt="" title="#slider-1-caption1"/></a>
                    <a href="#"><img src="images/2_bears/2-bears-in-road.jpg" alt="" title="#slider-1-caption-2"/></a>
                </div>
                <div id="slider-1-caption1" class="nivo-html-caption nivo-caption">
                    <div class="banner-content slider-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-content" >
                                        <h1 class="title1">Brown Bear Lodge</h1>
                                        <h2 class="sub-title">putting the Last Frontier</h2>
                                        <h2 class="sub-title">at your <span>fingertips!</span></h2>
                                        <!--
                                        <form action="#" id="banner-searchbox" class="hidden-xs">
                                            <div class="adventure-cat">
                                                <select name="category" class="search-adventure">
                                                    <option>Select Adventure</option>
                                                    <option>Bungee jumping</option>
                                                    <option>Bicycle touring</option>
                                                    <option>Jungle tourism</option>
                                                    <option>Shark tourism</option>
                                                    <option>Mountain biking</option>
                                                    <option>Mountaineering</option>
                                                    <option>Rock Adventure</option>
                                                </select>
                                            </div>
                                            <div class="adventure-cat destination">
                                                <select name="destination" class="search-adventure">
                                                    <option>Select Your Destination</option>
                                                    <option>Madagascar</option>
                                                    <option>Botswana</option>
                                                    <option>Canada, Alaska</option>
                                                    <option>Antarctica</option>
                                                    <option>Swaziland</option>
                                                    <option>Ethiopia</option>
                                                    <option>Tanzania</option>
                                                </select>
                                            </div>
                                            <div class="adventure-cat floatright">
                                                <select name="date" class="search-adventure">
                                                    <option>Select Date</option>
                                                    <option>1-4-2016</option>
                                                    <option>5-9-2016</option>
                                                    <option>3-10-2016</option>
                                                    <option>15-2-2017</option>
                                                    <option>22-7-2017</option>
                                                    <option>10-8-2017</option>
                                                    <option>7-11-2017</option>
                                                    <option>9-12-2017</option>
                                                </select>
                                            </div>
                                            <div class="clearfix"></div>
                                            <button type="submit" id="btn-search-category">SEARCH</button>
                                        </form>
                                        -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Slider Area-->



        <!--Service Area Start-->
		<div class="section-title text-center">
          <div class="title-border">
            <h1><span>What We Do</span></h1>
          </div>
		 <div><h4>Brown Bear Lodge offers a small variety of experiences to enjoy in Alaska, with hopes of expanding in the near future.</h4></br></br>
		<p> <h2>We currently offer:<h2></p>
					<p style="font-size:60%;" class="col-md-8 " align="right">.Wildlife/Brown Bear Excursions</p>
					<p style="font-size:60%;" class="col-md-8 " align="right">.Stream Fishing</p>
					<p style="font-size:60%;" class="col-md-8 " align="right">.In-town Lodging</p><br/>
					<p style="font: italic bold 12px/30px Georgia, serif;"  class="col-md-8" align="right">Keep checking back for up-to-date information on upcoming excursion opportunities. </p>
					</div>
        </div>
        <div class="service-area section-padding text-center">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-md-2 col-sm-3">
                        <div class="single-service">
                            <div class="single-icon">
                                <img src="img/icon/1.png" class="primary-img" alt="">
                                <img src="img/icon/1-hover.png" class="secondary-img" alt="">
                            </div>
                            <h5>Cycling</h5>
                        </div>
                    </div> -->
					<form action="" method="POST">
                    <div class="col-md-3 col-sm-3">
                        <div class="single-service">
                            <div class="single-icon">
                                <img src="img/icon/2.png" class="primary-img" alt="">
                                <img src="img/icon/2-hover.png" class="secondary-img" alt="">
                            </div>
                            <h5>Family</h5>
                        </div>
                    </div>
					
                    <div class="col-md-3 col-sm-3" onClick="javascript:document.location.href='lodging.php';" >
                        <div class="single-service">
                            <div class="single-icon">
                                <img src="img/icon/bed.png" class="primary-img" alt="" width="57" height="57">
                                <img src="img/icon/bed-hover.png" class="secondary-img" alt="" width="57" height="57">								
                            </div>
                            <h5>Lodging</h5>
                        </div>
						</div>
                   
					
                    <!-- <div class="col-md-2 col-sm-3">
                        <div class="single-service">
                            <div class="single-icon">
                                <img src="img/icon/4.png" class="primary-img" alt="">
                                <img src="img/icon/4-hover.png" class="secondary-img" alt="">
                            </div>
                            <h5>sailing</h5>
                        </div>
                    </div> -->
					
                    <div class="col-md-3 col-sm-3" onClick="javascript:document.location.href='excursion.php';">
                        <div class="single-service">
                            <div class="single-icon">
                                <img src="img/icon/5.png" class="primary-img" alt="">
                                <img src="img/icon/5-hover.png" class="secondary-img" alt="">
                            </div>
                            <h5>Excursion</h5>
                        </div>
                    </div>
					
                    <div class="col-md-3 col-sm-3 " onClick="javascript:document.location.href='wildlife.php';"> 
                        <div class="single-service">
                            <div class="single-icon">
                                <img src="img/icon/6.png" class="primary-img" alt="">
                                <img src="img/icon/6-hover.png" class="secondary-img" alt="">
                            </div>
                            <h5>Wildlife</h5>
                        </div>
                    </div>
					</form>
                </div>
            </div>
        </div>
        <!--End of Service Area-->


        <!--Footer Widget Area Start-->
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-4">
                        <div class="single-footer-widget contact-text-info">
                            <h4>Contact Us</h4>
                            <div class="footer-widget-list">
                                <ul>
                                  <li class="icon send">700 Airport Road<br>P.O. BOX 377</li>
                                    <li class="icon envelope">admin@power-boosts.com</li>
                                    <li class="icon phone">907-209-0722</li>
                                    <li class="icon phone">907-945-3150</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 hidden-sm">
                        <div class="single-footer-widget">
                            <h4>About Us</h4>
                            <div class="footer-widget-list">
                                <ul class="widget-lists">
                                    <li><a href="aboutus.php">Why Us</a></li>
                                    <li><a href="#">Our trips</a></li>
                                    <li><a href="#">Responsible Business</a></li>
                                    <li><a href="#">Our History</a></li>
                                    <li><a href="#">Our Core Values</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
<!--
                    <div class="col-lg-2 hidden-md hidden-sm">
                        <div class="single-footer-widget">
                            <h4>Design Themes</h4>
                            <div class="footer-widget-list">
                                <ul class="widget-lists">
                                    <li><a href="#">Africa</a></li>
                                    <li><a href="#">Asia</a></li>
                                    <li><a href="#">Central America</a></li>
                                    <li><a href="#">Europe</a></li>
                                    <li><a href="#">Middle East</a></li>
                                    <li><a href="#">North America</a></li>
                                    <li><a href="#">Oceania</a></li>
                                    <li><a href="#">South America</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
 -->
                    <div class="col-lg-2 col-md-3 col-sm-3">
                        <div class="single-footer-widget">
                            <h4>Destinations</h4>
                            <div class="footer-widget-list">
                                <ul class="widget-lists">
                                    <li><a href="#">Adventure</a></li>
                                    <li><a href="#">Hiking and Camping</a></li>
                                    <li><a href="#">Walking and Trekking</a></li>
                                    <!-- <li><a href="#">Safari Trip</a></li> -->
                                    <li><a href="#">Polar</a></li>
                                    <!-- <li><a href="#">Sailing</a></li> -->
                                    <!-- <li><a href="#">Climbing</a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-widget">
                            <h4>Latest Tweets</h4>
                            <div class="footer-widget-list twitter-news">
                                <ul>
                                    <li><a href="#">@Power-Boosts</a> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremq-ue laudantium. <a href="#">Power-Boosts.com/building-a-website</a></li>
                                    <li><a href="#">@Power-Boosts</a> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremq-ue laudantium. <a href="#">Power-Boosts.com/building-a-website</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="footer-link">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-rss"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="payment-image">
                            <img src="img/payment.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Footer Widget Area-->




<?php require_once('includes/footerMain.php') ?>
