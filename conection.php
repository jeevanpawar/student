<?php
$con = mysql_connect("localhost","root","bitnami");
if (!$con)
  {
     die('Could not connect: ' . mysql_error());
  }

mysql_select_db("studentinfo", $con);
?>
