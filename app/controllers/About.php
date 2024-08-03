<?php

class About extends Controller
{
    public function index( $nama = 'film', $status = 'gratis')
    {
        $data['nama'] = $nama;
        $data['status'] = $status;
        $data['title'] = 'Tentang Kami';
        $this->view('about/index', $data);
    }
}