<?php

class music extends dataBase {

    private $track;
    private $alb_id;
    private $title;
    private $artist;
    
    function __construct() {
        
    }
    
    public function setTrack($int){
        $this->track = $int;
    }
    
    public function setAlb_id($int){
        $this->alb_id = $int;
    }
    
    public function setTitle($string){
        $this->title = $string;
    }
    
    public function setArtist($string){
        $this->artist = $string;
    }
    
    public function getTrack(){
        return $this->track;
    }
    
    public function getAlb_id(){
        return $this->alb_id;
    }
    
    public function getTitle(){
        return $this->title;
    }
    
    public function getArtist(){
        return $this->artist;
    }

    public function insert(){
        $this->fields = array("track", "alb_id", "title", "artist");
        $this->values = array($this->getTrack(), $this->getAlb_id(), 
            $this->getTitle(), $this->getArtist());
        $result = $this->insertValues();
        
        return $result;
    }
    
    public function delete(){
        //AQUI ESTÁ MINHA DÚVIDA
    }
}
?>
