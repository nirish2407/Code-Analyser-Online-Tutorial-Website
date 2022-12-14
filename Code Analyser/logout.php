<?php

session_start();

session_unset();

session_destroy();

echo '<script language="javascript">';
echo 'location.replace("index.php");';
echo '</script>';

?>

