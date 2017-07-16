<?php
/**
 * Created by PhpStorm.
 * User: T0astBread
 * Date: 28.06.2017
 * Time: 21:00
 */
 
include "db-credentials.sensitive.internal.php";

$mysql = mysqli_connect($server, $user, $password, $db);
$mysql->set_charset("utf8");
?>