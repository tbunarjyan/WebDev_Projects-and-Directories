<?php
session_start();
$age = $_GET['age'];
$_SESSION['age'] = $age;
$info=$_SESSION;

$result = fopen("info.txt", "a+");
$txt=file_get_contents($result)." ".$info;
fwrite($result, $txt);
fclose($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bootstrap contact form with PHP example by BootstrapBay.com.">
    <meta name="author" content="BootstrapBay.com">
    <title>Survey Sessions Sample</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" style=" background-color: rgb(44, 62, 80); border-color: rgba(248, 248, 248, 0); height: 80px;">
    <div class="container" style="text-align: center">
        <div class="navbar-header page scroll" style="text-align: center">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <h1 class="text-higher" style="font-size: 26px; color: rgb(255,255,255);margin-top: 30px">
                <b class="text-center">Session Survey Sample</b></h1>
        </div>
    </div>
</nav>
<div class="container text-center" style="padding-top: 170px">
    <div class="row">
        <div class="col-xs-12">
            <p class="text" style="font-size: larger">Thanks for your submission! Your answer has been recorded.</p>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>