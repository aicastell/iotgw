<?php
    shell_exec("cp /etc/iotgw.ini.factory /etc/iotgw.ini");
    header ("Location: ../setup.php");
?>
