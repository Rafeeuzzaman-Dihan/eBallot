<?php
session_start();

session_destroy(); // Destroying All Sessions

    header("Location: ../View/LoginAdminView.php"); // Redirecting To Home Page

?>