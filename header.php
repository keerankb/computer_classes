    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="future-logo">
                                <a href="index.php"><img src="img/logo/future logo banner.png" alt=""></a>
                            </div>
                            <div class="social-content">
                                <div class="row">
                                    <!-- <a href="schedule.php"><h5>SCHEDULE</h5></a> -->
                                    <a href="enquiry.php"><h5>ENQUIRY</h5></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">

                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">

                        <!-- <div class="future-logo">
                                    <a href="index.php"><img src="img/logo/future logo.png" alt=""></a>
                                </div> -->
                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <div class="sm-logo" id="logo-div">
                                    <a href="index.php"><img src="img/logo/future logo.png" alt=""></a>
                                </div>
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about-us.php">About Us</a></li>
                                    <li><a href="course.php">Course</a>
                                        <ul class="dropdown">
                                            <li><a href="webdev.php">Web Design</a></li>
                                            <li><a href="java.php">Java</a></li>
                                            <li><a href="python.php">Python</a></li>
                                            <li><a href="ccplus.php">C & C++</a></li>
                                            <li><a href="asp.php">ASP.net</a></li>
                                            <li><a href="sql.php">SQL</a></li>
                                            <li><a href="csharp.php">C#</a></li>
                                            <li><a href="tally.php">Tally</a></li>
                                            <li><a href="ccc.php">CCC</a></li>
                                            <li><a href="msoffice.php">MS-Office</a></li>                
                                        </ul>
                                    </li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a href="gallery.php">Gallery</a></li>
                                    <li><a href="branch.php">Our Branch</a></li>
                                    <!-- <li><a href="schedule.php">Schedule</a></li> -->
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>


                        

                        <!-- Calling Info -->
                        <div class="calling-info">
                            <div class="call-center">
                                <div class="row">
                                    <div class="col-6">
                                        <a href="tel:+91 8149168221" data-toggle="tooltip" data-placement="top" title="Call Now"><i class="icon-telephone-2"></i></a>
                                    </div>
                                    <div class="col-6">
                                        <a href="enquiry.php" data-toggle="tooltip" data-placement="top" title="Enquiry"><i class="fa fa-pencil-square-o"></i></a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->







<script>
//    $("#logo-div").hide();
// $(window).scroll(function(){
//   if($(window).scrollTop() > 100){
//       $("#logo-div").fadeIn("slow");
//   }
// });
// $(window).scroll(function(){
//   if($(window).scrollTop() < 100){
//       $("#logo-div").fadeOut("fast");
//   }
// });

</script>








<!-- 
<script>
        
    $(window).scroll(
  function () {
   var top = 75;
   var currentTop = $(window).scrollTop();
    if (currentTop > top) {
        $(".sm-logo").css("opacity", "0");
       } else {
         $(".sm-logo").css("opacity", "1");
       }
});

</script> -->

<!-- <script>
    
    $(document).scroll(function() {
        var y = $(this).scrollTop();
        if (y > 200) {
            $('.future-logo').fadeIn();
        } else {
            $('.future-logo').fadeOut();
    }
});

</script> -->


<!-- 
<script>
    
    jQuery( function($) {
    var logo = $("sm-logo").clone();
    $(".future-logo").prepend(logo);
});

</script> -->






<!-- <script>
    
    jQuery(document).ready(function() {
    jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() > 500) {
      jQuery('.sm-logo').fadeIn(500);
    } else {
      jQuery('.sm-logo').fadeOut(500);
    }
  });
});

</script> -->





<style>

    .header-area .academy-main-menu .classy-navbar .classynav .sm-logo {
            max-width: 80px;
    position: absolute;
    left: -75px;
    top: 5px;
    /*display: none;*/
    }

    .header-area .academy-main-menu .classy-navbar .classynav .sm-logo::after {
       /* max-width: 180px;
        position: absolute;
        top: 10px;
        left: -150px;*/
        /*margin-left: -74px;*/
        /*z-index: 2;*/
        /*content: url(img/logo/future logo sm.png);*/
        display: inline-block;
    }
    

    @media only screen and (min-width: 1120px) and (max-width: 1279px) {
    .header-area .academy-main-menu .classy-navbar .classynav .sm-logo {
        margin-left: -54px;
    }
    }

    @media only screen and (min-width: 1119px) and (max-width: 1800px) {
    .header-area .academy-main-menu .classy-navbar .classynav .sm-logo {
        /*display: none;*/
        margin-left: -24px;
    }
    }

    .header-area .academy-main-menu .classy-navbar {
        position: relative;
    }
</style>





    
<!-- ##### Whatsapp Popup starts ##### -->
<style>
/* ##### Whatsapp Popup starts ##### */
.wts-section .float{
  position:fixed;
  width:50px;
  height:50px;
  bottom:20px !important;
  left:20px;
  background-color:#25d366;
  color:#ffffff;
  border-radius:50px;
  text-align:center;
  font-size:24px;
  box-shadow: 2px 2px 3px #999;
  z-index:100;
}
.wts-section .my-float{
  margin-top:13px;
}
/* ##### Whatsapp Popup ends ##### */
</style>
    <div class="wts-section">
        <a href="https://api.whatsapp.com/send?phone=918888201690&text=Hello%21%20I%20would%20like%20to%20chat%20with%20you." class="float" target="_blank"><i class="fa fa-whatsapp my-float"></i></a>
    </div>
