<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Academy - Education Course Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
<!--
    <?php
    /*
$c= mysqli_connect("localhost","futurecomputer"," ","")
  echo("connected");
else
  echo("not connected");
*/
?> 
.. 
<?php
/*
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db_name = "futurecomputer";

    $con = mysqli_connect($host,$user,$pass,$db_name);

    if(!$con)
    {
        echo "Connection Not Successfully";
    }
    else{
        echo "Connected Sucessfully";
    }
    */
?>

 -->



<?php



/*
if (isset($_POST['Save']))
{
echo $name = $_POST['name']
echo $email = $_POST['email'];
echo $number = $_POST['number'];
echo $course = $_POST['course'];
echo $message = $_POST['message'];

{
$sql="INSERT INTO  `contactus` (`name` ,`email` ,`number` ,`course`,`message`)values('".$_POST['name']."','".$_POST['email']."','".$_POST['number']."','".$_POST['course']."','".$_POST['message']."')";
$result=mysqli_query($con,$sql);   
} 

}
*/
?>

</head>

<body>
    <?php include 'header.php'; ?>

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Contact</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Google Maps ##### -->
    <!-- <style>
        .mapouter{position:relative;text-align:right;height:620px;width:1500px;}
        .gmap_canvas {overflow:hidden;background:none!important;height:620px;width:1500px;}
        @media only screen and (min-width: 992px) and (max-width: 1199px) {
        .mapouter #googleMap {
        height: 500px;
        width: 100%; } }
    </style>
    <section class="contact-area">
    <div class="">
        <div class="row">
    <div class="map-area wow fadeInUp" data-wow-delay="300ms">
         <div id="googleMap"></div> -->
      <!-- <div class="mapouter"><div class="gmap_canvas"><iframe width="1500" height="620" id="gmap_canvas" src="https://maps.google.com/maps?q=Surya%20Complex%2C%20Saifful%20Chowk%2C%20Vijapur%20Road%2C%20Solpaur&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com/nordvpn-coupon/">nord vpn deal</a></div></div>
    </div>
    </div>
    </div>
    </section> --> 


    <style>
    .google-maps {
        position: relative;
        padding-bottom: 55%; 
        height: 0;
        overflow: hidden;
        z-index: 2;
        height: 600px;
    }
    .google-maps iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
    }
    @media only screen and (min-width: 992px) and (max-width: 1199px) {
    .google-maps {
        height: 500px; 
        } 
    }

</style>

<div class="google-maps">
    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7098.94326104394!2d78.0430654485247!3d27.172909818538997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1385710909804" width="600" height="450" frameborder="0" style="border:0"></iframe> -->

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3802.509558336731!2d75.89442551744386!3d17.626009100000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc5d7819ccf031d%3A0xa94ecfba1158247d!2sCANARA%20BANK%20ATM!5e0!3m2!1sen!2sin!4v1601368808595!5m2!1sen!2sin" width="1199" height="992" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

</div>







<style>

</style>












    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-content">
                        <div class="row">
                            <!-- Contact Information -->
                            <div class="col-12 col-lg-5">
                                <div class="contact-information wow fadeInUp" data-wow-delay="400ms">
                                    <div class="section-heading text-left">
                                        <span></span>
                                        <h3>Contact Us</h3>
                                        <p class="mt-30">Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod erat. Ut at erat et arcu pulvinar cursus a eget.</p>
                                    </div>
                                    <!-- <br><br><br><br><br><br><br><br> -->
                                    <!-- Contact Social Info -->
                                    <div class="contact-social-info d-flex mb-30">
                                        <a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://www.twitter.com" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        <a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </div>

                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info d-flex">
                                        <div class="contact-icon mr-15">
                                            <i class="icon-placeholder"></i>
                                        </div>
                                        <p>13, Surya Complex, Saifful Chowk,<br>Vijapur Road, Solpaur</p>
                                    </div>

                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info d-flex">
                                        <div class="contact-icon mr-15">
                                            <i class="icon-telephone-1"></i>
                                        </div>
                                        <p>Main: (+91) 8149168221 <br>Office: (+91) 7385174971</p>
                                    </div>

                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info d-flex">
                                        <div class="contact-icon mr-15">
                                            <i class="icon-contract"></i>
                                        </div>
                                        <p>office@yourbusiness.com</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Contact Form Area -->
                            <div class="col-12 col-lg-7">
                                <div class="contact-form-area wow fadeInUp" data-wow-delay="500ms">
                                    <form action="#" method="POST">
                                        <input type="name" class="form-control" id="name" placeholder="Name" required autofocus>
                                        <input type="email" class="form-control" id="email" placeholder="E-mail" required autofocus>
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <input type="number" class="form-control" id="number" placeholder="Number" required autofocus maxlength="10" minlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <!-- <input type="course" class="form-control" id="course" placeholder="Course Name" required> -->
                                                <select name="" class="form-control" required="" style="height: 55px;" autofocus>
                                                    <option value="">Choose Course...</option>
                                                    <option value="WebDev">Web Development</option>
                                                    <option value="Java">Java</option>
                                                    <option value="Python">Python</option>
                                                    <option value="CC++">C & C++</option>
                                                    <option value="ASP.NET">ASP.NET</option>
                                                    <option value="SQL">SQL</option>
                                                    <option value="C#">C#</option>
                                                    <option value="Tally">Tally</option>
                                                </select>
                                            </div>
                                        </div>

                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message" autofocus></textarea>
                                        <button class="btn academy-btn mt-30" type="submit" valuse="Save" name="Save">Contact Us</button>
                                    </form>



<!--                                     <form action="">
                    <div class="row">
                        <div class="col-md-12 col-md-offset-1">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" required="">
                                    </div>
                                    <div class="row">   
                                        <div class="form-group col-6">
                                            <input type="text" class="form-control" placeholder="Phone" required="">
                                        </div>
                                        <div class="form-group col-6">
                                            <input type="text" class="form-control" placeholder="Qualification" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Course">
                                        <select name="" class="form-control" required="" style="height: 55px;">
                                            <option value="">Choose Course...</option>
                                            <option value="WebDev">Web Development</option>
                                            <option value="Java">Java</option>
                                            <option value="Python">Python</option>
                                            <option value="CC++">C & C++</option>
                                            <option value="ASP.NET">ASP.NET</option>
                                            <option value="SQL">SQL</option>
                                            <option value="C#">C#</option>
                                            <option value="Tally">Tally</option>
                                        </select>
                                    </div>

                                </div>
                                
                                
                            </div>
                        </div>
                        
                    </div><br>  <br>    
                    <div>
                        <input class="btn academy-btn" type="submit" value="Submit" name="">
                    </div>
                </form>
 -->




                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

<?php include 'footer.php'; ?>

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <!-- Google Maps -->
    <script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script src="js/google-map/map-active.js"></script>
    <!-- <script>
      function initMap() {
        var demomap = {lat: 30.7421379, lng: 76.8187557};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: demomap
         });
        var marker = new google.maps.Marker({
          position: demomap,
          map: map
        });
      }
    </script> -->
    <!-- <script a sync defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfwo7C7-WLO8GU-bc6WmvqmsF8FKipzuE&callback=initMap">
    </script> --> 
</body>

</html>