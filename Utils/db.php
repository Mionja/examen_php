<?php

    function db_connect(){
        $host = "localhost";
        $dbname = "examen_php";
        $login = "root";
        $pass = "";
        $pdo = new PDO('mysql:host='.$host.';dbname='.$dbname, $login, $pass);
        return $pdo;
    }