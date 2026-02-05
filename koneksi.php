<?php
session_start();

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$koneksi = mysqli_connect("localhost", "root", "", "e_perpus");

//check connection
if (mysqli_connect_errno()) {
    echo "filed to connect to mySQL : " . mysqli_connect_error();
}
?>