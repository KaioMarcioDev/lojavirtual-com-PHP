<?php

namespace App\Classes;



class Parameters
{
    private $uri;
    private $parameter;


    public function __construct()
    {
        $uri = new Uri;
        $this->uri = $uri->getUri();
    }

    public function explodeParameter()
    {

        $explodeUri = explode('/', $this->uri);
        $this->parameter = array_filter($explodeUri);
        dump($this->parameter);
        
    }

    public function getParameterMethod($object, $method)
    {
        if (method_exists($object, $method)) {
            $this->explodeParameter();
            if ($method == 'index') {
                return isset($this->parameter[2]) ? $this->parameter : null;
            }
            return isset($this->parameter[3]) ? $this->parameter : null;
        }
    }
}
