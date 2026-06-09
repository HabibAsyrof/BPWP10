<?php
session_start();
include 'app/controllers/BeritaController.php';
include 'app/controllers/userController.php';

$userController = new userController;
$controller = new BeritaController;

$aksi = isset($_GET['aksi']) ? $_GET['aksi'] : 'frontend';

$wajib_login = [
    'index',
    'tambah',
    'simpan',
    'edit',
    'update',
    'hapus',
    'list_user',
    'edit_user',
    'update_user',
    'hapus_user'
];

if (in_array($aksi, $wajib_login) && !isset($_SESSION['login'])) {
    header('Location: ?aksi=login');
    exit;
}

// Kalau sudah login, jangan bisa akses halaman login lagi
if (in_array($aksi, ['login', 'prosesLogin']) && isset($_SESSION['login'])) {
    header('Location: ?aksi=index');
    exit;
}

switch ($aksi) {
    default:
        $controller->frontend();
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
    case 'login':
        $userController->login();
        break;
    case 'register':
        $userController->register();
        break;
    case 'prosesLogin';
        $userController->prosesLogin();
        break;
    case 'proresesRegister':
        $userController->simpanuser();
        break;
    case 'list_user':
        $userController->listUser();
        break;
    case 'edit_user':
        $userController->edituser();
        break;
    case 'update_user':
        $userController->updateuser();
        break;
    case 'hapus_user':
        $userController->hapususer();
        break;
    case 'logout':
        $userController->logout();
        break;
}
