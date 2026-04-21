<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - UPA TIK POLIJE</title>
    <link href="tooplate-inner-peace.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <div class="login-page">
        <!-- Background Image -->
        <div class="background-img">
            <img src="polije.jpg" alt="">
        </div>
        
        <!-- Animated Elements -->
        <div class="peace-bg">
            <div class="breathing-circle"></div>
            <div class="breathing-circle"></div>
            <div class="breathing-circle"></div>
            <div class="breathing-circle"></div>
        </div>

        <div class="login-card">
            <a href="index (1).html" class="back-link"><i class="fas fa-arrow-left"></i> Kembali ke Home</a>
            
            <div class="login-header">
                <h2>Portal Admin</h2>
                <p>Akses terbatas untuk staff teknis UPA TIK Polije</p>
            </div>
            
            <div class="info-box">
                <i class="fas fa-shield-alt"></i> 
                <span>Masukkan kredensial dan kode akses Anda</span>
            </div>

            <form class="login-form form-group" action="admin-dashboard.php" method="POST">
                <div class="input-with-icon">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username Admin" name="username" required>
                </div>
                <div class="input-with-icon">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="password" required>
                </div>
                
                <button type="submit" class="submit-btn">Masuk ke Portal</button>
                
                <div class="login-footer">
                    <a href="index (1).html">Kembali ke Halaman Utama</a>
                </div>
            </form>
        </div>
    </div>

    <script src="tooplate-inner-peace-scripts.js"></script>
</body>
</html>
