<?php

namespace SON\Form\Requests;

use SON\Form\Contracts\RequestInterface;

class Request implements RequestInterface {

    private $request;

    public function getRequest()
    {
        return $this->request;
    }
}