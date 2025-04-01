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
    ?>
    <div class="container my-3">
        <h2 class="text-center" style="color:green;">Feedback</h2>
        <form action="insertData.php" method="POST">
            <div>
                <label for="">Name</label>
                <input type="text" name="name" id="">
            </div>
            <div>
                <label for="">Feedback</label>
                <input type="text" name="feedback" id="" class="form-control">
            </div>
            <input type="submit" value="Submit" class="btn btn-success">   
    </div>
    </body>
</html>