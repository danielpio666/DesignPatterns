<?php

namespace SON\Form\Contracts;

interface ValidatorInterface {

    public function __construct(RequestInterface $request);
    public function getValidator();

}