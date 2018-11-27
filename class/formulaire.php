<?php

class form {

    private $data;


    public function __construct($data){
        $this->data=$data;
    }

    public function surround($html){
        return "<p>{$html}</p>";
    }

    public function input($champ){
        return $this->surround('<input type="text" value="" name="'.$champ.'" placeholder="'.$champ.'">');
    }

    public function submit(){
        return $this->surround('<button type="submit">Envoyer</button>');
    }
}