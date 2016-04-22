<?php
require_once "./Map.php";
session_start();

if (isset($_POST["largeur"]) && isset($_POST["hauteur"])) {
    $largeur = $_POST["largeur"];
    $hauteur = $_POST["hauteur"];
    $matrice = new Map($largeur,$hauteur);
}
else {
    $matrice = new Map(5,5);
}

$_SESSION["matrice"] = $matrice;
header("Location: index.php");
