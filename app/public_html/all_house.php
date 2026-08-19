<?php
require_once('db_conect');
$fail = Fail::all();
$name_house = $_REQUEST['name_house'];
$rent_house  = $_REQUEST['rent_house'];
$address_house  = $_REQUEST['address_house'];
$time_house  = $_REQUEST['time_house'];
$content_house  = $_REQUEST['content_house'];