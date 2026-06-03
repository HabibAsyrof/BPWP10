<?php
include 'app/controllers/BeritaController.php';
include 'app/controllers/UserController.php';

$userController = new userController;
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
        case 'hapus':
            $controller->hapus();
            break;
        case 'frontend':
            $controller->frontend();
            break;
        case 'detail':
            $controller->detail();
            break;
       case 'viewuser':
            $userController->viewuser();
            break;
        case 'tambahuser':
            $userController->tambahuser();
            break;
        case 'simpanuser':
            $userController->simpanuser();
            break;
        case 'edituser':
            $userController->edituser();
            break;
        case 'updateuser':
            $userController->updateuser();
            break;
        case 'hapususer':
            $userController->hapususer();
            break;

}

