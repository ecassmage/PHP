<?php
$host = 'localhost';
$username = 'root';
$password = 'evanm';
$database = 'people';

$conn = new mysqli($host, $username, $password, $database);

if ($conn -> connect_error){
    die('Connection Failed: '.$conn->connect_error);
}

function login_to_account($username, $password){

}