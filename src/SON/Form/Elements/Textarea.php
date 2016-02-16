<?php

namespace SON\Form\Elements;

class Textarea extends ElementAbstract {

    private $texto;

    public function render()
    {
        echo "\t<textarea ";

        foreach($this->attributes as $attrKey => $attrValue)
        {
            echo " {$attrKey}='{$attrValue}' ";
        }

        echo ">".$this->texto;
        echo "</textarea>\n";


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