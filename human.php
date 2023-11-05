<?php

class Humanos
{
    private $masculinos = ["nome" =>[],"sexo" => []];
    private $desconhecidos = ["nome" =>[],"sexo" => []];
    private $femininos = ["nome" =>[],"sexo" => []];
    function definir($sexo, $nome)
    {
        switch ($sexo) {
            case "m":
                $this->masculinos["nome"][] = $nome;
                $this->masculinos["sexo"][] = $sexo;
                break;
            case "f":
                $this->femininos["nome"][] .= $nome;
                $this->femininos["sexo"][] .= $sexo;
                break;
            case "d":
                $this->desconhecidos ["nome"][] .= $nome;
                $this->desconhecidos ["sexo"][] .= $sexo;
                break;
        }
    }
    function returnMasculinos(){
        return $this->masculinos;
    }
    
    function returnDesconhecidos(){
        return $this->desconhecidos;
    }
    
    function returnFemininos(){
        return $this->femininos;
    }
    
}
