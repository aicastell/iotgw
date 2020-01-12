<?php
    session_start();
    if (isset($_SESSION['usuario'])) {
        header ("Location: ../system.php");
        exit();
    }

    $userid = htmlspecialchars($_POST['userid']);
    $passwd = htmlspecialchars($_POST['passwd']);

    if (($userid != "") && ($passwd != ""))
    {
        if (($userid == "admin") && ($passwd == "admin"))
        {
            $_SESSION['usuario']=$userid;
            header ("Location: ../system.php");
        }
        else
        {
            header ("Location: ../index.php");
        }
    }
    else
    {
        header ("Location: ../index.php");
    }
?>

