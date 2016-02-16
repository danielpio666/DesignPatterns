<?php
/**
 * Created by PhpStorm.
 * User: DanielPio
 * Date: 16/02/2016
 * Time: 10:46
 */

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