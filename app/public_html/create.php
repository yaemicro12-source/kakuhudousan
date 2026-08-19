<?php
require_once('db_conect');
$fail = new Fail();
$fail->name_house = $_REQUEST['name_house'];
$fail->address = $_REQUEST['address'];
$fail->time_house = $_REQUEST['time_house'];
$fail->rent_house = $_REQUEST['rent_house'];
$fail->address_house = $_REQUEST['address_house'];
$fail->save();