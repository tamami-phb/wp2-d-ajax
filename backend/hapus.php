<?php
$data = $_GET["nim"];
$obj = new stdClass();
$obj->status = $data;
echo json_encode($obj);
?>