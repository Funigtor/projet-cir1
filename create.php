<?php
require_once "./Map.php";
session_start();

if (isset($_POST["largeur"]) && isset($_POST["hauteur"]) && $_POST["largeur"] != NULL && $_POST["hauteur"] != NULL) {
    $largeur = $_POST["largeur"];
    $hauteur = $_POST["hauteur"];
    $matrice = new Map($largeur,$hauteur);
} else {
    // 5x5 est la dimension de base si elles ne sont pas indiquées ou incomplètes.
    $matrice = new Map(5,5);
}

$_SESSION["matrice"] = $matrice;
$_SESSION["jeu"] = "Kappas Out";
header("Location: index.php");
