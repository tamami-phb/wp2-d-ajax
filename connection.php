<?php
$conn_string = "host=satao.db.elephantsql.com " . 
  "port=5432 dbname=fzxmwwps " .
  "user=fzxmwwps " . 
  "password=UOgfEogE3J3qr3CdC447Gep8iQBfacZI";
$conn = pg_connect($conn_string);

// if($conn) {
//     echo "Koneksi database berhasil tersambung";
// } else {
//     echo "Koneksi dengan database GAGAL tersambung";
// }
?>