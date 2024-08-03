<?php

class Bioskop extends Controller
{
    public function index()
    {
        $data['title'] = 'Daftar Bioskop';
        $data['bioskop'] = $this->model('bioskop_model')->getAllBioskop();
        $this->view('bioskop/index', $data);
    }

    //public function detail($id)
    //{
    //    $data['title'] = 'Detail Bioskop';
    //    $data['nama'] = $this->model('user_model')->getUser();
    //    $data['bioskop'] = $this->model('bioskop_model')->getBioskopbyId($id);
    //    $this->view('bioskop/detail', $data);
    //}

    public function tambah()
    {
        if ($this->model('bioskop_model')->tambahDataBioskop($_POST) > 0) {
            Notification::setAlert('Berhasil', 'Bioskop berhasil ditambahkan!', 'success');
            header('Location: ' . BASEURL . '/bioskop');
            exit;
        } else {
            Notification::setAlert('Gagal', 'Bioskop tidak berhasil ditambahkan!', 'danger');
            header('Location: ' . BASEURL . '/bioskop');
            exit;
        }
    }
    public function hapus($id)
    {
        if ($this->model('bioskop_model')->hapusDataBioskop($id) > 0) {
            Notification::setAlert('Berhasil', 'Bioskop berhasil dihapus!', 'success');
            header('Location: ' . BASEURL . '/bioskop');
            exit;
        } else {
            Notification::setAlert('Gagal', 'Bioskop tidak berhasil dihapus!', 'danger');
            header('Location: ' . BASEURL . '/bioskop');
            exit;
        }
    }

    public function edit()
    {
        if ($this->model('bioskop_model')->editDataBioskop($_POST) > 0) {
            Notification::setAlert('Berhasil', 'Bioskop berhasil diubah!', 'success');
            header('Location: ' . BASEURL . '/bioskop');
            exit;
        } else {
            Notification::setAlert('Gagal', 'Bioskop tidak berhasil diubah!', 'danger');
            header('Location: ' . BASEURL . '/bioskop');
            exit;
        }
    }

    public function cari()
    {
        $data['title'] = 'Daftar Bioskop';
        $keyword = isset($_POST['keyword']) ? $_POST['keyword'] : '';
        $data['bioskop'] = $this->model('bioskop_model')->cariBioskop($keyword);

        if (!empty($data['bioskop'])) {
            Notification::setAlert('Berhasil', 'Pencarian ditampilkan', 'success');
        } else {
            Notification::setAlert('Gagal', 'Data tidak ada', 'danger');
        }

        $this->view('bioskop/index', $data);
    }
}
