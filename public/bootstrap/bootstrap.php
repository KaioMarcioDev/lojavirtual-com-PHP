<?php
use App\Classes\Template;

$template = new Template;
$twig = $template->init();


/**
 * Chamando o Controller
 * http://localhost:8808/Controller
 */
$callController = new App\Controllers\Controller;
$calledController = $callController->controller();
dump($calledController);
$controller = new $calledController();
$controller->setTwig($twig);


/**
 * Chamando o metodo digitado na URL
 * http://localhost:8080/Controller/Method
 */

$callMethod = new App\Controllers\Method;
$method = $callMethod->Method($controller);

/**
 * Chamando o controller atravez da classe controller e method
 */
$controller->$method();
