<?php

namespace SON\Form\Elements;

use SON\Form\Contracts\ElementInterface;

class ElementAbstract implements ElementInterface {

    protected $attributes;

    public function __construct(array $attributes = [])
    {
        $this->attributes =$attributes;
    }

    public function getAttributes()
    {
        return $this->attributes;
    }
    public function setAttributes(array $attributes)
    {
        $this->attributes = $attributes;
        return $this;
    }

    public function setAttribute($name, $valor)
    {
        $this->attributes[$name] = $valor;
        return $this;
    }

    public function getAttribute($name)
    {
        return $this->attributes[$name];
    }

    public function render()
    {
    }

}