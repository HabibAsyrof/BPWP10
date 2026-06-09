<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="MasalahTempo authentication page">
  <title>Register | MasalahTempo</title>

  <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="public/assets/vendors/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" href="public/assets/css/style.css">
</head>

<body class="auth-body">
  <button class="icon-button theme-toggle auth-theme-toggle" type="button" data-theme-toggle aria-label="Switch color theme" title="Switch color theme">
    <i class="bi bi-moon-stars" data-theme-icon aria-hidden="true"></i>
  </button>
  <main class="auth-page">
    <section class="auth-card">
      <a class="auth-brand" href="index.php">
        <span class="brand-icon"><i class="bi bi-grid-1x2-fill" aria-hidden="true"></i></span>
        <span>
            <strong>MasalahTempo</strong>
            <small>Create your admin account.</small>
        </span>
      </a>
      
      <div class="auth-visual">
        <img src="/bpw/public/assets/images/png/dasher-ui-bootstrap-5.jpg" alt="MasalahTempo dashboard interface">
      </div>
      
      <form action="?aksi=prosesRegister" method="POST" class="needs-validation" novalidate>
        <div class="mb-4">
          <p class="eyebrow mb-1">Secure Access</p>
          <h1 class="h3 mb-1">Register</h1>
          <p class="text-muted mb-0">Create your admin account.</p>
        </div>
        
        <div class="mb-3">
            <label class="form-label" for="registerName">Nama Lengkap</label>
            <input class="form-control" id="registerName" type="text" name="nama" required>
            <div class="invalid-feedback">Nama lengkap wajib diisi.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="registerName">Jabatan</label>
            <input class="form-control" id="registerJabatan" type="text" name="jabatan" required>
            <div class="invalid-feedback">Jabatan wajib diisi.</div>
        </div>
        
        <div class="mb-3">
            <label class="form-label" for="registerEmail">email</label>
            <input class="form-control" id="registerEmail" type="text" name="email" required>
            <div class="invalid-feedback">email wajib diisi.</div>
        </div>
        
        <div class="mb-3">
            <label class="form-label" for="registerPassword">Password</label>
            <input class="form-control" id="registerPassword" type="password" name="password" minlength="6" required>
            <div class="invalid-feedback">Password minimal 6 karakter.</div>
        </div>
        
        <button class="btn btn-primary w-100" type="submit">
            <i class="bi bi-person-plus" aria-hidden="true"></i> Create Account
        </button>
      </form>
    </section>
  </main>

  <script src="/bpw/public/assets/js/bootstrap.bundle.min.js"></script>
  <script