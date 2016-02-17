<?php

namespace SON\Form\Validators;

use SON\Form\Contracts\RequestInterface;
use SON\Form\Contracts\ValidatorInterface;

class Validator implements ValidatorInterface {

    private $validator;
    private $request;

    public function __construct(RequestInterface $request){
        $this->request = $request;
    }

    public function getValidator()
    {
        return $this->validator;
    }
}