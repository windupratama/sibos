<?php

class Home extends Controller
{
    public function index()
    {
        $data['title'] = 'Home';
        $data['film'] = $this->model('film_model')->getAllFilm();
        $this->view('home/index', $data);
    }
}