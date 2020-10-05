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
                            <div class="academy-logo">
                                <a href="index.php"><img src="img/core-img/logo.png" alt=""></a>
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
            <div class="classy-nav-container breakpoint-on">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">

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
                                <a href="tel:+91 8149168221"><i class="icon-telephone-2"></i> <span> (+91) 8149168221</span></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    
<!-- ##### Whatsapp Popup starts ##### -->
    <div class="wts-section">
        <a href="https://api.whatsapp.com/send?phone=918888201690&text=Hello%21%20I%20would%20like%20to%20chat%20with%20you." class="float" target="_blank"><i class="fa fa-whatsapp my-float"></i></a>
    </div>
<!-- ##### Whatsapp Popup ends ##### -->




    <div class="sch-fixed">
        <a href="schedule.php" class="sch-button">
            <div class="sch-buttonDiv btn-bg">
            schedule
            </div>
        </a>
    </div>







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
    background: -webkit-linear-gradient(to right, #ffe100, #f79345);
    background: linear-gradient(to right, #ffe100, #f79345);
    /*transition: margin 500ms;*/
    /*margin-left: -20px;*/
    /*transition: none !important;*/
    color: white !important;
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

  background: -webkit-linear-gradient(to right, #f79345, #ffe100);
  background: linear-gradient(to right, #f79345, #ffe100);
}
/*.bg-b-blue:hover
{
    background:linear-gradient(45deg,#1a77e2,#4485d2);
}*/
</style>







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