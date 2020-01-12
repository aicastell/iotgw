<?php
    include "ini_files.php";

    $LINEAS=parse_ini_file( "/etc/iotgw.ini" );

    $LINEAS["WIFI_SSID"] = $_POST["wifi_ssid"];
    $LINEAS["WIFI_PSK"] = $_POST["wifi_psk"];

    write_ini_file($LINEAS, "/etc/iotgw.ini");

    header ("Location: ../setup.php");
?>
