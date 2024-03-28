<?php

namespace core;

class Router
{

    private $controller = "home";
    private $method = "index";
    private $params = [];

    public function __construct()
    {
        //pegando a url
        $router = $this->url();

        //verificando se foi passado o controller
        if (!empty($router[0])) 
        {
            //verificando se o primeiro parametro(controller) existe
            if (file_exists("app/controllers/" . ucfirst($router[0]). ".php"))
            {
                $this->controller = $router[0];
                unset($router[0]);
            }
            else
            {
                die("Controller inexistente");
            }

            $class = "app\\controllers\\" . ucfirst($this->controller);
            $object = new $class;

            //verificando se o metodo desse controller existe
            if (isset($router[1]) and method_exists($class, $router[1])) 
            {
                $this->method = $router[1];
                unset($router[1]);
            }
            
            //vericando se ainda sobra dados na url
            $this->params = $router ? array_values($router) : [];

            call_user_func_array([$object, $this->method], $this->params);
        } 
        else
        {
            $class = "app\\controllers\\" . ucfirst($this->controller);
            $object = new $class;
            call_user_func_array([$object, $this->method], $this->params);
        }
    }

    public function url()
    {
        //separando as barras(/) inseridas na url
        $url = explode("/", filter_input(INPUT_GET, "url", FILTER_SANITIZE_URL) ?? "");
        return $url;
    }

}