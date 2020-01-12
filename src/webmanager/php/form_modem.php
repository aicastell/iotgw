<?php
    include "ini_files.php";

    $LINEAS=parse_ini_file( "/etc/iotgw.ini" );

    $LINEAS["MODEM_SIMPIN"] = $_POST["simpin"];
    $LINEAS["MODEM_APN"] = $_POST["apn"];
    $LINEAS["MODEM_USER"] = $_POST["apn_user"];
    $LINEAS["MODEM_PASSWD"] = $_POST["apn_passwd"];

    write_ini_file($LINEAS, "/etc/iotgw.ini");

    header ("Location: ../setup.php");
?>
