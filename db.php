<?php
$servername="localhost";
$username="root";
$password="";
$db_name="excel_download";

$conn=new mysqli($servername,$username,$password,$db_name);

if(!$conn){
    echo "Db not connected";
}
?>