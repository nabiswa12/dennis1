<?php

// The connection will be attempted .

$link =mysql_connect("localhost","root","");

//selecting database Mboswa bus services
mysql_select_db("Mboswa bus services",$link);
//variables that hold data from the html form
$bus=$_POST['bus'];
$day=$_POST['day'];
$month=$_POST['month'];
$type=$_POST['type'];
$from=$_POST['from'];
$to=$_POST['to'];
$root=$_POST['root'];

$mob=$_POST['mob'];
$rmob=$_POST['rmob'];

//insert statement to populate table book
$stat1= "insert into book values
          ('$bus','$day','$month',
           '$type','$from','$to','$root','$mob','$rmob')";

mysql_query($stat1);['value']



?>
