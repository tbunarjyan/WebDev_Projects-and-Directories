
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link rel = "stylesheet" href = "style.css">
</head>
<body>
<div class="container-fluid" style="padding: 0px">
    <nav class="navbar navbar-default" style="margin: 0px; border-radius: 0px; padding: 0px ">
        <div class="row">
            <div class="col-sm-12" style="font-family: Arial">
                <div class="navbar-header" style="border: 0px">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">User Data Pagination</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="row" style="margin: 0px">
        <div class="col-sm-3 col-md-2 " style="font-family: Arial; background-color: #F5F5F5;  padding-left: 0px; position: fixed; height: 100%; display: block; overflow-y: auto">
            <div class="list-group" style="margin: 0px; padding-top: 18px; margin-right: -20px; margin-left: -2px;  line-height: 16px">
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="index.php?link=courses">&nbsp;User Data</a></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-10 sidebar col-sm-offset-2 sidebar col-md-10 sidebar col-md-offset-2 sidebar main" style="padding-top: 0px; padding-left: 30px; position: fixed; margin-right: 0px; font-family: Arial;  height: 100%; overflow-y: auto">
            <div class="row" style="padding-left: 0px; margin-right: 10px" >
                <div class="col-xs-12 col-sm-12">
                    <p class="dashboard" style="padding-top: 14px; padding-bottom: 3px; font-size: 32px; border-bottom: 1px solid #eee">Users in Table</p>
                </div>
            </div>

            <?php
            $link = $_GET["link"];

            if ($link == "courses")
            {
                echo '<div class = "page-header" style="margin: 0px">
                    <h1><button class = "btn btn-success" id="myBtn">Add a User</button></h1>
                  </div>';
                define("ITEMS_PER_PAGE", 4);
                $courses = [];
                $idList = [];
                $titleList = [];
                $instructorList = [];
                $url = "info.txt";
                $content = file_get_contents($url);
                $courses = explode("\n", $content);
                for ($i = 0; $i < count($courses); $i++)
                {
                    $components = explode("|", $courses[$i]);
                    $idList[$i] = $components[0];
                    if (isset($components[1]) && isset($components[2]))
                    {
                        $titleList[$i] = $components[1];
                        $instructorList[$i] = $components[2];
                    }
                }

                $currentPage = 1;
                if (isset($_GET["page"]))
                {
                    $currentPage = $_GET["page"];
                }

                $totalPageCount = ceil(count($courses) / ITEMS_PER_PAGE);
                $start = ($currentPage - 1) * ITEMS_PER_PAGE;
                $limit = ITEMS_PER_PAGE;
                if ($start + $limit > count($courses))
                {
                    $limit = count($courses) - 1;
                }

                if (isset($_GET["del"]))
                {
                    $delId = $_GET["del"];
                    for ($j = 0; $j < count($idList); $j++)
                    {
                        if ($idList[$j] == $delId)
                        {
                            unset($idList[$j]);
                            unset($instructorList[$j]);
                            unset($titleList[$j]);
                        }
                    }
                }

                $coursesFile = fopen("info.txt", "w");
                for ($index = 0; $index < count($idList); $index++)
                {
                    if (isset($idList[$index]))
                    {
                        if (strlen($idList[$index]) > 0)
                        {
                            fwrite($coursesFile, $idList[$index] . "|");
                            fwrite($coursesFile, $titleList[$index] . "|");
                            fwrite($coursesFile, $instructorList[$index] . "\n");
                        }
                    }
                }

                if (isset($_GET["action"]))
                {
                    if ($_GET["action"] == "add")
                    {
                        if (isset($_POST["title"]) && isset($_POST["instructor"]))
                        {
                            try
                            {
                                $title = $_POST["title"];
                                $instructor = $_POST["instructor"];
                                $fileCourses = fopen("info.txt", "a+");
                                $thisCourseId = rand(1000, 9999);
                                fwrite($fileCourses, $thisCourseId . "|");
                                fwrite($fileCourses, $title . "|");
                                fwrite($fileCourses, $instructor . "\n");
                                fclose($fileCourses);
                            }

                            catch(Exception $e)
                            {
                                echo "something went wrong";
                            }
                        }
                    }
                }

                echo '<table class = "table table-striped">';
                echo "<thead>";
                echo '<th>' . 'ID' . '</th>';
                echo '<th>' . 'Name' . '</th>';
                echo '<th>' . 'Instructor' . '</th>';
                echo '<th>' . 'Action' . '</th>';
                echo "</thead>";
                for ($i = $start; $i < $start + $limit; $i++)
                {
                    if (isset($idList[$i]) && isset($titleList[$i]) && isset($instructorList[$i]))
                    {
                        echo "<tr>";
                        echo "<td>" . $idList[$i] . "</td>";
                        echo "<td>" . $titleList[$i] . "</td>";
                        echo "<td>" . $instructorList[$i] . "</td>";
                        $del = $idList[$i];
                        echo '<td class = "rightCol"><a href = "index.php?del=' . $del . '&page=' . $currentPage . '&link=courses" class = "btn btn-danger">Remove&nbsp;<span class = "glyphicon glyphicon-trash"></span></a></td>';
                        echo "</tr>";
                    }
                }

                echo "</table>";
                echo '<ul class = "pagination">';
                if ($currentPage == 1)
                {
                    echo '<li>
                        <a href = "index.php?link=courses&page= ' . $totalPageCount . '" aria-label="Next">
                          <span aria-hidden="true">&laquo;</span>
                        </a>
                      </li>';
                }
                else
                {
                    echo '<li>
                    <a href = "index.php?link=courses&page= ' . ($currentPage - 1) . '" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>';
                }

                for ($i = 1; $i <= $totalPageCount; $i++)
                {
                    $style = '';
                    if ($i == $currentPage)
                    {
                        $style = "font-weight: bold;";
                    }

                    echo "<li>";
                    echo '<a href = "index.php?link=courses&page= ' . $i . '" style = "' . $style . '">' . $i . '</a>';
                    echo "</li>";
                }

                if ($currentPage == $totalPageCount)
                {
                    echo '<li>
                    <a href = "index.php?link=courses&page= ' . 1 . '" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span> 
                    </a> 
                  </li>';
                }
                else
                {
                    echo '<li>
                    <a href = "index.php?link=courses&page= ' . ($currentPage + 1) . '" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>';
                }

                echo "</ul>";
                ?>

                <div id="myModal" class="modal">
                    <div class="modal-content">
                        <span class="close">x</span>
                        <form action = "index.php?link=courses&action=add" method="post" enctype="multipart/form-data">
                            <input type = "text" placeholder = "Title" class = "form-control addCourse" name = "title">
                            <input type = "text" placeholder = "Instructor" class = "form-control addCourse" name = "instructor">
                            <button type = "submit" class = "btn btn-info addCourseBtn">Submit</button>
                        </form>
                    </div>
                </div>

                <script>
                    var modal = document.getElementById('myModal');
                    var btn = document.getElementById("myBtn");
                    var span = document.getElementsByClassName("close")[0];
                    btn.onclick = function() {
                        modal.style.display = "block";
                    }
                    span.onclick = function() {
                        modal.style.display = "none";
                    }
                    window.onclick = function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }
                </script>

                <?php
            } ?>

        </div>
    </div>
</div>
</body>
</html>

  

 
 