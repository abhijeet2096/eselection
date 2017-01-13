<?php
session_start() ;
session_destroy();
$_SESSION = [];
header("location: ../eselection-master/index.php"); 

?>