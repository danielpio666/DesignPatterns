<?php

namespace SON\Form\Contracts;


interface ElementInterface {

    public function __construct(array $attributes = []);
    public function render();

    public function getAttributes();
    public function setAttributes(array $attributes);

    public function setAttribute($name, $valor);
    public function getAttribute($name);

}