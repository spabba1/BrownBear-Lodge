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
function onsubmit(){
	
if(isset($_POST['submit'])){
    $to = "jeremey@webhostalaska.com"; 
    $from = $_POST['email']; 
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $firstname . " " . $lastname . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $firstname . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); 
    echo "Mail Sent. Thank you " . $firstname . ", we will contact you shortly.";
    
    }
}
$firstnameErr = $lastnameErr = $emailErr =  "";
$firstname = $lastname = $email =  "";
$check = 1;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["firstname"])) {
    $firstnameErr = "firstname is required";
	$check = 0;
  } else {
    $firstname = test_input($_POST["firstname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
      $firstnameErr = "Only letters and white space allowed"; 
    }

  }
  if (empty($_POST["lastname"])) {
    $lastnameErr = "lastname is required";
	$check = 0;
  } else {
    $lastname = test_input($_POST["lastname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
      $lastnameErr = "Only letters and white space allowed"; 
    }
	
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
	
  }
  if($check !=0)
	{
		onsubmit();
	}
  
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<style>
.error {color: #FF0000;}
</style>
        <!--Banner Area Start-->
        <div class="banner-area contact-banner">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="section-title text-center">
                  <div class="title-border">
                    <h1>Contact <span>Us</span></h1>
					
                  </div>
				  <p class="text-white" style="font-size:160%;">Call

Kenny Meserve

907-209-0722</p>
                  <!-- <p class="text-white">Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit. Pellentesque dolor turpis,
                    pulvinar varius dui<br> id, convallis iaculis eros.
                    Praesent porta lacinia elementum.</p> -->
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 text-center">
                <ul class="breadcrumb">
                  <li><a routerLink="/">Home</a></li>
                  <li>Contact Us</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!--End of Banner Area-->
        <!--Contact Information Area Start-->
        <div class="contact-information-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <div class="title-border">
                                <h1>Contact <span>Information</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="contact-info text-center">
                            <div class="contact-image">
                                <div class="contact-icon">
                                    <div class="icon-table-cell">
                                        <img class="primary-img" src="img/icon/contact-1.png" alt="">
                                        <img class="secondary-img" src="img/icon/contact-1-hover.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="contact-text">
                                <h4>Address</h4>
                                <p>700 Airport Road<br>
                                P.O. Box 377</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="contact-info text-center">
                            <div class="contact-image">
                                <div class="contact-icon">
                                    <div class="icon-table-cell">
                                        <img class="primary-img" src="img/icon/contact-2.png" alt="">
                                        <img class="secondary-img" src="img/icon/contact-2-hover.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="contact-text">
                                <h4>Phone</h4>
                                <p>+1 907 209 0722<br>
                                +1 907 945 3150</p>
                            </div>
                        </div>
                    </div>
                  <!--
                    <div class="col-md-3 col-sm-4">
                        <div class="contact-info text-center">
                            <div class="contact-image">
                                <div class="contact-icon">
                                    <div class="icon-table-cell">
                                        <img class="primary-img" src="img/icon/contact-3.png" alt="">
                                        <img class="secondary-img" src="img/icon/contact-3-hover.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="contact-text">
                                <h4>Fax</h4>
                                <p>(973) 377-5077<br>
                                (001) 254-7359</p>
                            </div>
                        </div>
                    </div>
                    -->
                    <div class="col-md-4 col-sm-4">
                        <div class="contact-info text-center">
                            <div class="contact-image">
                                <div class="contact-icon">
                                    <div class="icon-table-cell">
                                        <img class="primary-img" src="img/icon/contact-4.png" alt="">
                                        <img class="secondary-img" src="img/icon/contact-4-hover.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="contact-text">
                                <h4>Email</h4>
                                <p>kenny@brownbearlodge.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Contact Information Area-->
        <!--Contact Form Start-->
        <div class="contact-form">
          <div class="google-map-area">
            <div id="googleMap" style="width:100%;height:737px;filter:grayscale(100%);-webkit-filter: grayscale(100%);" ></div>
          </div>
            <!-- google-map-area start -->
          <!--
            <div class="google-map-area">
                [>  Map Section <]
                <div id="contacts" class="map-area">
                    <div id="googleMap" style="width:100%;height:737px;filter: grayscale(100%);-webkit-filter: grayscale(100%);"></div>
                </div>
            </div>
          -->
          <!--

          <sebm-google-map
            class="google-map-area"
            [latitude]="lat"
            [longitude]="lng"
            [zoom]="zoom"
            [scrollwheel]="scrollwheel"
          >

            <sebm-google-map-marker
              [latitude]="mrklat"
              [longitude]="mrklong"
              animation="animation"
            >

            </sebm-google-map-marker>

          </sebm-google-map>

          -->

          <!--
          [latitude]="latmrk"
          [longitude]="longmrk"
          [animation]="animation"
          [icon]="icon"
          [map]="map">
          -->

            <!-- google-map-area end -->
			
            <div class="contact-us-form-wrapper">
                <div class="contact-container">
                    <div class="contact-us-form section-padding">
                        <div class="contact-row">
                            <div class="contact-column">
                                <div class="section-title text-center">
                                    <div class="title-border">
                                        <h1>Contact <span>US</span></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-row">
                            <div class="contact-column">
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input id="firstname" type="text" class="form-box" placeholder="First name" name="firstname">
											<span class="error">* <?php echo $firstnameErr;?></span>
												<br><br>
                                        </div>
                                        <div class="col-md-6">
                                            <input id="lastname" type="text" class="form-box" placeholder="Last name" name="lastname">
											<span class="error">* <?php echo $lastnameErr;?></span>
												<br><br>
                                        </div>
                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-box" placeholder="Email" name="email">
											<span class="error">* <?php echo $emailErr;?></span>
												<br><br>
                                        </div>
                                        <div class="col-md-6">
                                            <input id="phone" type="text" class="form-box" placeholder="Phone number" name="phone">
                                        </div>
                                        <div class="col-md-12">
                                            <textarea id="message" class="yourmessage" placeholder="Your message"
                                                       name="message"></textarea>


										 <input type="submit" class="submit-button" name="submit" value="Submit">
                                        </div>
                                    </div>
                                </form>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Contact Form-->
        <!--Partner Area Start-->
        <div class="partner-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <div class="title-border">
                              <h1>Our <span>Partners</span></h1><br>
                            </div>
                            <span>Support Local Business!</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="partner-carousel carousel-style-two">
                        <div class="col-md-3">
                          <a href="#">Advertise Here!</a>
                        </div>
                        <div class="col-md-3">
                          <a href="//webhostalaska.com/">Webhost Alaska</a>
                        </div>
                      <!--
                        <div class="col-md-3">
                            <a href="#"><img src="img/brand/1.jpg" alt=""></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="img/brand/2.jpg" alt=""></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="img/brand/3.jpg" alt=""></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="img/brand/4.jpg" alt=""></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="img/brand/1.jpg" alt=""></a>
                        </div>
                      -->
                    </div>
                </div>
            </div>
        </div>
        <!--End of Partner Area-->






<?php require_once('includes/footerMain.php') ?>
