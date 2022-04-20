<?php
// Project to create a login page and login to the admin page - Mohammad Javad Nikbakht
$name=$_POST["name"];
$email=$_POST["email"];
$pass=$_POST["pass"];
if ($_POST["name"]=="mohammadjavadNikbakht"&&$_POST["pass"]=="13831383"){
echo 'دسترسی ادمین';
}else{
    header("location:form.php");
} 
