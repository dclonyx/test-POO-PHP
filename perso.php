<?php

require 'class/personnage.php';
require 'class/formulaire.php';


$Perso1 = new personnage($_GET['Nom1'],intval($_GET['Force1']),intval($_GET['ForceMagique1']),intval($_GET['Vie1']),intval($_GET['Soin1']));

$Perso2 = new personnage($_GET['Nom2'],intval($_GET['Force2']),intval($_GET['ForceMagique2']),intval($_GET['Vie2']),intval($_GET['Soin2']));

$Perso1->decrire();
$Perso2->decrire();

if(rand(0,1)){
    while ($Perso1->etat() && $Perso2->etat()){
        $Perso1->random($Perso2);
        if ($Perso1->etat() && $Perso2->etat()){
            $Perso2->random($Perso1);
        }
    }
} else{
    while ($Perso1->etat() && $Perso2->etat()){
        $Perso2->random($Perso1);
        if ($Perso1->etat() && $Perso2->etat()){
            $Perso1->random($Perso2);
        }
    }
}
?>