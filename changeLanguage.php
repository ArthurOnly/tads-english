<?php
session_start();
$_SESSION['lang'] = $_REQUEST['lang'];
return 1;
?>