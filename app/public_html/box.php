<?php
require_once('views/views.tpl.php');
if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id']; 
    $fail->find($id);
}

$fail = new Fail();
$name_house = $_REQUEST['name_house'];
$address = $_REQUEST['address'];
$time_house = $_REQUEST['time_house'];
$rent_house = $_REQUEST['rent_house'];


