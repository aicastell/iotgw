<?php
    if ($_POST["shutdown_option"] == "restart_network") {
        echo "/etc/init.d/network restart";
    }
    else if ($_POST["shutdown_option"] == "restart_system") {
        echo "/etc/init.d/iotgw restart";
    }
    else if ($_POST["shutdown_option"] == "restart_database") {
        echo "/etc/init.d/postgresql restart";
    }
    else if ($_POST["shutdown_option"] == "restart_machine") {
        echo "/sbin/reboot";
    }
    else if ($_POST["shutdown_option"] == "stop_machine") {
        echo "/sbin/shutdown -h now";
    }
?>
