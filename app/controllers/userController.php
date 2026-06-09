<?php
include 'app/models/userModel.php';

class userController
{
    private $model;

    public function __construct()
    {
        $this->model = new userMOdel();
    }

    public function viewuser()
    {
        $akun = $this->model->getAll();
        include 'app/view/user/akun.php';
    }

    public function tambahuser()
    {
        include 'app/view/user/tambah.php';
    }

    public function simpanuser()
    {
        $email = $_POST['email'];
        $nama = $_POST['nama'];
        $jabatan = $_POST['jabatan'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $this->model->insert(
            $email,
            $nama,
            $password,
            $jabatan
        );
        header('Location:?aksi=viewuser');
    }

    public function edituser()
    {
        $id = $_GET['id'];
        $akun = $this->model->getById($id);
        include 'app/view/user/edit.php';
    }

    public function updateuser()
    {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $jabatan = $_POST['jabatan'];
        $password = $_POST['password'];

        $this->model->update(
            $id,
            $nama,
            $jabatan,
            $password
        );
        header('Location:?aksi=viewuser');
    }

    public function hapususer()
    {
        $id = $_GET['id'];
        $data = $this->model->getById($id);
        $this->model->delete($id);
        header('Location:?aksi=viewuser');
    }

    public function login()
    {
        include 'app/view/auth/login.php';
    }

    public function register()
    {
        include 'app/view/auth/register.php';
    }

    public function prosesLogin()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = $this->model->getByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['login'] = true;
            $_SESSION['nama'] = $user['nama'];
            header('Location:index.php');
        } else {
            echo 'email atau Password salah';
        }
    }

    public function logout(){
        session_destroy();
        header('location:?aksi=frontend');
    }
}
