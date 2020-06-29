<?php
    require "db.php";
    require "session.php";
    unset($_SESSION['user_name']);
    unset($_SESSION['user_surname']);
    unset($_SESSION['user_email']);
    header('Location: ../users_admin_panel.php');
