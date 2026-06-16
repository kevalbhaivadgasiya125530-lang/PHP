<?php

const UNIVERSITY = "Marwadi University";

$name = "Kevalbhai Vadgasiya";

$sub1 = 80;
$sub2 = 55;
$sub3 = 90;
$sub4 = 85;
$sub5 = 77;
$sub6 = 66;

$total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5 + $sub6;
$percentage = $total / 6;

echo("<h1>RESULT</h1><br>");
echo("University : ".UNIVERSITY."<br>");
echo("-------------------------<br>");
echo("Student Name : ".$name."<br>");
echo("-------------------------<br>");
echo("Previous Semester Result<br>");
echo("-------------------------<br>");
echo("Subjects & Marks<br>");
echo("-------------------------<br>");
echo("PHP : ".$sub1."<br>");
echo("Java : ".$sub2."<br>");
echo("Python : ".$sub3."<br>");
echo("DBMS : ".$sub4."<br>");
echo("Web Design : ".$sub5."<br>");
echo("Computer Network : ".$sub6."<br>");
echo("-------------------------<br>");
echo("Total : ".$total."<br>");
echo("Percentage : ".$percentage."%<br>");
echo("Grade : A<br>");
echo("-------------------------<br>");

?>