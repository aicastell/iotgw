<?php
    include "ini_files.php";

    $LINEAS=parse_ini_file( "/etc/iotgw.ini" );

    $LINEAS["USB_BAUDRATE"] = $_POST["usb_baudrate"];
    $LINEAS["USB_DATABITS"] = $_POST["usb_databits"];
    $LINEAS["USB_PARITY"] = $_POST["usb_parity"];
    $LINEAS["USB_STOPBITS"] = $_POST["usb_stopbits"];

    write_ini_file($LINEAS, "/etc/iotgw.ini");

    header ("Location: ../setup.php");
?>
