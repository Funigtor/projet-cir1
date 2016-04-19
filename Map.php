<?php
    class map{
        //déclaration des variables utilisés
        private $taille;
        private $matrice;
        private $case;


        //constructeur du plateau de jeux
        function __construct($taille){
            $this->taille = $taille;
            $this ->matrice = array(array());
            for($i=0;$i<$taille;$i++){
                for($j=0;$j < $taille;$j++){
                    $this->matrice[$i][$j]=rand(0,1);
                }
            }
        }
        function afficher(){
            for ($i= 0;$i <$this->taille;$i++){
                for($j = 0; $j< $this->taille;$j++)
                    if($this->matrice[$i][$j]==0){
                        echo " <a href= \" location: ./index.php?x=$j&y=$i \" value=\"0\" >O</a> ";
                    }else{
                        echo " <a href= \" location: ./index.php?x=$j&y=$i \" value=\"1\" >X</a> ";
                    }
                 echo'<br>';
                } 
                
            }
        function actualiser(){
            
        }
    }
