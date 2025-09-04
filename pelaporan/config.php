<?php 
    $DB_HOST = 'localhost';
    $DB_NAME = 'pelaporan';
    $DB_USER = 'root';
    $DB_PASS = '';

    $mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
    if (mysqli->connct_error) {
        die('Database connect error): '.$mysqli->connect_error);
    }

    $mysqli->set_charset('utf8mb4');
    session_start();
?>

<!-- mysqldump -u root -p pelaporan > c:\xampp\htdocs\myphp\latihanlombaunila\pelaporan\db\pelaporan.sql -->