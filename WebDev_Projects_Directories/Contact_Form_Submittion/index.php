    <?php
    if (isset($_POST["submit"])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $cash= $_POST['cash'];
        $message = $_POST['message'];

        if (!$_POST['name']) {
            $errName = 'Please enter your name';
        }
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }
        if (!$_POST['cash']) {
            $errCash = 'Please enter the cash amount';
        }
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }
        if (!$errName && !$errEmail && !$errMessage && !$errCash) {
            $result = fopen("info.txt", "a+");
            $txt=file_get_contents($result)." ".$name."               ".$email."             ".$cash."$             ".$message;
            fwrite($result, $txt);
            fclose($result);
            $response='<div class="alert alert-success">Thanks for Your time! Your response has been recorded.</div>';
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
        <title>Bootstrap Contact Form With PHP Example</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <div class="background" style="margin-left: 0px">
      <div class="container-fluid text-left">
        <div class="row">
            <div class="col-md-3 col-md-offset-7" style="padding-left: 30px">
                <h1 class="page-header text-center" style="color: rgb(222,225,239); padding-bottom: 30px; padding-top: 30px; margin-top: 30px" >Contact Form Example</h1>
                <form class="form-horizontal"  role="form" method="post" action="index.php">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label" style="color: rgb(222,225,239)">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                            <?php echo "<p class='text-danger'>$errName</p>";?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label" style="color: rgb(222,225,239)">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                            <?php echo "<p class='text-danger'>$errEmail</p>";?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cash" class="col-sm-2 control-label" style="color: rgb(222,225,239)">Money</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                            <div class="input-group-addon">$</div>
                            <input type="text" class="form-control" id="cash" name="cash" placeholder="Amount" value="<?php echo htmlspecialchars($_POST['cash']); ?>">
                            <div class="input-group-addon">.00</div>
                                </div>
                            <?php echo "<p class='text-danger'>$errCash</p>";?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message" class="col-sm-2 control-label" style="color: rgb(222,225,239)">Message</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                            <?php echo "<p class='text-danger'>$errMessage</p>";?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                           <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                        </div>
                    </div>
                </form>
                <?php echo "\n<p>" . $response . "</p>\n"; ?>
            </div>
         </div>
         </div>
        </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    </body>
    </html>