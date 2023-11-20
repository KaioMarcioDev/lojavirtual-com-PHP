<?php
namespace App\Controllers\site;

use App\Controllers\BaseController;


class HomeController extends BaseController{
    public function index(){

        $dados = [
            'titulo' => 'Curso PHPOO | Loja Virtual'
        ];


      $template = $this->twig->load('site_home.html');
      $template->display($dados);
    }
}