<?php
require_once '../connection.php';

$rawData = file_get_contents('php://input');
$data = json_decode($rawData);

$sql = "select * from mahasiswa where nim='" . $data->nim . "'";
$result = pg_query($sql);
$jsonResult = json_encode(pg_fetch_object($result));

echo $jsonResult;
?>