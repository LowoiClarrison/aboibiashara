<?php
$myserver = "localhost";
$username = "root";
$pass = "";
//creating connection using object-oriented way.
$connection=new mysqli($myserver,$username,$pass);

if ($connection->connect_error){
    die("failed to connect to the database".$connection->connect_error);
}else{
    echo "Successfully connected to the db.";
}
//create database

