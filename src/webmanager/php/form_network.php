<?php
    include "ini_files.php";

    $LINEAS=parse_ini_file( "/etc/iotgw.ini" );

    $LINEAS["NETWORK_IPADDR"] = $_POST['ipaddr'];
    $LINEAS["NETWORK_NETMASK"] = $_POST['netmask'];
    $LINEAS["NETWORK_GATEWAY"] = $_POST['gateway'];

    write_ini_file($LINEAS, "/etc/iotgw.ini");

    header ("Location: ../setup.php");
?>
