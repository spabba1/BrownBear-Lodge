<?php
require_once("includes/initialize.php");
// Meta
$pagename = "aboutus";
$title = "";
$description = "";
$keywords = "";

require_once('includes/headerMain.php');

if (SERVERTYPE === 'dev') {
  echo '<span style="position: absolute; color: #fff">dev</span>';
}
$dir = "images/bear";
$images = scandir($dir);
$i = rand(2, sizeof($images)-1);

?>
        <!--Banner Area Start-->
        <div class="banner-area blog-one">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <div class="title-border">
                                <h1>Brown Bear Lodge</h1>
                            </div>
                            <p class="text-white">Brown Bear Lodge - Putting the Last Frontier at your fingertips</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li>Lodging</li>
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
                                <h1>About Us</h1>
								<h2 style="color:skyblue;">Why Brown Bear Lodge?</h2>
                                <p>At Brown Bear lodge we are dedicated to and passionate about sharing the unrivaled beauty of our home with you. Our only goal is for you to have the time of your life and the best adventure possible. We strive to accomodate you so your experience can be exactly what you want it to be - and we know you won't regret it!</p>
                                <a href="images/bear/brown2.jpg" data-lightbox="bear"></a>
								<div class="col-md-3 col-sm-3">
								<img src="images/bear/brown2.jpg" class="primary-img" alt="">
								</div>
								<h2 style="color:skyblue;">Who We Are</h2>
								<h4 style="font-size:160%;">Kenny Meserve</h4>
								<p> Kenny is owner of Brown Bear Lodge in Hoonah, Alaska. He has lived in Southeast Alaska for over 30 years. </br> He has been a brown bear guide and charter boat captain for over 15, and has enjoyed hunting and angling all his life. </p>
								<h4 style="font-size:160%;">Phil Jones</h4>
								<p>Phil is the proclaimed naturalist of Brown Bear lodge. Taking the position of stream fishing and wildlife excursion guide, he is truly an expert at what he does, with over 45 years of angling experience.</p>
                                <h4 style="font-size:160%;">Abby Huskey</h4>
								<p>Abby is Phil's daughter, and the media designer for Brown Bear Lodge. She manages the web page and written media. She shoots and edits all pictures courtesy of Great Raven Photography. </p>
								</br>
								</br>
								<div class="single-blog-post-text">
								<div class="col-md-3 col-sm-3">
								<img src="images/bear/<?php echo $images[$i]; ?>" alt="" />
								</div>
								<p class="dark-bold">Please give us a call if you wish to book a room or hear more about the Brown Bear Lodge (907)-945-3150.</p>
								<p>Brown Bear Lodge</br>700 Airport Road</br>P.O. Box 377</br>Hoonah, AK 99829</br>ph: 907-209-0722</br>alt: 907-945-3150</br>Kenny@brownbearlodge.com</p>
								
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Blog Post Area -->




<?php require_once('includes/footerMain.php') ?>