<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
require __DIR__ . "/vendor/autoload.php";
$home = new tree\src\Controllers\HomeController();
if(count($_GET)==0) {
    $home->index();
}
else if(isset($_POST['name'])){
    $home->add($_POST);
}
