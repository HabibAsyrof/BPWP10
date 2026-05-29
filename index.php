<?php
include 'app/controllers/BeritaController.php';

$controller = new BeritaController;

$aksi = isset($_GET['aksi'])
    ? $_GET['aksi'] : 'index';

switch ($aksi) {
    default:
        $controller->index();
        break;
        case 'tambah':
            $controller->tambah();
            break;
        case 'simpan':
            $controller->simpan();
            break;
        case 'edit':
            $controller->edit();
            break;
        case 'update':
            $controller->update();
            break;
}


?>

