<?php
require_once '../connection.php';

$rawData = file_get_contents('php://input');
$data = json_decode($rawData);

$sql = "update mahasiswa set " .
    "nama='" . $data->nama . "'," .
    "kelas='" . $data->kelas . "' " .
    "where nim='" . $data->nim . "'";
$result = pg_query(sql);
$row = pg_affected_rows($result);
$obj = new stdClass();
if($row > 0) {
    $obj->status = "success";
} else {
    $obj->status = "fail";
}
return $obj;
?>