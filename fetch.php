<!DOCTYPE html>
<html>
<head>
<style>
table, th, td{
border: 1px solid black;
}
</style>
</head>
<body>




<?php
session_start();

//$id=(int)$_COOKIE["user"];

$con=mysql_connect("localhost","root","");
$t=0;
if(!$con)
{
	die('Could Not Connect: '. mysql_error());
}
 else {
    echo 'Connected MySQL';
}

mysql_select_db("dbtest2",$con);

$selected = mysql_select_db("dbtest2", $con)
        or die("could not connect to DATABASE");
/* @var $result type */ $id = $_POST['id'];    
$result = mysql_query("SELECT * from fee_sub where ID='$id' ");
$resultk = mysql_query("SELECT * from sphone where ID='$id' ");
$resultt = mysql_query("SELECT * from address where ID='$id' ");
$resulte = mysql_query("SELECT * from semail where ID='$id' ");
$results = mysql_query("SELECT * from subject where ID='$id' ");

while ($row = mysql_fetch_array($result)):
 echo"<table><tr><th>ID</th> <th> INSTITUTE</th><th> ACCOUNT</th><th> STUDENT NAME</th></tr>";
    $id = $row['ID'];
   $name = $row['INSTITUTE'];
   $sname = $row['STU_NAME'];
   
    echo "<tr> <td> $id</td><td>$name</td><td> $acc</td><td>$sname</td></tr> ";
	echo"</table>";
endwhile;
echo"<br>";


//address fetch
//$resultt = mysql_query("SELECT * from address where ID='$id' ");

while ($row = mysql_fetch_array($resultt)):
 echo"<table><tr><th>ADDRESS LINE1</th> <th> ADDRESS LINE2</th><th> PIN</th><th> CITY</th><th> STATE</th>
     <th>COUNTRY</th></tr>";
    $id = $row['LINE1'];
   $name = $row['LINE2'];
   $acc = $row['PIN'];
   $sname = $row['CITY'];
   $fname = $row['STATE'];
   $yr = $row['COUNTRY'];
   //$br = $row['BR'];
   
    echo "<tr> <td> $id</td><td>$name</td><td> $acc</td><td>$sname</td></tr> ";
	echo"</table>";
endwhile;
echo"<br>";
//phone
//$resultk = mysql_query("SELECT * from sphone where ID='$id' ");
while ($row = mysql_fetch_array($resultk)):
echo"<table><tr><th>PHONE NUMBER</th> <th>TYPE</th></tr>";
    $id = $row['NUMBER'];
   $name = $row['TYPE'];
   //$acc = $row['PIN'];
   //$sname = $row['CITY'];
   //$fname = $row['STATE'];
   //$yr = $row['COUNTRY'];
   //$br = $row['BR'];
   
    echo "<tr> <td> $id</td><td>$name</td></tr> ";
	echo"</table>";
endwhile;
echo"<br>";
//email
while ($row = mysql_fetch_array($resulte)):
 echo"<table><tr><th>EMAIL ADDRESS</th> <th> TYPE</th></tr>";
    $id = $row['EMAIL'];
   $name = $row['TYPE'];
  /*
   $sname = $row['STU_NAME'];
  */
   
    echo "<tr> <td> $id</td><td>$name</td></tr> ";
	echo"</table>";
endwhile;
echo"<br>";

mysql_close($con);
?>
</body>
</html>
