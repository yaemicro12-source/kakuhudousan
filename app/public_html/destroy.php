<?php
require_once('db_conect');

if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id']
    $fail = Fail::find($id)
    $fail->delete();
}