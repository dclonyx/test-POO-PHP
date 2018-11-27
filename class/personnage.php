<?php 


class personnage {
    public $nom;
    public $force;
    public $forceMagique;
    public $vie;
    public $soin;
    
    public function __construct($nom, $force, $forceMagique, $vie, $soin){
        $this->nom = $nom;
        $this->force = $force;
        $this->forceMagique = $forceMagique;
        $this->vie = $vie;
        $this->soin = $soin;
    }

    public function decrire(){
        echo "<br>";
        echo "Je m'appel ".$this->nom.", j'ai ".$this->vie." de vie, une force brute de ".$this->force.", une force magique de ". $this->forceMagique." et je me soigne de ". $this->soin;
        echo "<br>";
    }


    public function regenere($bonusVie = 0){   
        if  ($bonusVie == 0){
            $bonusVie = $this->soin;
        }
        echo"<br>";
        $this->vie += $bonusVie;
        echo $this->nom ." se regenere de ". $bonusVie. " points.";
        echo"<br>";
        echo "Il a maintenant ". $this->vie. " points de vie";
        echo"<br>";
    }

    public function attaquebrute(personnage $defenseur){
        echo "<br>";
        echo $this->nom. " attaque ". $defenseur->nom;
        $defenseur->vie = $defenseur->vie - $this->force;
        if ($defenseur->etat()){
            echo "<br>";
            echo $defenseur->nom." a ". $defenseur->vie ." points de vie.";
        } else {
            echo "<br>";
            echo $defenseur->nom." est mort";
            }
        echo "<br>";
    }

    public function attaquemagique(personnage $defenseur){
        echo "<br>";
        echo $this->nom. " attaque magiquement ". $defenseur->nom;
        $defenseur->vie -= $this->forceMagique;
        if ($defenseur->etat()){
            echo "<br>";
            echo $defenseur->nom." a ". $defenseur->vie ." points de vie.";
        } else {
            echo "<br>";
            echo $defenseur->nom." est mort";
            }
        echo "<br>";
    }

    public function etat(){
        if ($this->vie <= 0){
            return false;
        } else {
            return true;
        }
    }

    public function random(personnage $defenseur){
        $nombre = rand(1,3);
        if ($nombre==1){
            $this->regenere();
        } elseif ($nombre==2){
            $this->attaquebrute($defenseur);    
        } else {
            $this->attaquemagique($defenseur);
        }
    }

}


// public function tirage(){
//     $nombre = mt_rand(1,2);
//     if ($nombre==1){
//         $defenseur = $Perso1;
//     } else {
//         $defenseur = $Perso1;
//     }
// }

   
?>