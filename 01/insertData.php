<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Thank you for Feedback</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>
            h1 {
                color: rgb(0, 52, 121);
                background-color: rgba(255, 255, 255, 0.5);
                margin-top: 30px;
                padding-top: 20px;
                padding-bottom: 30px;
                font-weight: bold;
            }
            body {
                background-image: url("../vr-f-14(1).jpg");
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
                background-position: bottom;
            }
            .btn-secondary {
                margin-left: 15px;
                margin-top: 15px;
                padding-top: 8px;
                padding-bottom: 15px;
                padding-left: 15px;
                width: 75px;
                height: 40px;
            }
        </style>
    </head>
    <body>
        <div class="text-center">
            <?php
                require('dbconnect.php');
                date_default_timezone_set("Asia/Bangkok");

                $name = $_POST["name"];
                $feedback = $_POST["feedback"];
                $time = date("Y/m/d H:i:s");

                $sql = "INSERT INTO feedback(name,feedback,time) VALUES('$name','$feedback','$time')";

                $result = mysqli_query($con,$sql);

                if($result) echo "<h1>Thank you for feedback<h1>";
                else echo "<h1>Error<h1>";      
            ?>
        </div>
        
        <meta http-equiv="refresh" content="2; url=feedback.php">
    </body>
</html>
