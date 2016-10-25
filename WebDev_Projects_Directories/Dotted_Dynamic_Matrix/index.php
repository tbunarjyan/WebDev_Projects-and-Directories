<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dynamic Matrice</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>
<body>
<div class="container-fluid" style="padding-right: 0px;  padding-left: 0px">
    <div class="background1">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default navbar-fixed-top" style=" background-color: rgb(44, 62, 80); border-color: rgba(248, 248, 248, 0); height: 80px;">
                    <div class="container">
                        <div class="navbar-header page scroll">
                            <h1 class="text-higher" style="font-size: 23px; color: rgb(255,255,255);margin-top: 30px">
                                <b>Change matrice size by loading file over again!</b></h1>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
                            <ul class="nav navbar-nav navbar-right" style="font-size: 15px">
                                <li><a href="#" style="color: rgb(255,255,255);margin-top: 15px"><b></b></a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="col-sm-12 text-center" style="margin-top: 50px; margin-bottom: 20px">
                    <?php
                    $r = mt_rand (1,20); $c = mt_rand (1,50);
                    echo '<h1 class="page-header"></h1>';
                       for ($i=0; $i<$r; $i++){
                        for ($j=0; $j<$c; $j++){
                            echo '<div class="keys"'. $i . $j.'"></div>';
                        }
                        echo '<br>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>