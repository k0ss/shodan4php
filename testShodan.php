<?php
/**
 * User: Kyle Ossinger
 * Date: 2/1/14
 * Time: 11:22 PM
 */
include_once("./shodan4php.php");
$APIKEY = "";
$shodan = new shodan4php($APIKEY);
$info = $shodan->info();
print_r($info);
?>