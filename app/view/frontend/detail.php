<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $berita['judul']; ?></title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background: #f4f8ff;
            font-family: 'Segoe UI', sans-serif;
        }

        .berita-card{
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 123, 255, 0.15);
            transition: .3s;
        }

        .berita-card:hover{
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 123, 255, 0.25);
        }

        .berita-img{
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        .kategori{
            display: inline-block;
            background: #0d6efd;
            color: white;
            padding: 8px 18px;
            border-radius: 50px;
            font-size: 14px;
            font-weight: 600;
        }

        .judul{
            color: #0d6efd;
            font-weight: 700;
            margin-top: 15px;
        }

        .tanggal{
            color: #6c757d;
            font-size: 14px;
        }

        .deskripsi{
            line-height: 1.8;
            color: #444;
            text-align: justify;
        }

        .header-page{
            text-align: center;
            margin-bottom: 40px;
        }

        .header-page h1{
            color: #0d6efd;
            font-weight: 700;
        }

        .header-page p{
            color: #6c757d;
        }
    </style>
</head>
<body>

<div class="container py-5">

    <div class="header-page">
        <h1>Portal Berita</h1>
        <p>Informasi Terbaru dan Terpercaya</p>
    </div>

    <div class="berita-card">

        <img
            src="public/uploads/<?= $berita['foto']; ?>"
            alt="<?= $berita['judul']; ?>"
            class="berita-img"
        >

        <div class="p-4 p-md-5">

            <span class="kategori">
                <?= $berita['kategori']; ?>
            </span>

            <h2 class="judul">
                <?= $berita['judul']; ?>
            </h2>

            <p class="tanggal">
                📅 <?= date('d M Y', strtotime($berita['tanggal'])); ?>
            </p>

            <hr>

            <p class="deskripsi">
                <?= nl2br($berita['deskripsi']); ?>
            </p>

        </div>

    </div>

</div>

</body>
</html>