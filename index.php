<?php
ini_set( 'display_errors', 1 );
error_reporting(E_ALL);

//$type = "test";
if(isset($_POST['type'])) $type = $_POST['type'];
if(isset($_POST['data'])) $data = $_POST['data'];

if(isset($type))
{
//    $data = "testdata";

    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "testdb";

    $db = new PDO("mysql:host=" . $db_host . ";dbname=" . $db_name, $db_user, $db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->exec("insert into data_table (name, age) values ('" . $data . "', 43)");
}
