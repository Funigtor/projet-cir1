<?php
    class map{
        //déclaration des variables utilisés
        private &taille;
        private &matrice;


        //constructeur du plateau de jeux
        function __construct($taille){
            $this->taille = $taille;
            $this ->matrice = array(array());
            for($i=0;$i<$taille;$i++){
                for($j=0;$j < $largeur;$j++){
                    $this->matrice[$i][$j]=rand(0,1);
                }
            }
        }
        function afficher(){
            for ($i= 0;$i <$this->taille;&i++){
                for($j = 0; $j< $this->taille;j++)
            }
        }
    }
