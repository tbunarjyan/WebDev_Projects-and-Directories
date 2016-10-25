    <?php
    if (isset($_GET["submit"])) {

        $a = $_GET['a'];
        $b = $_GET['b'];
        $c= $_GET['c'];

        if (!$_GET['a']) {
            $errText='<div class="alert alert-danger">Please input ALL the coefficients above!</div>';
        }

        if (!$_GET['b']) {
            $errText='<div class="alert alert-danger">Please input ALL the coefficients above!</div>';
        }

        if (!$_GET['c']) {
            $errText='<div class="alert alert-danger">Please fill ALL the input fields above!</div>';
        }

        if (!$errText) {
                $calc = (($_GET['b']) * ($_GET['b'])) - (4 * $_GET['a'] * ($_GET['c']));
            if ($calc == 0) {
                 $result = (((-1) * $_GET['b'] / (2 * $_GET['a'])));
                 $response='<div class="alert alert-success">You have got one REAL zero. Click the button "New" to start over again!</div>';
            } else if($calc<0) {

                $result= round(((-1) * $_GET['b'])/ ((2 * $_GET['a'])), 1, PHP_ROUND_HALF_DOWN) ."+". round(((sqrt((-1)*$calc)) / (2 * $_GET['a'])), 1, PHP_ROUND_HALF_DOWN)."i";
                $result2= round(((-1) * $_GET['b'])/ ((2 * $_GET['a'])), 1, PHP_ROUND_HALF_DOWN) ."-". round(((sqrt((-1)*$calc)) / (2 * $_GET['a'])), 1, PHP_ROUND_HALF_DOWN)."i";
                $response='<div class="alert alert-warning" >You have got two COMPLEX zeros. Click the button "New" to start over again!</div>';
                   }
               else if($calc>0){
                 $result = round((((-1) * $_GET['b'] + sqrt($calc)) / (2 * $_GET['a'])), 1,PHP_ROUND_HALF_DOWN);
                 $result2 = round((((-1) * $_GET['b'] - sqrt($calc)) / (2 * $_GET['a'])), 1,PHP_ROUND_HALF_DOWN);
                 $response='<div class="alert alert-success"">You have got two REAL zeros. Click the button "New" to start over again!</div>';
               }
        }
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Bootstrap contact form with PHP example by BootstrapBay.com.">
        <meta name="author" content="BootstrapBay.com">
        <title>Bootstrap equation calculator</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
     </head>
     <body>
        <div class="container text-center" style="background-color: #ECE9F9; padding-bottom: 50px">
            <div class="row" style="text-align: center">
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
                                <b class="text" style="padding-left: 333px">QUADRATIC EQUATION CALCULATOR</b></h>
                        </div>
                    </div>
                </nav>
                <div class="col-md-12" style="padding-left: 30px">
                    <h1 class="page-header text-center" style="color: #045FB4; padding-bottom: 30px; padding-top: 100px; margin-top: 30px" >Solve the equation, find the zeros.</h1>
                    <form class="form-inline"  action="index.php" style="padding-bottom: 9px;">
                        <div class="form-group" style="vertical-align: top">
                                <input type="text" class="form-control" style="width: 50px;text-align: right" id="a" name="a" placeholder="a" value="<?php echo htmlspecialchars($_GET['a']); ?>">
                            </div><span><a class="" style="font-size: 24px">&nbsp;x<sup>2</sup>+</a></span>
                        <div class="form-group" style="vertical-align: top">
                                <input type="text" class="form-control" style="width: 50px;text-align: right" id="b" name="b" placeholder="b" value="<?php echo htmlspecialchars($_GET['b']); ?>">
                        </div><span><a class="" style="font-size: 23px">&nbsp;x+</a></span>
                        <div class="form-group" style="vertical-align: top">
                                <input type="text" class="form-control" style="width: 50px; text-align: right"id="c" name="c" placeholder="c" value="<?php echo htmlspecialchars($_GET['c']); ?>">
                        </div>
                        <div class="form-group" style="vertical-align: top">
                                <input  type="submit" name="submit" id="submit" value="Solve" class="btn btn-primary">
                        </div>
                    </form>
                    <form class="form-inline">
                        <div class="form-group">
                    <input type="text" class="form-control" style="width: 114px; text-align: center" id="n" name="n" placeholder="root 1" value="<?php echo $result; ?>"/>
                            </div>
                        <div class="form-group">
                    <input type="text" class="form-control" style="width: 114px; text-align: center" id="m" name="m" placeholder="root 2" value="<?php echo $result2; ?>"/>
                            </div>
                        <div class="form-group" style="vertical-align: top">
                            <input  type="submit" name="new" id="submit" value="&nbsp;New&nbsp;" class="btn btn-warning">
                        </div>
                            <?php echo "\n<p>" . $errText . "</p>\n"; ?>
                            <?php echo "\n<p>" . $response . "</p>\n"; ?>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    </body>
    </html>