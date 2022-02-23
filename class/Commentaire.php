<?php
class Commentaire{
   protected DateTime $dateCommentaire;
   protected string $texte;
   protected bool $repondue;

public function __construct(DateTime $dateCommentaire, string $texte, bool $repondue) 
    {
        $this->dateCommentaire = $dateCommentaire;
        $this->texte = $texte;
        $this->repondue = $repondue;

    }
///////////
public function getdate(){
    return $this->dateCommentaire;
}

public function setdate(DateTime $dateCommentaire){
$this->dateCommentaire= $dateCommentaire;
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
    return $this->repondue;
}

public function setreponse(bool $repondue){
$this->repondue= $repondue;
return $this;
}


};
