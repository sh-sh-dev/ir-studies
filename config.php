<?php

date_default_timezone_set("Asia/Tehran");

$db = mysqli_connect("localhost","root", "mysql", "IRS" ) or die("<script>alert('اتصال به پایگاه داده مقدور نبود :(')</script>");
mysqli_query($db, "SET NAMES 'utf8'");
mysqli_query($db, "SET CHARACTER SET 'utf8'");
mysqli_query($db, "SET character_set_connection = 'utf8'");

header('X-Powered-By:IR-Studies CMS');

global $db;