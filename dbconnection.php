<?php

/*
Database management class

This class povides centalize access of DB connection
*/

function getDbConnecion()
{
    $host = 'localhost';
    $user = 'root';
    $password = "";
    $db_name = 'id21003775_movies';
    $connection = new mysqli($host, $user, $password, $db_name);

    if (!$connection) {
        echo "Failed to connect with MySQL!";
    }
    return $connection;
}
