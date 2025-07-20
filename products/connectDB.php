<?php
const DB_HOST = 'localhost';
const DB_USER = 'root';
const PWD = '';
const DB_NAME = 'demo';

function connectDB() {
    $conn = new mysqli(DB_HOST, DB_USER, PWD, DB_NAME);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}
