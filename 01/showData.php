<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Feedback</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="dstyle.css">
        <style>
            h1{
                text-align:center;
                color:magenta;
            }
            table, th ,td {
                border: 1px solid black;
                text-align:center;
            }
            table {
                margin-left: auto;
                margin-right: auto;
            }
            body {
                background-image: url('f14(6).jpg');
            }
        </style>
    </head>
        <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
              <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-left">
                  <li class="nav-item"><a class="nav-link text-secondary" href="../">&lt;&lt;&lt;</a></li>
                  <li class="nav-item"><a class="nav-link text-secondary" href="hello.html">Hello</a></li>
                  <li class="nav-item"><a class="nav-link text-secondary" href="myprofile.html">My Profile</a></li>
                  <li class="nav-item"><a class="nav-link text-secondary" href="myinterest.html">My Interest</a></li>
                  <li class="nav-item"><a class="nav-link text-secondary" href="myskill.html">My Skill</a></li>
                  <li class="nav-item"><a class="nav-link text-white" href="feedback.php">Feedback</a></li>
                </ul>
              </div>
            </div>
        </nav>
            <table style="width:95%; margin: 30px">
                <tr>
                    <th style="width: 10%">Name</th>
                    <th>Feedback</th>
                    <th style="width: 20%">Time</th>
                </tr>
                <?php
                    require('dbconnect.php');
                    $result = $con->query("SELECT * FROM feedback ORDER BY time DESC");
                    $count = mysqli_num_rows($result);
                    for($i=0;$i<$count;$i++){
                        $row = mysqli_fetch_row($result);
                        echo "<tr>";
                        echo "<td>".$row[0]."</td>";
                        echo "<td style='text-align:left; padding-left:10px'>".$row[1]."</td>";
                        echo "<td>".$row[2]."</td>";
                        echo "</tr>";
                    }
                ?>
            </table>
            <a href="feedback.php">Send feedback</a>

    </body>
</html>
