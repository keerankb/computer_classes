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
    

<div class="google-maps">
    
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3802.509558336731!2d75.89442551744386!3d17.626009100000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!3m2!1sen!2sin!4v1601368808595!5m2!1sen!2sin" width="1199" height="992" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3802.509558336731!2d75.89442551744386!3d17.626009100000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc5d7819ccf031d%3A0xa94ecfba1158247d!2sCANARA%20BANK%20ATM!5e0!3m2!1sen!2sin!4v1601368808595!5m2!1sen!2sin" width="1199" height="992" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->


</div>


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
                                            <div class="col-12 col-sm-6">
                                                <input type="number" class="form-control" id="number" placeholder="Phone Number" required autofocus maxlength="10" minlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                            </div>
                                            <div class="col-12 col-sm-6">
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

</body>

</html>