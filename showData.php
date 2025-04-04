<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Feedback</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>
            h1{
                text-align:center;
                color:magenta;
            }
            table, th ,td {
                border: 1px solid black;
                text-align:center;
            }
        </style>
    </head>
        <body>
        <a href="http://localhost/myweb/hello.html">Hello</a>
        <a href="http://localhost/myweb/myprofile.html">My Profile</a>
        <a href="http://localhost/myweb/myinterest.html">My Interest</a>
        <a href="http://localhost/myweb/myskill.html">My Skill</a>
        <a href="http://localhost/myweb/feedback.php" style="color:red;">Feedback</a>
        <table style="width:95%">
            <tr>
                <th style="width: 10%">Name</th>
                <th>Feedback</th>
                <th style="width: 20%">Time</th>
            </tr>
            <?php
                require('dbconnect.php');

                $sql = "SELECT * FROM feedback";
                $result = mysqli_query($con,$sql);
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
        <table>
        <a href="http://localhost/myweb/hello.html">Main Menu</a>
        <br>
        <a href="http://localhost/myweb/feedback.php">Send feedback</a>

    </body>
</html>
