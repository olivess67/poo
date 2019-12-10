<?php
class Fruits
{
    public $nom;
    public $provenance;
    public $color;
    public $variete;
    function __construct($nom, $provenance, $color, $variete)
    {
        $this->nom = $nom;
        $this->provenance = $provenance;
        $this->color = $color;
        $this->variete = $variete;
    }
    function getNom()
    {
        return $this->nom;
    }
    function getProvenance()
    {
        return $this->provenance;
    }
    function getColor()
    {
        return $this->color;
    }
    function getVariete()
    {
        return $this->variete;
    }
    function getAll()
    {
        $arr = [];
        array_push($arr, $this->nom);
        array_push($arr, $this->provenance);
        array_push($arr, $this->color);
        array_push($arr, $this->variete);
        return $arr;
    }
    function setNom($n)
    {
        $this->nom = $n;
    }
    function setProvenance($n)
    {
        $this->provenance = $n;
    }
    function setColor($n)
    {
        $this->color = $n;
    }
    function setVariete($n)
    {
        $this->variete = $n;
    }
}
echo '<br>';
$banane = new Fruits("banane", "France", "jaune", "plantin");
$orange = new Fruits("orange", "floride", "bleu", "agrume");
echo $banane->getNom();
echo $banane->getProvenance();
echo $banane->getColor();
echo $banane->getVariete();
$banane->setNom("Tomate");
$banane->setProvenance("Allemagne");
$banane->setColor("Rouge");
$banane->setVariete("Grappe");
echo '<br>';
echo $banane->getNom();
echo $banane->getProvenance();
echo $banane->getColor();
echo $banane->getVariete();
$arrayAll = $banane->getAll();
var_dump($arrayAll);
