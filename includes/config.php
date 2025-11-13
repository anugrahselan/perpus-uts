<?php 

//Menentukan host, user, password, db_name sesuai dengan database yang dibuat

// user pass database
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'db_perpus';

//mematikan error reporting untuk mysqli
//mysqli_report(MYSQLI_REPORT_OFF);

//membuat koneksi
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

//eror handling
if ($mysqli->connect_error) {
    echo "Gagal melakukan koneksi ke MySQL: " . $mysqli->connect_error;
    exit();
}
?>