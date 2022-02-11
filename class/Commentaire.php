<?php
class Commentaire{
    $date;
    $texte;
    $reponse;

public function __construct(date $date, string $texte, boolean $reponse) 
    {
        $this->date = $date;
        $this->texte = $texte;
        $this->reponse = $reponse;

    }
///////////
public function getdate(){
    return this->$date;
}

public function setdate(date $date){
$this=>date= $date;
return $this
}

////////////
public function gettexte(){
    return this->$texte;
}

public function settexte(string $texte){
$this=>text= $texte;
return $this
}

/////////////


public function getreponse(){
    return this->$reponse;
}

public function setreponse(boolean $reponse){
$this=>reponse= $reponse;
return $this
}


};
