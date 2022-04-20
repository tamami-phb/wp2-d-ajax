<?php
require_once '../connection.php';

$data = $_GET["nim"];
$obj = new stdClass();
// $obj->status = $data;

$sql = "delete from mahasiswa where nim='" . $data . "'";
$result = pg_query($sql);
$row = pg_affected_rows($result);

if($row > 0) {
    $obj->status = "success";
} else {
    $obj->status = "fail";
}

echo json_encode($obj);
?>