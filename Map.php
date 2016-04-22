<?php
    class map{
        //déclaration des variables utilisés
        private $largeur;
        private $hauteur;
        private $matrice;


        //constructeur du plateau de jeux
        function __construct($largeur,$hauteur){
            $this->hauteur = $hauteur;
            $this->largeur = $largeur;
            $this ->matrice = array(array());
            for($i=0;$i<  $this->hauteur;$i++){
                for($j=0;$j < $this->largeur;$j++){
                    $this->matrice[$i][$j]=rand(0,1);
                }
            }
        }
        function afficher(){
            for ($i= 0;$i <$this->hauteur;$i++){
                for($j = 0; $j< $this->largeur;$j++)
                    if($this->matrice[$i][$j]==0){
                        echo " <a href=\"index.php?x=$j&y=$i \" value=\"0\" >O</a> ";
                    }else{
                        echo " <a href=\"index.php?x=$j&y=$i \" value=\"1\" >X</a> ";
                    }
                 echo'<br>';
                } 
                
            }
        function actualiser($y,$x){
            $this->matrice[$x][$y] = !$this->matrice[$x][$y];
            if($x+1 < $this->hauteur){
                $this->matrice[$x+1][$y] = !$this->matrice[$x+1][$y];
            }
            if($x-1 >= 0){
                $this->matrice[$x-1][$y] = !$this->matrice[$x-1][$y];
            }
            if($y+1 < $this->largeur){
                $this->matrice[$x][$y+1] = !$this->matrice[$x][$y+1];
            }
            if($y-1 >= 0){
                $this->matrice[$x][$y-1] = !$this->matrice[$x][$y-1];
            }
            
        }
        
    }
