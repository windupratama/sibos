<?php

class Film extends Controller
{
    public function index()
    {
        $data['title'] = 'Film Bioskop';
        $data['nama'] = $this->model('user_model')->getUser();
        $data['film'] = $this->model('film_model')->getAllFilm();
        $this->view('templates/header', $data);
        $this->view('film/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Film';
        $data['nama'] = $this->model('user_model')->getUser();
        $data['film'] = $this->model('film_model')->getFilmbyId($id);
        $this->view('templates/header', $data);
        $this->view('film/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('film_model')->tambahDataFilm($_POST) > 0) {
            Notification::setAlert('Berhasil', 'Film berhasil ditambahkan!', 'success');
            header('Location: ' . BASEURL . '/film');
            exit;
        } else {
            Notification::setAlert('Gagal', 'Film tidak berhasil ditambahkan!', 'danger');
            header('Location: ' . BASEURL . '/film');
            exit;
        }
    }
    public function hapus($id)
    {
        if ($this->model('film_model')->hapusDataFilm($id) > 0) {
            Notification::setAlert('Berhasil', 'Film berhasil dihapus!', 'success');
            header('Location: ' . BASEURL . '/film');
            exit;
        } else {
            Notification::setAlert('Gagal', 'Film tidak berhasil dihapus!', 'danger');
            header('Location: ' . BASEURL . '/film');
            exit;
        }
    }

    public function edit()
    {
        if ($this->model('film_model')->editDataFilm($_POST) > 0) {
            Notification::setAlert('Berhasil', 'Film berhasil diubah!', 'success');
            header('Location: ' . BASEURL . '/film');
            exit;
        } else {
            Notification::setAlert('Gagal', 'Film tidak berhasil diubah!', 'danger');
            header('Location: ' . BASEURL . '/film');
            exit;
        }
    }

    public function cari()
    {
        $data['title'] = 'Film Bioskop';
        $data['nama'] = $this->model('user_model')->getUser();
        $keyword = isset($_POST['keyword']) ? $_POST['keyword'] : '';
        $data['film'] = $this->model('film_model')->cariFilm($keyword);

        if (!empty($data['film'])) {
            Notification::setAlert('Berhasil', 'Pencarian ditampilkan', 'success');
        } else {
            Notification::setAlert('Gagal', 'Data tidak ada', 'danger');
        }

        $this->view('templates/header', $data);
        $this->view('film/index', $data);
        $this->view('templates/footer');
    }
}
