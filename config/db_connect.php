<?php

$conn=mysqli_connect('localhost','newone','san123','todo');

if(!$conn){
    echo "Connection error" . mysqli_connect_error();
}


