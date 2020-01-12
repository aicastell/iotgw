<?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header ("Location: index.php");
        exit();
    }
    include "php/ini_files.php";
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
        <h4>Setup</h4>
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
                <form action="php/form_network.php" method="post">
                <fieldset>
                <legend>Network</legend>
                <label>IP address: </label><input type="text" name="ipaddr" value=<?php echo read_varname("NETWORK_IPADDR");?>><br><br>
                <label>Netmask: </label><input type="text" name="netmask" value=<?php echo read_varname("NETWORK_NETMASK")?>><br><br>
                <label>Gateway: </label><input type="text" name="gateway" value=<?php echo read_varname("NETWORK_GATEWAY")?>>
                </fieldset>
                <br>
                <input type="submit" value="Update">
                </form>

                <form action="php/form_modem.php" method="post">
                <fieldset>
                <legend>Modem</legend>
                <label>SIM PIN: </label><input type="text" name="simpin" value=<?php echo read_varname("MODEM_SIMPIN")?>><br><br>
                <label>APN: </label><input type="text" name="apn" value=<?php echo read_varname("MODEM_APN")?>><br><br>
                <label>APN user: </label><input type="text" name="apn_user" value=<?php echo read_varname("MODEM_USER")?>><br><br>
                <label>APN password: </label><input type="text" name="apn_passwd" value=<?php echo read_varname("MODEM_PASSWD")?>><br><br>
                </fieldset>
                <br>
                <input type="submit" value="Update">
                </form>

                <form action="php/form_wifi.php" method="post">
                <fieldset>
                <legend>Wifi</legend>
                <label>WIFI SSID: </label><input type="text" name="wifi_ssid" value=<?php echo read_varname("WIFI_SSID")?>><br><br>
                <label>WIFI PSK: </label><input type="text" name="wifi_psk" value=<?php echo read_varname("WIFI_PSK")?>><br><br>
                </fieldset>
                <br>
                <input type="submit" value="Update">
                </form>

                <form action="php/form_usb.php" method="post">
                <fieldset>
                <legend>USB port</legend>
                <label>Baud rate: </label>
                <select name="usb_baudrate">
                <option <?php if (read_varname("USB_BAUDRATE") == "115200") echo "selected";?> value="115200">115200
                <option <?php if (read_varname("USB_BAUDRATE") == "57600") echo "selected";?> value="57600">57600
                <option <?php if (read_varname("USB_BAUDRATE") == "38400") echo "selected";?> value="38400">38400
                <option <?php if (read_varname("USB_BAUDRATE") == "19200") echo "selected";?> value="19200">19200
                <option <?php if (read_varname("USB_BAUDRATE") == "9600") echo "selected";?> value="9600">9600
                </select><br><br>
                <label>Data bits: </label>
                <select name="usb_databits">
                <option <?php if (read_varname("USB_DATABITS") == "8") echo "selected";?> value="8">8
                <option <?php if (read_varname("USB_DATABITS") == "7") echo "selected";?> value="7">7
                </select><br><br>
                <label>Parity: </label>
                <select name="usb_parity">
                <option <?php if (read_varname("USB_PARITY") == "none") echo "selected";?> value="none">none
                <option <?php if (read_varname("USB_PARITY") == "even") echo "selected";?> value="even">even
                <option <?php if (read_varname("USB_PARITY") == "odd") echo "selected";?> value="odd">odd
                </select><br><br>
                <label>Stop bits: </label>
                <select name="usb_stopbits">
                <option <?php if (read_varname("USB_STOPBITS") == "1") echo "selected";?> value="1">1
                <option <?php if (read_varname("USB_STOPBITS") == "2") echo "selected";?> value="2">2
                </select><br>
                </fieldset>
                <br>
                <input type="submit" value="Update">
                </form>

                <form action="php/form_rs485.php" method="post">
                <fieldset>
                <legend>RS485 port</legend>
                <label>Baud rate: </label>
                <select name="rs485_baudrate">
                <option <?php if (read_varname("RS485_BAUDRATE") == "115200") echo "selected";?> value="115200">115200
                <option <?php if (read_varname("RS485_BAUDRATE") == "57600") echo "selected";?> value="57600">57600
                <option <?php if (read_varname("RS485_BAUDRATE") == "38400") echo "selected";?> value="38400">38400
                <option <?php if (read_varname("RS485_BAUDRATE") == "19200") echo "selected";?> value="19200">19200
                <option <?php if (read_varname("RS485_BAUDRATE") == "9600") echo "selected";?> value="9600">9600
                </select><br><br>
                <label>Data bits: </label>
                <select name="rs485_databits">
                <option <?php if (read_varname("RS485_DATABITS") == "8") echo "selected";?> value="8">8
                <option <?php if (read_varname("RS485_DATABITS") == "7") echo "selected";?> value="7">7
                </select><br><br>
                <label>Parity: </label>
                <select name="rs485_parity">
                <option <?php if (read_varname("RS485_PARITY") == "none") echo "selected";?> value="none">none
                <option <?php if (read_varname("RS485_PARITY") == "even") echo "selected";?> value="even">even
                <option <?php if (read_varname("RS485_PARITY") == "odd") echo "selected";?> value="odd">odd
                </select><br><br>
                <label>Stop bits: </label>
                <select name="rs485_stopbits">
                <option <?php if (read_varname("RS485_STOPBITS") == "1") echo "selected";?> value="1">1
                <option <?php if (read_varname("RS485_STOPBITS") == "2") echo "selected";?> value="2">2
                </select>
                </fieldset>
                <br>
                <input type="submit" value="Update">
                </form>

                <form action="php/form_shutdown.php" method="post">
                <fieldset>
                <legend>System shutdown</legend>
                <label>Action:</label>
                <select name="shutdown_option">
                <option value="restart_network">Restart network</option><br><br>
                <option value="restart_system">Restart system</option><br><br>
                <option value="restart_database">Restart database</option><br><br>
                <option value="restart_machine">Restart machine</option><br><br>
                <option value="stop_machine">Stop machine</option>
                </select><br>
                </fieldset>
                <br>
                <input type="submit" value="Exec">
                </form>

                <form action="php/form_factoryreset.php" method="post">
                <fieldset>
                <legend>System reset</legend>
                <label>Factory reset?</label>
                </fieldset>
                <br>
                <input type="submit" value="Yes">
                <form>
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

