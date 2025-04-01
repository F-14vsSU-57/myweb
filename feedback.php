<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Hello</title>
        <style>
            h1{
                text-align:center;
                color:magenta;
            }
        </style>
    </head>
    <body>
	<a href="http://localhost/myweb/hello.html" style="color:red;">Hello</a>
	<a href="http://localhost/myweb/myprofile.html">My Profile</a>
	<a href="http://localhost/myweb/myinterest.html">My Interest</a>
	<a href="http://localhost/myweb/myskill.html">My Skill</a>
	<a href="http://localhost/myweb/feedback.php">Feedback</a>
	
	<?php
    $foo = "bruh";
    $bar = 69; 
    echo $foo."<br>";
    echo $bar."lol"."<br>";
    echo gettype($foo)."<br>";
    echo gettype($bar)."<br>";
    $a1="68"."<br>";
    $a2=1;
    echo $a1+$a2;
    $b = 69.0;
    $b = (integer)$b;
    echo gettype($b);
    ?>
    </body>
</html>