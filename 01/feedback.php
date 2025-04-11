<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Feedback</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="dstyle.css">
        <style>
            h2{
                text-align:center;
                color: rgb(0, 255, 213);
                background-color: rgba(195, 0, 255, 0.59);
                border-radius: 12px;
            }
            table, th ,td {
                border: 1px solid black;
                text-align: center;
            }
            table {
                margin-left: auto;
                margin-right: auto;
                margin-top: 75px;
            }
            body {
                background-image: url('f-14(6).jpg');
            }
            .text {
                background-color: rgba(0, 255, 13, 0.59);
                width: 180px;
                padding-left: 12px;
                padding-bottom:  4px;
                padding-top: 2px;
                border-radius: 8px;
            }

        </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
              <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-left">
                  <li class="nav-item"><a class="nav-link text-gray" href="\myweb\index.html">&lt;&lt;&lt;</a></li>
                  <li class="nav-item"><a class="nav-link text-gray" href="hello.html">Hello</a></li>
                  <li class="nav-item"><a class="nav-link text-gray" href="myprofile.html">My Profile</a></li>
                  <li class="nav-item"><a class="nav-link text-gray" href="myinterest.html">My Interest</a></li>
                  <li class="nav-item"><a class="nav-link text-gray" href="myskill.html">My Skill</a></li>
                  <li class="nav-item"><a class="nav-link text-white" href="feedback.php">Feedback</a></li>
                </ul>
              </div>
            </div>
        </nav>
        <br>
        <div class="container my-3">
            <h2 class="text-center">Feedback</h2>
            <form action="insertData.php" method="POST">
                <div>
                    <label for=""><h4 class="text">Name<h4></label>
                    <input type="text" name="name" id="" class="form-control">
                </div>
                <div>
                    <label for=""><h4 class="text">Feedback<h4></label>
                    <input type="text" name="feedback" id="" class="form-control" style="width: 500px;">
                </div>
                <input type="submit" value="Submit" class="btn btn-success">   
        </div>
        <table style="width:95%">
            <tr>
                <th style="width: 10%">Name</th>
                <th style="width: 70%">Feedback</th>
                <th style="width: 20%">Time</th>
            </tr>
            <?php
                require('dbconnect.php');
                $result = $con->query("SELECT * FROM feedback ORDER BY time DESC");
                $count = mysqli_num_rows($result);
                if ($count >= 10) $count = 10;
                for($i=0;$i<$count;$i++){
                    $row = mysqli_fetch_row($result);
                    echo "<tr>";
                    echo "<td>".$row[0]."</td>";
                    echo "<td style='text-align:left; padding-left:10px'>".$row[1]."</td>";
                    echo "<td>".$row[2]."</td>";
                    echo "</tr>";
                }
            ?>
        <table>
        <a href="showData.php">See all feedback</a>
    </body>
</html>