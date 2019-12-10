<?php
class Voiture
{
    public $modele;
    public $marque;
    public $couleur;
    public $annee;
    public $etat = "stop";
    public $vitesse = 0;
    function __construct($modele, $marque, $couleur, $annee)
    {
        $this->modele = $modele;
        $this->marque = $marque;
        $this->couleur = $couleur;
        $this->annee = $annee;
    }
    function getEtat()
    {
        return $this->etat;
    }
    function setEtat($n)
    {
        $this->etat = $n;
    }
    function getModele()
    {
        return $this->modele;
    }
    function getMarque()
    {
        return $this->marque;
    }
    function getCouleur()
    {
        return $this->couleur;
    }
    function getAnnee()
    {
        return $this->annee;
    }
    function setModele($n)
    {
        $this->modele = $n;
    }
    function setMarque($n)
    {
        $this->marque = $n;
    }
    function setCouleur($n)
    {
        $this->couleur = $n;
    }
    function setAnnee($n)
    {
        $this->annee = $n;
    }
    function Demarre()
    {
        if ($this->etat == "stop") {
            echo $this->modele . " " . $this->marque . " démarre.";
            $this->setEtat("a demarrer");
        } else {
            echo $this->modele . " " . $this->marque . " ne peux pas démarrer elle est déjà entrain de faire autre chose.";
        }
    }
    function accelere()
    {
        if ($this->etat == "stop") {
            echo $this->modele . "n'a pas demmarer";
            return;
        }
        if ($this->vitesse == 100) {
            echo $this->modele . "est deja à fond";
            return;
        }

        $this->vitesse += 50;
        echo $this->modele . "accelere";
        echo "<br>";
        echo $this->modele . "est maintenant à" . $this->vitesse .
            "km/h";
    }
    function ralenti()
    {
        if ($this->etat == "stop") {
            echo $this->modele . "n'a pas demmarer";
            return;
        }
        if ($this->vitesse == 0) {
            echo $this->modele . "ne peu pas ralentir en dessous de 0 km/h";
            $this->setetat("arret");
            return;
        }
        $this->vitesse -= 50;
        echo $this->modele . "a ralentie de 50 km/h";
        echo $this->modele . "est maintenant à " . $this->vitesse . "km/h";
    }
    function eteindre()
    {
        if ($this->etat == "stop") {
            echo $this->modele . "a deja le moteur eteint";
            return;
        }
        if ($this->vitesse > 0) {
            echo $this->modele . "est entrain de rouler";
            return;
        }
        $this->setEtat("stop");
        echo $this->modele . "le moteur est eteint";
    }
}
$voit = new Voiture("Classe A", "Mercedes", "Noir", "2017");
echo '<br>';
$voit->Demarre();
echo '<br>';
$voit->accelere();
echo '<br>';
$voit->accelere();
echo '<br>';
$voit->accelere();
echo '<br>';
$voit->ralenti();
echo '<br>';
$voit->ralenti();
echo '<br>';
$voit->ralenti();
echo '<br>';
$voit->eteindre();
echo '<br>';
$voit->eteindre();
echo '<br>';
$voit->eteindre();
echo '<br>';
$voit->eteindre();
echo '<br>';
