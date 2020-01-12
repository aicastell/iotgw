<?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header ("Location: index.php");
        exit();
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
        <h4>Logout</h4>
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
                <div id="form_layout">
                    <form method="post" action="php/logout.php">
                    <fieldset>
                    <legend>Logout</legend>
                    <label>Are you sure?</label><br>
                    </fieldset>
                    <br>
                    <input type="submit" value="Yes">
                    </form>
                </div>
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

