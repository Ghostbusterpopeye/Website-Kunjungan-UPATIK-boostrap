<?php
$title = 'Admin Dashboard';
include 'includes/header.php';
?>

<!-- Sidebar -->
<?php include 'includes/admin-sidebar.php'; ?>

<!-- Main Content -->
<main class="admin-main">
    <div class="admin-container">
        
        <h1 class="page-title">Dashboard</h1>

        <!-- TOP CARDS -->
        <div class="dashboard-cards">
            <!-- Card 1 - Total Pending -->
            <div class="card">
                <div class="card-header">Total Pending</div>
                <div style="display: flex; align-items: baseline; gap: 1rem;">
                    <div class="card-value">12</div>
                    <span style="background: #ffebee; color: #c62828; padding: 0.4rem 0.8rem; border-radius: 8px; font-size: 0.85rem; font-weight: 600;">
                        <i class="fas fa-arrow-up"></i> Naik 3
                    </span>
                </div>
                <div class="card-desc">Meningkat dari minggu lalu</div>
                <div class="card-footer">
                    <a href="#" class="card-link">
                        Lihat Laporan
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 2 - Total Selesai -->
            <div class="card">
                <div class="card-header">Total Selesai</div>
                <div class="card-value">96</div>
                <div class="card-desc">Anda menyelesaikan 96 dari 100 tiket</div>
                <div class="card-footer">
                    <a href="#" class="card-link">
                        Semua Tiket
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 3 - Total Pengguna -->
            <div class="card">
                <div class="card-header">Total Pengguna</div>
                <div class="card-value">342</div>
                <div class="card-desc">Pengguna aktif bulan ini</div>
                <div class="card-footer">
                    <a href="admin-pengguna.php" class="card-link">
                        Kelola Pengguna
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 4 - Layanan Aktif -->
            <div class="card">
                <div class="card-header">Layanan Aktif</div>
                <div class="card-value">8</div>
                <div class="card-desc">Layanan UPA TIK tersedia</div>
                <div class="card-footer">
                    <a href="admin-layanan.php" class="card-link">
                        Kelola Layanan
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- ANTREAN TABLE -->
        <div class="table-card">
            <div class="table-header">
                <h2>Daftar Antrean Terbaru</h2>
                <div class="search-box">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Cari antrean...">
                </div>
            </div>
            
            <div class="user-list">
                <!-- User 1 -->
                <div class="user-item">
                    <div class="user-avatar" style="background: linear-gradient(135deg, #f59e0b 0%, #f97316 100%);">B</div>
                    <div class="user-info">
                        <div class="user-name">Budiono Siregar</div>
                        <div class="user-role">SSO Email (Mahasiswa)</div>
                    </div>
                    <div class="user-status status-active">Menunggu</div>
                    <div class="user-actions">
                        <button class="btn-action" onclick="alert('Pesan dikirim')">
                            <i class="fas fa-comment-dots"></i>
                        </button>
                        <button class="btn-action btn-primary" onclick="alert('Ditandai selesai')">
                            <i class="fas fa-check"></i> Selesai
                        </button>
                    </div>
                </div>

                <!-- User 2 -->
                <div class="user-item" style="background: rgba(45, 90, 135, 0.05);">
                    <div class="user-avatar" style="background: linear-gradient(135deg, #ec4899 0%, #db2777 100%);">L</div>
                    <div class="user-info">
                        <div class="user-name">Layla Ismah Caren</div>
                        <div class="user-role">Reset Password (Mahasiswa)</div>
                    </div>
                    <div class="user-status status-active">Sedang Diproses</div>
                    <div class="user-actions">
                        <button class="btn-action" onclick="alert('Pesan dikirim')">
                            <i class="fas fa-comment-dots"></i>
                        </button>
                        <button class="btn-action btn-primary" onclick="alert('Ditandai selesai')">
                            <i class="fas fa-check"></i> Selesai
                        </button>
                    </div>
                </div>

                <!-- User 3 -->
                <div class="user-item">
                    <div class="user-avatar" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%);">S</div>
                    <div class="user-info">
                        <div class="user-name">Satrio Pandu</div>
                        <div class="user-role">Aktivasi VPN (Dosen)</div>
                    </div>
                    <div class="user-status status-active">Menunggu</div>
                    <div class="user-actions">
                        <button class="btn-action" onclick="alert('Pesan dikirim')">
                            <i class="fas fa-comment-dots"></i>
                        </button>
                        <button class="btn-action btn-primary" onclick="alert('Ditandai selesai')">
                            <i class="fas fa-check"></i> Selesai
                        </button>
                    </div>
                </div>
            </div>

            <div style="margin-top: 2rem; padding-top: 1.5rem; border-top: 1px solid #f0f0f0;">
                <a href="#" class="card-link">
                    Lihat Semua Antrean
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>

    </div>
</main>
                    <img src="https://ui-avatars.com/api/?name=R+K&background=8b5cf6&color=fff&rounded=true" alt="User" class="w-10 h-10 rounded-full border-2 border-white shadow-sm hover:-translate-y-1 transition-transform cursor-pointer -ml-4">
                </div>
            </div>

            <!-- New Deals (Quick Actions) -->
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-8">
                <h3 class="text-lg font-bold text-slate-800 mb-6">Aksi Cepat</h3>
                <div class="flex flex-wrap gap-3">
                    <div class="bg-slate-50 border border-slate-200 text-slate-700 text-sm font-semibold py-2 px-4 rounded-full cursor-pointer hover:border-blue-500 hover:text-blue-600 transition-all flex items-center gap-2"><i class="fas fa-plus text-xs"></i> Buat Pengumuman</div>
                    <div class="bg-slate-50 border border-slate-200 text-slate-700 text-sm font-semibold py-2 px-4 rounded-full cursor-pointer hover:border-blue-500 hover:text-blue-600 transition-all flex items-center gap-2"><i class="fas fa-plus text-xs"></i> Tambah Layanan</div>
                    <div class="bg-slate-50 border border-slate-200 text-slate-700 text-sm font-semibold py-2 px-4 rounded-full cursor-pointer hover:border-blue-500 hover:text-blue-600 transition-all flex items-center gap-2"><i class="fas fa-plus text-xs"></i> Rekap Mingguan</div>
                </div>
            </div>
        </div>

    </main>
</div>

<script src="script.js"></script>
</body>
</html>
