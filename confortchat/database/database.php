<?php
session_start();
$host = "localhost";
$database = "home";
$user = "root";
$pass = "";

try {
    $bdd = new PDO("mysql:host=$host;dbname=$database;charset=utf8",$user,$pass);
    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur'.$e->getMessage());
}