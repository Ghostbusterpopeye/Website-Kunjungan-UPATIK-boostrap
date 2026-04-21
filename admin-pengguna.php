<?php
$title = 'Admin Pengguna';
include 'includes/header.php';
?>

<!-- Sidebar -->
<?php include 'includes/admin-sidebar.php'; ?>

<!-- Main Content -->
<main class="admin-main">
    <div class="admin-container">
        
        <h1 class="page-title">Daftar Pengguna</h1>

        <!-- Users Table -->
        <div class="table-card">
            <div class="table-header">
                <h2>Kelola Pengguna Sistem</h2>
                <div class="search-box">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Cari pengguna...">
                </div>
            </div>
            
            <div class="user-list">
                <!-- User 1 -->
                <div class="user-item">
                    <div class="user-avatar" style="background: linear-gradient(135deg, #f59e0b 0%, #f97316 100%);">B</div>
                    <div class="user-info">
                        <div class="user-name">Budiono Siregar</div>
                        <div class="user-role">Mahasiswa - NIM: 1234567890</div>
                    </div>
                    <div class="user-status status-active">Aktif</div>
                    <div class="user-actions">
                        <a href="#" class="btn-action">Edit</a>
                        <button class="btn-action" onclick="alert('Pengguna di-nonaktifkan')">Nonaktifkan</button>
                    </div>
                </div>

                <!-- User 2 -->
                <div class="user-item">
                    <div class="user-avatar" style="background: linear-gradient(135deg, #ec4899 0%, #db2777 100%);">L</div>
                    <div class="user-info">
                        <div class="user-name">Layla Ismah Caren</div>
                        <div class="user-role">Mahasiswa - NIM: 1234567891</div>
                    </div>
                    <div class="user-status status-active">Aktif</div>
                    <div class="user-actions">
                        <a href="#" class="btn-action">Edit</a>
                        <button class="btn-action" onclick="alert('Pengguna di-nonaktifkan')">Nonaktifkan</button>
                    </div>
                </div>

                <!-- User 3 -->
                <div class="user-item">
                    <div class="user-avatar" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%);">S</div>
                    <div class="user-info">
                        <div class="user-name">Satrio Pandu</div>
                        <div class="user-role">Mahasiswa - NIM: 1234567892</div>
                    </div>
                    <div class="user-status status-active">Aktif</div>
                    <div class="user-actions">
                        <a href="#" class="btn-action">Edit</a>
                        <button class="btn-action" onclick="alert('Pengguna di-nonaktifkan')">Nonaktifkan</button>
                    </div>
                </div>

                <!-- User 4 -->
                <div class="user-item">
                    <div class="user-avatar" style="background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%);">M</div>
                    <div class="user-info">
                        <div class="user-name">M.M Benedicta</div>
                        <div class="user-role">Dosen - NIP: 1987654321</div>
                    </div>
                    <div class="user-status status-active">Aktif</div>
                    <div class="user-actions">
                        <a href="#" class="btn-action">Edit</a>
                        <button class="btn-action" onclick="alert('Pengguna di-nonaktifkan')">Nonaktifkan</button>
                    </div>
                </div>

                <!-- User 5 -->
                <div class="user-item">
                    <div class="user-avatar" style="background: linear-gradient(135deg, #f43f5e 0%, #e11d48 100%);">R</div>
                    <div class="user-info">
                        <div class="user-name">Reza Auditore</div>
                        <div class="user-role">Mahasiswa - NIM: 1234567893</div>
                    </div>
                    <div class="user-status status-inactive">Tidak Aktif</div>
                    <div class="user-actions">
                        <a href="#" class="btn-action">Edit</a>
                        <button class="btn-action" onclick="alert('Pengguna diaktifkan')">Aktifkan</button>
                    </div>
                </div>

                <!-- User 6 -->
                <div class="user-item">
                    <div class="user-avatar" style="background: linear-gradient(135deg, #06b6d4 0%, #0891b2 100%);">A</div>
                    <div class="user-info">
                        <div class="user-name">Ahmad Rizki</div>
                        <div class="user-role">Mahasiswa - NIM: 1234567894</div>
                    </div>
                    <div class="user-status status-active">Aktif</div>
                    <div class="user-actions">
                        <a href="#" class="btn-action">Edit</a>
                        <button class="btn-action" onclick="alert('Pengguna di-nonaktifkan')">Nonaktifkan</button>
                    </div>
                </div>
            </div>

            <div style="margin-top: 2rem; padding-top: 1.5rem; border-top: 1px solid #f0f0f0;">
                <a href="#" class="card-link">
                    Tambah Pengguna Baru
                    <i class="fas fa-plus"></i>
                </a>
            </div>
        </div>

    </div>
</main>
