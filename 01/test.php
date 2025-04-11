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
    $a1="68";
    $a2=1;
    echo $a1+$a2;
    $b = 69.0;
    $b = (integer)$b;
    echo gettype($b)."<br>";
    define("foo",69);
    echo foo."<br>";
    echo isset($foo)."<br>";
    unset($foo);
    echo isset($foo)."<br>";
    if(foo==69) {
        echo "funny"."<br>";
    }
    else {
        echo "unfunny"."<br>";
    }
    $arr = array(68,69,70);
    $arr = [68,69,70];
    print_r($arr);
    echo "<br>";
    $xten = [10,20,30,40,50,69,70,80,90];
    for($i=0;$i<count($xten);$i++) {
        print($xten[$i]."<br>");
    } 
    $num = [1=>"one",2=>"two",3=>"three",69=>"sixty-nine"];
    function print_a($arr) {
        foreach ($arr as $key => $value) {
            print($key."=>".$value."<br>");
        }
        print("<br>");
    }
    print_a($num);
    $arr2d = [[11,12,13,14,15],
              [21,22,23,24,25],
              [31,32,33,34,35],
              [41,42,43,44,45]];
    print($arr2d[3][2]."<br>");
    
    function print_arr($arr){
        print_r($arr);
        print("<br>");
    }
    array_push($xten,100);
    print_arr($xten);
    array_pop($xten);
    print_arr($xten);
    array_unshift($xten,0);
    print_arr($xten);
    array_shift($xten);
    print_arr($xten);
    array_splice($xten,1,2);
    print_arr($xten);
    rsort($xten);
    print_arr($xten);
    sort($xten);
    print_arr($xten);

    print("<br>");

    arsort($num);
    print_a($num);
    asort($num);
    print_a($num);
    krsort($num);
    print_a($num);
    ksort($num);
    print_a($num);
    
    $number = [1,2,3,4,5,6,7,8,9,10];
    print_arr($number);
    
    shuffle($number);
    print_arr($number);
    
    $rnumber = array_reverse($number);
    print_arr($rnumber);
    print("<br>");

    print_arr(array_keys($num));
    print_arr(array_values($num));
    print("<br>");

    print_a(array_flip($num));
    
    array_push($number,10);
    print_arr($number);
    print_arr(array_unique($number));

    if(array_key_exists(69,$num)) print("Key 69 exists in number"."<br>");
    else print("Key 69 not exists in number"."<br>");

    if(in_array("sixty-nine",$num)) print("Value sixty-nine exists in num"."<br>");
    else print("Value sixty-nine not exists in num"."<br>");

    $xten = [10,20,30,40,50,69,70,80,90,100];
    $number = [1,2,3,4,5,6,7,8,9,10];
    print_arr(array_merge($number,$xten));
    print_arr(array_merge_recursive($number,$xten));
    print_a(array_combine($number,$xten));
    
    
    ?>
    </body>
</html>