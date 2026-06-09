<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="adminHMD professional admin dashboard template">
    <title>MasalahTempo - Data User</title>

    <link rel="stylesheet" href="/bpw/public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bpw/public/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/bpw/public/assets/css/style.css">
</head>

<body>
    <div class="admin-shell">
        <div class="sidebar-backdrop" data-sidebar-close></div>

        <aside class="admin-sidebar" id="adminSidebar" aria-label="Main navigation">
            <div class="sidebar-header">
                <a class="brand-mark" href="index.php" aria-label="adminHMD dashboard">
                    <span class="brand-icon"><i class="bi bi-grid-1x2-fill" aria-hidden="true"></i></span>
                    <span class="brand-copy">
                        <span class="brand-title">MasalahTempo</span>
                        <span class="brand-subtitle">Just Friend</span>
                    </span>
                </a>
            </div>

            <nav class="sidebar-nav">
                <a class="nav-link" href="?aksi=index">
                    <span class="nav-icon"><i class="bi bi-blockquote-right" aria-hidden="true"></i></span>
                    <span class="nav-text">Berita</span>
                </a>
               <?php if ($_SESSION['jabatan'] === 'admin'): ?>
        <a class="nav-link" href="?aksi=register">
            <span class="nav-text">Tambah User Baru (Khusus Admin)</span>
        </a>
    <?php endif; ?>
                <a class="nav-link" href="#">
                    <span class="nav-icon"><i class="bi bi-gear" aria-hidden="true"></i></span>
                    <span class="nav-text">Fitur 3</span>
                </a>
                <a class="nav-link" href="#">
                    <span class="nav-icon"><i class="bi bi-file-earmark" aria-hidden="true"></i></span>
                    <span class="nav-text">Fitur 4</span>
                </a>

                <a class="nav-link text-danger mt-auto" href="?aksi=logout" onclick="return confirm('Yakin ingin keluar?')">
                    <span class="nav-icon"><i class="bi bi-box-arrow-left" aria-hidden="true"></i></span>
                    <span class="nav-text">Logout</span>
                </a>
            </nav>
            <div class="sidebar-footer">
                <span class="status-dot"></span>
                <span class="sidebar-footer-text">System running smoothly</span>
            </div>
        </aside>

        <div class="admin-main">
            <nav class="navbar admin-navbar navbar-expand bg-white">
                <div class="container-fluid px-3 px-lg-4">
                    <button class="sidebar-toggle" type="button" data-sidebar-toggle aria-controls="adminSidebar" aria-expanded="true" aria-label="Toggle sidebar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <form class="d-none d-md-flex ms-3 flex-grow-1" role="search">
                        <input class="form-control search-input" type="search" placeholder="Search users, orders, reports" aria-label="Search">
                    </form>

                    <div class="navbar-actions ms-auto">
                        <button class="icon-button theme-toggle" type="button" data-theme-toggle aria-label="Switch color theme" title="Switch color theme">
                            <i class="bi bi-moon-stars" data-theme-icon aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </nav>

            <main class="dashboard-content">
                <div class="container-fluid px-3 px-lg-4 py-4">
                    <div class="page-heading">
                        <div class="page-heading-copy">
                            <span class="page-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
                            <div>
                                <p class="eyebrow mb-1">Data</p>
                                <h1 class="h3 mb-1">Pengguna (User)</h1>
                            </div>
                        </div>
                    </div>
                    <section class="panel">
                        <div class="panel-header">
                            <div>
                                <h2 class="h5 mb-1 section-title"><i class="bi bi-table" aria-hidden="true"></i><span>List User</span></h2>
                            </div>
                            <input class="form-control form-control-sm table-search" type="search" placeholder="Cari user..." data-table-search="usersTable" aria-label="Search user">

                            <a href="?aksi=register" class="btn btn-primary btn-sm">
                                <i class="bi bi-person-plus-fill"></i>
                                Tambah User
                            </a>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-middle mb-0" id="usersTable" data-searchable-table>
                                <thead>
                                        <th>No</th>
                                        <th>Nama Lengkap</th>
                                        <th>Jabatan</th>
                                        <th>Email</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no = 1;
                                        // Menggunakan foreach karena AuthModel::getAllUsers() mengembalikan array
                                        foreach ($users as $user):
                                    ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo htmlspecialchars($user['nama']); ?></td>
                                            <td><?php echo htmlspecialchars($user['jabatan']); ?></td>
                                            <td>
                                                <span class="badge bg-secondary">
                                                    <?php echo htmlspecialchars($user['email']); ?>
                                                </span>
                                            </td>
                                <td>
                                                <a href="?aksi=edit_user&id=<?php echo $user['id']; ?>"
                                                    class="btn btn-warning btn-sm">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                                <a href="?aksi=hapus_user&id=<?php echo $user['id']; ?>"
                                                    class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">
                                                    <i class="bi bi-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </main>

            <footer class="admin-footer">
                <div class="container-fluid px-3 px-lg-4">
                    <span>Copyright 2026 BPW 2026</span>
                </div>
            </footer>
        </div>
    </div>

    <script src="/bpw/public/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/bpw/public/assets/js/main.js"></script>
</body>

</html>