<?php
namespace App\Classes;

class Template{
    public function loader(){

        return new \Twig\Loader\FilesystemLoader(['../App/Views/site','../App/Views/admin']);

    }

    public function init(){

       return new \Twig\Environment($this->loader(), [
            'debug'=> true,
            //'cache' =>'',
            'auto_reload' => true

        ]);
        

    }
}