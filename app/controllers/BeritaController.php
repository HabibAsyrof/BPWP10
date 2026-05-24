<?php 
include 'app/models/BeritaModel.php';

class BeritaController{
    private $model;

    public function __construct(){
        $this->model= new BeritaModel;
    }

    public function index(){
        $halo = $this->model->getAll();
        include 'app/view/berita/index.php';
    }

    public function tambah(){
        include 'app/view/berita/tambah.php';
    }

    public function simpan(){
        $judul = $_POST['judul'];
        $deksripsi = $ $_POST['deksripsi'];
        $tanggal = $_POST['tanggal'];
        $foto = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];

        move_uploaded_file(
            $tmp, 'public/upload/' . $foto
        );

        $this->model->insert(
            $judul,$deksripsi,$foto,$tanggal
        );
        header('Location:index.php');
    }
    
}
