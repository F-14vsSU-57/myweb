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
        </style>
    </head>
        <body>
        <?php
        require('dbconnect.php');
        date_default_timezone_set("Asia/Bangkok");

        $name = $_POST["name"];
        $feedback = $_POST["feedback"];
        $time = date("Y/m/d H:i:s");

        $sql = "INSERT INTO feedback(name,feedback,time) VALUES('$name','$feedback','$time')";

        $result = mysqli_query($con,$sql);

        if($result) echo "Thank you for feedback";
        else echo "Error";      
        ?>
    <meta http-equiv="refresh" content="1; url=feedback.php">
    </body>
</html>
