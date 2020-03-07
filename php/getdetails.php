<?php
require_once "../config/dbconfig.php";

$sql = "SELECT u.id,ud.email,ud.contact,ud.dob FROM userdata ud,users u WHERE ud.userid = u.id";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
    $data = [];
    while ($row = $result->fetch_assoc()){
        array_push($data,$row);
    }
    echo '{"profiles":';
    echo json_encode($data, false);
    echo '}';
}
?>