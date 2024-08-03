<?php

class Controller
{
    
    private function header($data = [])
    {
        require_once '../app/views/templates/header.php';
    }

    private function footer()
    {
        require_once '../app/views/templates/footer.php';
    }

    public function view($view, $data = [])
    {   
        $this->header($data);
        require_once '../app/views/' . $view . '.php';
        $this->footer();
    }

    public function model($model){
        require_once  '../app/models/' . $model . '.php';
        return new $model;
    }
}