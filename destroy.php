<?php
session_start();
session_destroy();



header('Location: ./bank1.php');
exit;

?>