<?php
$conn_str = "host=john.db.elephantsql.com " .
    "port=5432 " .
    "user=cxdpilyr " .
    "dbname=cxdpilyr " .
    "password=nMP282S_IN03aqGZVdHJCF_5xNc6_4yB";
$conn = pg_connect($conn_str);

if($conn) {
    echo "<h3>Koneksi Berhasil</h3>";
} else {
    echo "<h3>Koneksi GAGAL TERSAMBUNG</h3>";
}
?>