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
        <a href="http://localhost/myweb/hello.html">Hello</a>
        <a href="http://localhost/myweb/myprofile.html">My Profile</a>
        <a href="http://localhost/myweb/myinterest.html">My Interest</a>
        <a href="http://localhost/myweb/myskill.html">My Skill</a>
        <a href="http://localhost/myweb/feedback.php" style="color:red;">Feedback</a>
        <br>
        <?php
        require('dbconnect.php');

        $name = $_POST["name"];
        $feedback = $_POST["feedback"];

        $sql = "INSERT INTO feedback(name,feedback) VALUES('$name','$feedback')";

        $result = mysqli_query($con,$sql);

        if($result) echo "Thank you for feedback";
        else echo "Error";      
        ?>

        <br>
        <a href="http://localhost/myweb/hello.html">Main Menu</a>
        <a href="http://localhost/myweb/feedback.php">Send more feedback</a>

    </body>
</html>
