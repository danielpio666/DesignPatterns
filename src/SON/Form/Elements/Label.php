<?php

namespace SON\Form\Elements;

class Label extends ElementAbstract {

    private $texto;

    public function render()
    {
        echo "\t<label ";

        foreach($this->attributes as $attrKey => $attrValue)
        {
            echo " {$attrKey}='{$attrValue}' ";
        }

        echo ">".$this->texto;
        echo "</label>\n";


    }

    public function setTexto($texto)
    {
        $this->texto = $texto;
        return $this;
    }
    public function getTexto()
    {
        return $this->texto;
    }
}