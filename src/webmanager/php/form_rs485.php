<?php
    include "ini_files.php";

    $LINEAS=parse_ini_file( "/etc/iotgw.ini" );

    $LINEAS["RS485_BAUDRATE"] = $_POST["rs485_baudrate"];
    $LINEAS["RS485_DATABITS"] = $_POST["rs485_databits"];
    $LINEAS["RS485_PARITY"] = $_POST["rs485_parity"];
    $LINEAS["RS485_STOPBITS"] = $_POST["rs485_stopbits"];

    write_ini_file($LINEAS, "/etc/iotgw.ini");

    header ("Location: ../setup.php");
?>
