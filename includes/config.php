<?php
$db_conn = mysqli_connect('localhost', 'root', '', 'sms_project');

if (!$db_conn) {
  die("Database connection failed: " . mysqli_connect_error());
  session_start();
}




include_once("functions.php");
