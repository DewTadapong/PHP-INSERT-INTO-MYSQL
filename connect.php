<?php
 // connect to mysql                             name database
$connect = mysqli_connect('localhost','root','','hotel');
if(mysqli_connect_error($connect)){
    echo 'Error to connect';
}

?>