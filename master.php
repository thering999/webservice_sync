
<?php
 header('Access-Control-Allow-Origin: *');
 header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
 header('Access-Control-Allow-Headers: Content-Type,x-prototype-version,x-requested-with');

include "dbcon.php";

$myurl = $_POST['url_json'];
$tostr = str_replace("\\", "", $myurl);

$k = json_decode($tostr);

if (count($k) > 0) {
    for ($i = 0; $i < count($k); $i++) {
        $field1 = $k[$i]->field1;
        $field2 = $k[$i]->field2;
        $field3 = $k[$i]->field3;


        $sql = "replace into table (field1,field2,field3)
        value ('$field1','$field','$field3')";

        $result = $mysqli->query($sql);

	#$klog_province=$k[$i]->dp_prov;
    }



    echo "<h1>Complete total : ".count($k)." number</h1>";
} else {
    echo "<h1>Fail</h1>";
}

?>
