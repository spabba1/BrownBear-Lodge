<?php
require_once("includes/initialize.php");
// Meta
$pagename = "Wildlife";
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
                                <h1>!..Wildlife of Alaska...!</h1>
                            </div>
                            <p class="text-white">The wildlife of Alaska is diverse and abundant.Hundreds of species of birds inhabit Alaska, especially in coastal regions.Large animals, including grizzly bears and moose, sometimes pay visits to the Anchorage area, which is by far the state’s largest population center</p>
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
                                <h4>Welcome to Alaska!</h4>
                                <p>The densest concentration of brown bears on Earth can be found in summer at the McNeil River State Game Sanctuary. Visitors watch and photograph these bears at unbelievably close range, without any barriers between them. This year marks the fiftieth anniversary of the creation of the sanctuary. It also marks the publication of In Wild Trust, the story of this unique place and why it is a success..</p>
                                <a href="images/bear/brown2.jpg" data-lightbox="bear"></a>
								<div class="col-md-3 col-sm-3">
								<img src="images/bear/brown2.jpg" class="primary-img" alt="">
								</div>
								<p> The sanctuary, 250 air miles southwest of Anchorage, protects about 200 square miles of wildlife habitat. In some years as many as 144 individual bears have been observed at McNeil River over the course of the summer. Much of the viewing takes place at McNeil River falls, about a mile upstream from the mouth of the river at Kamishak Bay.</br>Visitors fly in to the remote site and stay at a camp about a mile from the falls. Group size is limited to 10. No one has ever been injured by a bear at McNeil River, and since the permit program was initiated, no bears have been killed by visitors who felt threatened. The title of the new book is tied to that safety record – and the reason behind it.</p>
                                </br>
								</br>
								<div class="single-blog-post-text">
								<div class="col-md-3 col-sm-3">
								<img src="images/bear/brown3.jpg" class="primary-img" alt="">
								</div>
								<p>Alaska contains about 98% of the U.S. brown bear population and 70% of the total North American population.An estimated 30,000 brown bears live in Alaska.Of that number, about 1,450 are harvested by hunters yearly.</br>Brown bears can be found throughout the state, with the minor exceptions of the islands west of Unimak in the Aleutians, the islands south of Frederick Sound in southeast Alaska, and the islands in the Bering Sea.Most brown bears in Alaska are grizzly bears (the subspecies of brown bear found throughout North America), but Kodiak Island is home to Kodiak bears, another subspecies that is the largest type of brown bear in the world.The brown bear is the top predator in Alaska.
								</br>The density of brown bear populations in Alaska varies according to the availability of food, and in some places is as high as one bear per square mile.Alaska’s McNeil River Falls has one of the largest brown bear population densities in the state.Brown bears can be dangerous if they are not treated with respect. Between the years 1998 and 2002, there were an average of 14.6 brown bear attacks per year in the state.Brown bears are most dangerous when they have just made a fresh kill, and when a sow has cubs. </p>
								
								<div class="theme-default" style="width: 400px;  overflow: hidden; white-space: nowrap; text-overflow: ellipsis; ">	
								
								<div id="nivoslider" class="slides nivoSlider" >
                    <!-- <a href="#"><img src="img/slider/slider-1.jpg" alt="" title="#slider-1-caption1"/></a> -->
					
						<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">   
					<a href="#" class="img-wrapper"><img class="left-block img-responsive"  src="images/bear/<?php echo $images[$i]; ?>" alt="" title="#slider-1-caption1"/></a></div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12"><a href="#" class="img-wrapper"><img class="left-block img-responsive"  src="images/bear/b1.jpg" alt="" title="#slider-1-caption-2"/></a></div>
					<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12"><a href="#" class="img-wrapper"><img class="left-block img-responsive"  src="images/bear/b5.jpg" alt="" title="#slider-1-caption-3"/></a></div>
					<a href="#" class="img-wrapper"><img class="left-block img-responsive"  src="images/bear/b4.jpg" alt="" title="#slider-1-caption-4"/></a>
					<a href="#" class="img-wrapper"><img class="left-block img-responsive"  src="images/bear/wbrown1.jpg" alt="" title="#slider-1-caption-5"/></a>
					
					</div>
								
                        
                    </div>
					
                </div>
            </div>
        </div>
        <!--End of Blog Post Area -->




<?php require_once('includes/footerMain.php') ?>