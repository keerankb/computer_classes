<?php

session_start();
session_destroy();
echo "You have been successfully logged out.<br>
You will now be returned to the login page.";
header("Location:admin-login.php");


?>