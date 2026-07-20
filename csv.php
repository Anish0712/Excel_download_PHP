<?php
include "db.php";

header('content-type:text/csv');
header('content-disposition:attachent; filename=emp.csv');

$output=fopen('php://output','w');
fputcsv($output,array('id','name','type','price'));
$result=$conn->query("select * from product");
while($row=$result->fetch_assoc()){
    fputcsv($output,$row);
}
?>