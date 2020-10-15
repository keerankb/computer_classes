<?php
   //include("db_connection.php");
   // session_start();
   
   // if($_SERVER["REQUEST_METHOD"] == "POST") {
   //    // username and password sent from form 
      
   //    $myusername = mysqli_real_escape_string($db,$_POST['username']);
   //    $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
   //    $sql = "SELECT * FROM admin_login WHERE username = '$myusername' and password = '$mypassword'";
   //    $result = mysqli_query($conn,$sql);
   //    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   //    $active = $row['active'];
      
   //    $count = mysqli_num_rows($result);
      
   //    // If result matched $myusername and $mypassword, table row must be 1 row
        
   //    if($count == 1) {
   //       session_register("myusername");
   //       $_SESSION['login_user'] = $myusername;
         
   //       header("location: index.php");
   //    }else {
   //       $error = "Your Login Name or Password is invalid";
   //    }
   // }




    function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "future_comp";


 $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);

 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }


$conn = OpenCon();

//echo "Connected Successfully";

//CloseCon($conn);



session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $myusername = mysqli_real_escape_string($conn,$_POST['username']);
    $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 

    $sql = "SELECT * FROM admin_login WHERE username = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($conn,$sql);

    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
        
      if($count == 1) {
         // session_register("myusername");
        $_SESSION['username']= "username"; 
        $_SESSION['login_user'] = $myusername;
         
         header("location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }



?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Login | Admin Panel - Future Computer</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../img/logo/future logo.png">

    <!-- plugin stylesheets -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors.css" />
    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" /> -->
</head>

<body class="bg-white">
    <!-- begin app -->
    <div class="app">
        <!-- begin app-wrap -->
        <div class="app-wrap">
            <!-- begin pre-loader -->
            <!-- <div class="loader">
                <div class="h-100 d-flex justify-content-center">
                    <div class="align-self-center">
                        <img src="assets/img/loader/loader.svg" alt="loader">
                    </div>
                </div>
            </div> -->
            <div id="preloader">
                <i class="circle-preloader"></i>
            </div>      
            <!-- end pre-loader -->


            <!--start login contant-->
            <div class="app-contant">
                <div class="bg-white">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                            <div class="col-sm-6 col-lg-5 col-xxl-3  align-self-center order-2 order-sm-1">
                                <div class="d-flex align-items-center h-100-vh">
                                    <div class="login p-50">
                                        <h1 class="mb-2">Here You are</h1>
                                        <p>Welcome back, please login to your account.</p>
                                        <form action="#" method="post">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">User Name*</label>
                                                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Password*</label>
                                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="d-block d-sm-flex  align-items-center">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                                            <label class="form-check-label" for="gridCheck">
                                                                Remember Me
                                                            </label>
                                                        </div>
                                                        <a href="javascript:void(0);" class="ml-auto">Forgot Password ?</a>
                                                    </div>
                                                </div>
                                                <div class="col-12 mt-3">
                                                    <!-- <a class="btn btn-primary text-uppercase" type="submit" value="Sign In">Sign In</a> -->
                                                    <button class="btn btn-primary" type="submit" value="submit" name="submit">LOGIN</button>

                                                </div>
                                                <div class="col-12  mt-3">
                                                    <p>Don't have an account ?<a href="admin-signup.php"> Sign Up</a></p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xxl-9 col-lg-7 bg-gradient o-hidden order-1 order-sm-2">
                                <div class="row align-items-center h-100">
                                    <div class="col-7 mx-auto ">
                                        <img class="img-fluid" src="assets/img/bg/login.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <!--end login contant-->










<!-- <div class="container">
    <div class="admin-login-content section-heading ml-50 pl-50">
        <div class=""> 
            <div class="col-lg-4 col-md-6 col-sm-8 col-12">
                <div class="d-flex align-items-center">
                    <h1 class="">Login</h1>
                    <form action="#">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">User Name*</label>
                                    <input type="text" class="form-control" placeholder="Username" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">Password*</label>
                                    <input type="password" class="form-control" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-block d-sm-flex  align-items-center">
                                    <a href="#" class="ml-auto">Forgot Password ?</a>
                                </div>     
                            </div>
                            <div class="col-12 mt-3">
                                <a href="#" class="btn btn-primary text-uppercase">Sign In</a>
                            </div>
                            <div class="col-12  mt-3">
                                <p>Don't have an account ?<a href="auth-register.html"> Sign Up</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 -->


















        </div>
        <!-- end app-wrap -->
    </div>
    <!-- end app -->





<script>

</script>






     <!-- ##### All Javascript Script ##### -->

    <!-- plugins -->
    <script src="assets/js/vendors.js"></script>

    <!-- custom app -->
    <script src="assets/js/app.js"></script>
</body>

</html>