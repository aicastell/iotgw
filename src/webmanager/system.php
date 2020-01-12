<?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header ("Location: index.php");
        exit();
    }

function getMacAddr()
{
    ob_start();
    system("cat /sys/class/net/eth0/address");
    $mac=ob_get_contents();
    ob_clean();
    return $mac;
}

function getCurrentDate()
{
    ob_start();
    system("date +%Y:%m:%d");
    $date=ob_get_contents();
    ob_clean();
    return $date;
}

function getCurrentTime()
{
    ob_start();
    system("date +%H:%M:%S");
    $time=ob_get_contents();
    ob_clean();
    return $time;
}

function getDiskFree()
{
    ob_start();
    system("df |grep sda|head -1|sed \"s/  */#/g\" | cut -f 5 -d \"#\"");
    $diskfree=ob_get_contents();
    ob_clean();
    return $diskfree;
}

function getModemSignal()
{
    $modemsignal="0dbms";
    return $modemsignal;
}

function getDbStatus()
{
    ob_start();
    system("service postgresql status | cut -f 2 -d ':'");
    $dbstatus=ob_get_contents();
    ob_clean();
    echo $dbstatus;
}

?>

<!doctype html>
<head>
<meta charset="UTF-8">
<meta name="author" content="wittylabs.es">
<link rel="stylesheet" type="text/css" href="css/layout.css">
</head>

<body>

<div id="global_container_layout">

    <div id="header_content_layout">
        <h2>IoT Gateway Manager</h2>
    </div>

    <div id="subheader_layout">
        <h4>System</h4>
    </div>

    <div id="menu_layout">
        <nav>
        <ul>
        <li><a href="system.php">System</a></li>
        <li><a href="setup.php">Setup</a></li>
        <li><a href="logout.php">Logout</a></li>
        </ul>
        </nav>
    </div>

    <div id="section_padding_layout">
        <h1></h1>
    </div>

    <div id="section_content_layout">
        <div id="table_layout">
            <div id="table_col_layout">
                <form>
                <fieldset>
                <legend>Information</legend>
                <label>Product: </label><input type="text" value="IoT Gateway Manager" readonly><br><br>
                <label>MAC:</label><input type="text" value=<?php echo getMacAddr();?> readonly><br><br>
                <label>Firmware: </label><input type="text" value="1.0" readonly><br><br>
                <label>Date:</label><input type="text" value=<?php echo getCurrentDate();?> readonly><br><br>
                <label>Time:</label><input type="text" value=<?php echo getCurrentTime();?> readonly><br><br>
                <label>Disk (%):</label><input type="text" value=<?php echo getDiskFree();?> readonly><br><br>
                <label>Modem signal:</label><input type="text" value=<?php echo getModemSignal();?> readonly><br><br>
                <label>Db status:</label><input type="text" value=<?php echo getDbStatus();?> readonly><br><br>
                </fieldset>
                </form>
            </div>
        </div>
    </div>

   <div id="section_padding_layout">
        <h1></h1>
    </div>

    <div id="footer_layout">
        <p>Designed and Developed by <a href="http://www.wittylabs.es">WittyLabs</a> (2015)</p>
    </div>

</div>

</body>

