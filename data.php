<?php

include "dbcon.php";

$sql = "select field1,field2,field3 from table";

$resultArray = array();
$q = $mysqli->query($sql);
while ($r = $q->fetch_assoc()) {
    array_push($resultArray, $r);
}


echo json_encode($resultArray);
mysqli_close($mysqli);
?>
