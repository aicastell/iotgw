<!DOCTYPE HTML>
<html>

<head>
<title>Login</title>
<meta charset="UTF-8">
<meta name="author" content="wittylabs.es">
<link rel="stylesheet" type="text/css" href="css/index_layout.css">
</head>

<body>

<div id="global_container_layout">

    <div id="header_content_layout">
        <h2>IoT Gateway Manager</h2>
    </div>

    <div id="subheader_layout">
        <h4>Login</h4>
    </div>

    <div id="section_padding_layout">
        <h1></h1>
    </div>

    <div id="section_content_layout">
        <div id="table_layout">
            <div id="table_col_layout">
                <form action="php/form_login.php" method="post">
                <fieldset>
                <legend>User login</legend>
                <label>UserId: </label><input type="text" name="userid"/><br>
                <label>Password: </label><input type="password" name="passwd"/><br><br>
                <input type="reset" value="Clean">
                <input type="submit" value="Check">
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

</html>

