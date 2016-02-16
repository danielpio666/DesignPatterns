<?php
/**
 * Created by PhpStorm.
 * User: DanielPio
 * Date: 16/02/2016
 * Time: 10:49
 */

namespace SON\Form\Requests;


use SON\Form\Contracts\RequestInterface;

class Request implements RequestInterface {

    private $request;

    public function getRequest()
    {
        return $this->request;
    }
}