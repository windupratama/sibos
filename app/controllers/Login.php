<?php 

class Login extends Controller
{
    public function index()
    {
        $data['title'] = 'Login';
        $this->view('login', $data);
    }

    public function check() {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $this->model('user_model')->getUserByEmail($email);

        if ($user && $password === $user['password']) {
            // Set session
            $_SESSION['user'] = $user;
            Notification::setAlert('Berhasil','Anda sudah login', 'success');
            header('Location: ' . BASEURL . '/information');
        } else {
            Notification::setAlert('Gagal','Email atau Password tidak cocok', 'danger');
            header('Location: ' . BASEURL . '/login');
        }
    }

    public function logout() {
        session_unset();
        session_destroy();
        header('Location: ' . BASEURL . '/login');
    }
}