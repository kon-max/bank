<?php
session_start();
if (isset ($_SESSION['user'] and !empty($_SESSION['user']))
    {
        session_unset();
        session_destroy();
    }
    header('Location: index.php');
    exit;
?>