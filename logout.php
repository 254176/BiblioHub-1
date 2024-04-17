<?php
require_once('lib/auth.php');

session_unset();
session_destroy();

header("Location: dashboard.php");
?>
