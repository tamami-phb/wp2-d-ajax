<?php
require_once('../connection.php');

$rawData = file_get_contents('php://input');
$data = json_decode($rawData);

$sql = "insert into mahasiswa(nim, nama, kelas) values('" .
    $data->nim . "','" . $data->nama . "','" . $data->kelas . "')";
$result = pg_query($sql);
$row = pg_affected_rows($result);
$obj = new stdClass();
if($row > 0) {
    $obj->status = "success";
} else {
    $obj->status = "fail";
}
echo json_encode($obj);
?>