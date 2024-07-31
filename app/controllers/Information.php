<?php

class Information extends Controller
{
    public function index()
    {
        $data['title'] = 'Informasi';
        if (isset($_SESSION['user'])) {
            $data['nama'] = $_SESSION['user']['nama'];
        }
        $this->view('templates/header', $data);
        $this->view('information/index', $data);
        $this->view('templates/footer');
    }
}
