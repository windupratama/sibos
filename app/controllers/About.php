<?php

class About extends Controller
{
    public function index($nama = 'film', $status = 'gratis')
    {
        $data['nama'] = $nama;
        $data['status'] = $status;
        $data['title'] = 'About';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
}