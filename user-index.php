<?php
$username = isset($_POST['username']) ? trim($_POST['username']) : '';
$username = $username !== '' ? htmlspecialchars($username, ENT_QUOTES, 'UTF-8') : 'Pengguna';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Index - UPA TIK POLIJE</title>
    <link href="tooplate-inner-peace.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="login-page">
        <div class="background-img">
            <img src="polije.jpg" alt="Background Polije">
        </div>
        <div class="peace-bg">
            <div class="breathing-circle"></div>
            <div class="breathing-circle"></div>
            <div class="breathing-circle"></div>
            <div class="breathing-circle"></div>
        </div>

        <div class="login-card">
            <a href="index.html" class="back-link"><i class="fas fa-arrow-left"></i> Kembali ke Home</a>
            <div class="login-header">
                <h2>Selamat Datang, <?= $username ?></h2>
                <p>Anda telah berhasil masuk sebagai pengguna umum.</p>
            </div>
            <div class="info-box">
                <i class="fas fa-check-circle"></i>
                <span>Gunakan menu utama untuk mengakses layanan UPA TIK POLIJE.</span>
            </div>
            <div class="login-footer" style="margin-top: 1.5rem; text-align: center;">
                <a href="index.html" class="submit-btn" style="display: inline-block; padding: 0.9rem 1.5rem; text-decoration: none;">Kembali ke Beranda</a>
            </div>
        </div>
    </div>

    <script src="tooplate-inner-peace-scripts.js"></script>
</body>
</html>
