<?php
session_start();
$userentry=$_POST["captchacode"];
$code=$_SESSION["captchacode"];
if($userentry==$code){
    echo "correct";
}
else{
    echo "incorrect";
}
session_destroy();
?>
