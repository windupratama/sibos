<?php

class App {

    protected $controller = "Home";
    protected $method = "index";
    protected $params = [];

    public function __construct()
    { 
        $url = $this->parseUrl();
        
        // mengecek controller ada atau tidak
        if (isset($url[0])){
            if( file_exists('../app/controllers/'.$url[0].'.php')){
                $this->controller = $url[0];
                unset($url[0]);
                //var_dump($url);
            }
        }

        // memanggil controller
        require_once '../app/controllers/'.$this->controller.'.php';
        $this->controller = new $this->controller;

        // mengecek methode
        if( isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);      
            }
        }

        // mengecek params
        if(!empty($url)){
            //var_dump($url);
            $this->params = array_values($url);
        }    

        //jalankan controller & method, params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);

         // Get params
        //$this->params = $url ? array_values($url) : [];

        // Call the method with params
        //call_user_func_array([$this->controller, $this->method], $this->params);

    }

    public function parseUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }

    //public function parseUrl() {
    //    if (isset($_GET['url'])) {
    //        return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
    //    }
    //    return [];
    //}
}