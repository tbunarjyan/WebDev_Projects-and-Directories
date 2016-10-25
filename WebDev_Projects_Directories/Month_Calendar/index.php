
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Month Calendar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    <script src="script.js"></script>
</head>
<body>
<div class="container-fluid" style="padding-right: 0px;  padding-left: 0px">
    <div class="background1">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default navbar-fixed-top" style=" background-color: rgb(44, 62, 80); border-color: rgba(248, 248, 248, 0); height: 80px;">
                    <div class="container">
                        <div class="navbar-header page scroll">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <h1 class="text-higher" style="font-size: 23px; color: rgb(255,255,255);margin-top: 30px">
                                <b>2016 Calendar, Hi!</b></h1>
                        </div>

                    </div>
                </nav>
            </div>
            <div class="row" style="text-align: center;  padding-bottom: 200px">
                <div class="col-sm-12" style="text-align: center; margin-top: 150px;padding-left: 300px;">
                    <?php
                    $date = time();
                    $day = date('d', $date);
                    $month = date('m', $date);
                    $year = date('Y', $date);
                    $first_day = mktime(0, 0, 0, $month, 1, $year);
                    $title = date('F', $first_day);
                    $day_of_week = date('D', $first_day);
                    switch ($day_of_week)
                    {
                        case "Sun":
                            $blank = 0;
                            break;

                        case "Mon":
                            $blank = 1;
                            break;

                        case "Tue":
                            $blank = 2;
                            break;

                        case "Wed":
                            $blank = 3;
                            break;

                        case "Thu":
                            $blank = 4;
                            break;

                        case "Fri":
                            $blank = 5;
                            break;

                        case "Sat":
                            $blank = 6;
                            break;
                    }

                    $days_in_month = cal_days_in_month(0, $month, $year);
                    echo "<table border=1 width=594; height=400>";
                    echo "<tr style='background-color: beige'>
                             <td colspan=7>$title $year</td>
                          </tr>";
                    echo "<tr>
                             <td width=42>SU</td>
                             <td width=42>MO</td>
                             <td width=42>TU</td>
                             <td width=42>WE</td>
                             <td width=42>TH</td>
                             <td width=42>FR</td>
                             <td width=42>SA</td>
                          </tr>";
                    $day_count = 1;
                    echo "<tr>";

                    while ($blank > 0)
                    {
                        echo "<td></td>";
                        $blank = $blank - 1;
                        $day_count++;
                    }

                    $day_num = 1;

                    while ($day_num <= $days_in_month)
                    {
                        echo "<td> $day_num </td>";
                        $day_num++;
                        $day_count++;
                        if ($day_count > 7)
                        {
                            echo "</tr><tr>";
                            $day_count = 1;
                        }
                    }

                    while ($day_count > 1 && $day_count <= 7)
                    {
                        echo "<td> </td>";
                        $day_count++;
                    }

                    echo "</tr></table>";
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row text-center">
        <div class="col-sm-12">
            <h1 class="text-center" style="font-size: 18px;color: rgb(255,255,255); margin:20px; margin-bottom:20px; padding-top:20px">Converters would appreciate, if you had used your mind instead.</h1>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>


  

 
 