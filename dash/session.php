<?php

session_start();
  if (!isset($_SESSION['user']) ||(trim ($_SESSION['user']) == '')) {
  header('location:login-register.html');
    exit();
  }


?>


