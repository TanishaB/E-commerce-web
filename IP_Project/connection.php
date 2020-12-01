<?php
$db=new mysqli('localhost','root','','ecommerce');
if($db->connect_error){
    echo $db->connect_error;
}
?>