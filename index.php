<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/9/29
 * Time: 20:53
 */
include "./libs/db/Mysqli.php";

$db = new Mage_DB_Mysqli();
$db->connect("localhost", "root", "", "test");
$db->query("");

?>
<pre
