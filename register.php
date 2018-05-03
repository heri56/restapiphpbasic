<?php

$con = require_once('dbcon.php');
$arrayName = array('satu','garam' , );
if ($con) {
    // echo "Sukses";
    json_encode($arrayName[0]);
}else{
    echo "Error";
}