<!-- ##### Whatsapp Popup ends ##### -->










<!-- ##### Schedule Button starts ##### -->
<style>
    /*
    *
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body
{
    background: #f5f4f6;
}*/
.future-logo img {
    height: auto;
    max-width: 200px;
}
.sch-fixed
{
    position: fixed;
    top: 245px;
    /*left: -110px;*/
    right: -100px;
    width:250px;
    height:60px;
    z-index:999;
    -moz-transform:rotate(90deg);
    -ms-transform:rotate(90deg);
    -o-transform:rotate(90deg);
    -webkit-transform:rotate(90deg);
}
.sch-button 
{
/*display: block;*/
/*border: 1px solid #000;*/
line-height: 3;
margin-bottom: 0.3em;
/*outline: none;*/
text-decoration: none;
text-transform: uppercase;
color: #fff;
width: 250px;
font-size: 16px;
border-radius: 20px 0 0 20px;
/*-moz-transform:rotate(90deg);
    -ms-transform:rotate(90deg);
    -o-transform:rotate(90deg);
    -webkit-transform:rotate(90deg);*/
    cursor: pointer;
    /*height: 50px;*/
    position: relative;
    transition: none !important;
}
.sch-button:hover {
    background-color: white !important;
    font-size: 16px;
    transition: none !important;
}
.sch-buttonDiv 
{
padding: 0 13px;
border-radius: 0px 0px 10px 10px;
width: 120px;
position: absolute;
left: 100px;

/*margin: -50px;*/
}
.sch-buttonDiv:hover
{
    /*background:linear-gradient(45deg,#1a77e2,#4485d2);*/
/*  background: -webkit-linear-gradient(to right, #ffe100, #f79345);
  background: linear-gradient(to right, #ffe100, #f79345);
*/    /*transition: margin 500ms;*/
    /*margin-left: -20px;*/
    /*transition: none !important;*/
    color: white !important;
    background-color: #000 !important;
}

a, a:hover, a:focus {
    /*-webkit-transition-duration: 500ms;*/
    /*transition-duration: 500ms;*/
    text-decoration: none !important;
    /*outline: 0 solid transparent !important;*/
    color: #141414 ;
    font-weight: 600;
    /*font-size: 14px;*/
    transition: none !important;
}

/* Button Css */
.btn-bg
{
    /*background: linear-gradient(45deg,#1a77e2,#bfd6f1);*/
background-color: #000;
/*  background-image: -webkit-linear-gradient(to right, #000, #693150);
  background-image: linear-gradient(to right, #000, #693150);*/
/*  background: -webkit-linear-gradient(to right, #f79345, #ffe100);
  background: linear-gradient(to right, #f79345, #ffe100);*/
}
</style>


    <div class="sch-fixed">
        <a href="schedule.php" class="sch-button">
            <div class="sch-buttonDiv btn-bg">
            schedule
            </div>
        </a>
    </div>

<!-- ##### Schedule Button starts ##### -->










<!-- 



    <div class="enq-fixed">
        <a href="enquiry.php" class="enq-button">
            <div class="enq-buttonDiv btn-bg">
            enquiry
            </div>
        </a>
    </div>




<style>
    
    .enq-fixed
    {
        position: fixed;
        top: 245px;
        left: -110px;
        /*right: -100px;*/
        width:250px;
        height:60px;
        z-index:999;
        -moz-transform:rotate(90deg);
        -ms-transform:rotate(90deg);
        -o-transform:rotate(90deg);
        -webkit-transform:rotate(90deg);
    }


.enq-button 
{
line-height: 3;
margin-bottom: 0.3em;
text-decoration: none;
text-transform: uppercase;
color: #fff;
width: 250px;
font-size: 16px;
border-radius: 20px 0 0 20px;
    cursor: pointer;
    position: relative;
    transition: none !important;
}
.enq-button:hover {
    background-color: white !important;
    font-size: 16px;
    transition: none !important;
}
.enq-buttonDiv 
{
padding: 0 21px;
border-radius: 10px 10px 0px 0px;
width: 120px;
position: absolute;
left: 100px;
}
.enq-buttonDiv:hover
{
    background: -webkit-linear-gradient(to right, #ffe100, #f79345);
    background: linear-gradient(to right, #ffe100, #f79345);
    color: white !important;
}

a, a:hover, a:focus {
    text-decoration: none !important;
    color: #141414 ;
    font-weight: 600;
    transition: none !important;
}
</style>



 -->







<!-- ##### Tawk.to Starts ##### -->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/5f6f1fa34704467e89f27ed9/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
</script>
<!-- ##### Tawk.to Ends ##### -->



<!-- ##### Tooltip For enquiry and call now ##### -->
<script>
    $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
<!-- ##### Tooltip For enquiry and call now ##### -->