<?php
    $host = "localhost";
    $username = "root";
    $passwaord = "";
    $database = "database_sekolah";

    $koneksi = mysqli_connect($host, $username, $passwaord, $database);

    mysqli_select_db($koneksi, $database);