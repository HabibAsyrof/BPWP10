<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="MasalahTempo authentication page">
  <title>Login | MasalahTempo</title>

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
            <small>Sign in to your admin workspace.</small>
        </span>
      </a>
      
      <div class="auth-visual">
        <img src="/bpw/public/assets/images/png/dasher-ui-bootstrap-5.jpg" alt="MasalahTempo dashboard interface">
      </div>
      
      <form action="?aksi=prosesLogin" method="POST" class="needs-validation" novalidate>
        <div class="mb-4">
          <p class="eyebrow mb-1">Secure Access</p>
          <h1 class="h3 mb-1">Login</h1>
          <p class="text-muted mb-0">Sign in to your admin workspace.</p>
        </div>
        
        <div class="mb-3">
            <label class="form-label" for="loginEmail">email</label>
            <input class="form-control" id="loginEmail" type="email" name="email" required>
            <div class="invalid-feedback">Masukkan email yang valid.</div>
        </div>
        
        <div class="mb-3">
            <div class="d-flex justify-content-between">
                <label class="form-label" for="loginPassword">Password</label>
            </div>
            <input class="form-control" id="loginPassword" type="password" name="password" required>
            <div class="invalid-feedback">Password tidak boleh kosong.</div>
        </div>
    
        
        <button class="btn btn-primary w-100" type="submit">
            <i class="bi bi-box-arrow-in-right" aria-hidden="true"></i> Sign In
        </button>
      </form>
    </section>
  </main>

  <script src="/bpw/public/assets/js/bootstrap.bundle.min.js"></script>
  <script src="/bpw/public/assets/js/main.js"></script>
</body>
</html>