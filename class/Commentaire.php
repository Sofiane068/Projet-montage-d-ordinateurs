<?php
class Commentaire{
   protected DateTime $date;
   protected string $texte;
   protected bool $reponse;

public function __construct(DateTime $date, string $texte, bool $reponse) 
    {
        $this->date = $date;
        $this->texte = $texte;
        $this->reponse = $reponse;

    }
///////////
public function getdate(){
    return $this->date;
}

public function setdate(DateTime $date){
$this->date= $date;
return $this;
}

////////////
public function gettexte(){
    return $this->texte;
}

public function settexte(string $texte){
$this->text= $texte;
return $this;
}

/////////////


public function getreponse(){
    return $this->reponse;
}

public function setreponse(bool $reponse){
$this->reponse= $reponse;
return $this;
}


};
