<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    if(isset($_POST['login'])){
        $username = $_POST [ 'username'];
        $password = $_POST [ 'password'];
    }
}


?>