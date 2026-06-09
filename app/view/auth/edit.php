<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User - MasalahTempo</title>
    <link rel="stylesheet" href="/bpw/public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bpw/public/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/bpw/public/assets/css/style.css">
</head>
<body>
    <div class="admin-shell">
        <div class="admin-main">
            <main class="dashboard-content">
                <div class="container-fluid px-3 px-lg-4 py-4">
                    <div class="page-heading">
                        <h1 class="h3 mb-1">Edit Pengguna</h1>
                    </div>

                    <section class="panel col-lg-6">
                        <div class="panel-header">
                            <h2 class="h5 mb-0">Form Edit User</h2>
                        </div>
                        <div class="panel-body p-4">
                            <form action="?aksi=update_user" method="POST">
                                <input type="hidden" name="id" value="<?= $user['id']; ?>">

                                <div class="mb-3">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control" value="<?= htmlspecialchars($user['nama']); ?>" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($user['email']); ?>" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Password Baru (Opsional)</label>
                                    <input type="password" name="password" class="form-control" placeholder="Kosongkan jika tidak ingin mengubah password">
                                    <small class="text-muted">Biarkan kosong jika password tidak diganti.</small>
                                </div>

                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                <a href="?aksi=list_user" class="btn btn-secondary">Batal</a>
                            </form>
                        </div>
                    </section>
                </div>
            </main>
        </div>
    </div>
</body>
</html>