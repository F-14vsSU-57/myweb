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
            table {
                margin-left: auto;
                margin-right: auto;
            }
        </style>
    </head>
        <body>
        <a href="hello.html">Hello</a>
	    <a href="myprofile.html">My Profile</a>
	    <a href="myinterest.html">My Interest</a>
	    <a href="myskill.html">My Skill</a>
	    <a href="feedback.php">Feedback</a>
        <table style="width:95%">
            <tr>
                <th style="width: 10%">Name</th>
                <th>Feedback</th>
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
        <a href="http://localhost/myweb/feedback.php">Send feedback</a>

    </body>
</html>
