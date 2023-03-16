<?php
session_start();
echo"Full Name : ".$_SESSION["fullname"]."<br>";
echo"Course Id : ".$_SESSION["courseid"]."<br>";
echo"Favorite operating system : ".$_COOKIE["favlanguage"]."<br>";
echo"Favorite programming language : ".$_COOKIE["favoperatingsystem"]."<br>";
?>
