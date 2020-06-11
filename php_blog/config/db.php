<?php 
//create connection

$conn = mysqli_connect('localhost','root','','blog_data');

//check connection

if(mysqli_connect_errno()){
    //conn failed

echo 'Failed to Connect '. mysqli_connect_errno();

}

?>