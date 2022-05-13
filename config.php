<?php

$conn = mysqli_connect("localhost", "root", "", "login_register_db");

if (!$conn) {
    echo "Connection Failed";
}