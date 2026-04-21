<?php
$title = 'Admin Layanan';
include 'includes/header.php';
?>

<!-- Sidebar -->
<?php include 'includes/admin-sidebar.php'; ?>

<!-- Main Content -->
<main class="admin-main">
    <div class="admin-container">
        
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
            <h1 class="page-title" style="margin-bottom: 0;">Kelola Layanan UPA TIK</h1>
            <button class="btn-primary" onclick="alert('Tambah Layanan Baru')" style="padding: 0.8rem 1.5rem; border-radius: 10px; border: none; cursor: pointer;">
                <i class="fas fa-plus"></i> Tambah Layanan
            </button>
        </div>

        <!-- Layanan Cards -->
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 2rem;">
            
            <!-- Layanan 1 - Reset Password -->
            <div class="card">
                <div style="position: absolute; top: 1.5rem; right: 1.5rem; background: #ffebee; color: #c62828; padding: 0.4rem 0.8rem; border-radius: 20px; font-size: 0.75rem; font-weight: 600;" class="layanan-status">NONAKTIF</div>
                <h3 style="font-size: 1.2rem; color: var(--dark); margin-bottom: 0.5rem; padding-right: 4rem;">Reset Password</h3>
                <p style="color: #999; font-size: 0.9rem; margin-bottom: 1.5rem;">Layanan reset password untuk civitas akademika Polije</p>
                <div style="margin-top: auto; padding-top: 1rem; border-top: 1px solid #f0f0f0;">
                    <button class="btn-action" style="width: 100%; background: var(--primary); color: white;" onclick="toggleLayanan(this)">
                        <i class="fas fa-power-off"></i> Aktifkan
                    </button>
                </div>
            </div>

            <!-- Layanan 2 - VPN -->
            <div class="card" style="border-top: 3px solid var(--primary);">
                <div style="position: absolute; top: 1.5rem; right: 1.5rem; background: #d4edda; color: #155724; padding: 0.4rem 0.8rem; border-radius: 20px; font-size: 0.75rem; font-weight: 600;" class="layanan-status">AKTIF</div>
                <h3 style="font-size: 1.2rem; color: var(--dark); margin-bottom: 0.5rem; padding-right: 4rem;">Pemasangan VPN</h3>
                <p style="color: #999; font-size: 0.9rem; margin-bottom: 1.5rem;">Layanan pemasangan dan konfigurasi VPN kampus</p>
                <div style="margin-top: auto; padding-top: 1rem; border-top: 1px solid #f0f0f0;">
                    <button class="btn-action" style="width: 100%; background: #dc2626; color: white;" onclick="toggleLayanan(this)">
                        <i class="fas fa-power-off"></i> Nonaktifkan
                    </button>
                </div>
            </div>

            <!-- Layanan 3 - Keluhan -->
            <div class="card" style="border-top: 3px solid var(--primary);">
                <div style="position: absolute; top: 1.5rem; right: 1.5rem; background: #d4edda; color: #155724; padding: 0.4rem 0.8rem; border-radius: 20px; font-size: 0.75rem; font-weight: 600;" class="layanan-status">AKTIF</div>
                <h3 style="font-size: 1.2rem; color: var(--dark); margin-bottom: 0.5rem; padding-right: 4rem;">Keluhan IT</h3>
                <p style="color: #999; font-size: 0.9rem; margin-bottom: 1.5rem;">Layanan pelaporan keluhan dan masalah teknis</p>
                <div style="margin-top: auto; padding-top: 1rem; border-top: 1px solid #f0f0f0;">
                    <button class="btn-action" style="width: 100%; background: #dc2626; color: white;" onclick="toggleLayanan(this)">
                        <i class="fas fa-power-off"></i> Nonaktifkan
                    </button>
                </div>
            </div>

            <!-- Layanan 4 - Maintenance -->
            <div class="card">
                <div style="position: absolute; top: 1.5rem; right: 1.5rem; background: #ffebee; color: #c62828; padding: 0.4rem 0.8rem; border-radius: 20px; font-size: 0.75rem; font-weight: 600;" class="layanan-status">NONAKTIF</div>
                <h3 style="font-size: 1.2rem; color: var(--dark); margin-bottom: 0.5rem; padding-right: 4rem;">Maintenance Server</h3>
                <p style="color: #999; font-size: 0.9rem; margin-bottom: 1.5rem;">Layanan maintenance dan update server kampus</p>
                <div style="margin-top: auto; padding-top: 1rem; border-top: 1px solid #f0f0f0;">
                    <button class="btn-action" style="width: 100%; background: var(--primary); color: white;" onclick="toggleLayanan(this)">
                        <i class="fas fa-power-off"></i> Aktifkan
                    </button>
                </div>
            </div>

            <!-- Layanan 5 - E-Learning -->
            <div class="card" style="border-top: 3px solid var(--primary);">
                <div style="position: absolute; top: 1.5rem; right: 1.5rem; background: #d4edda; color: #155724; padding: 0.4rem 0.8rem; border-radius: 20px; font-size: 0.75rem; font-weight: 600;" class="layanan-status">AKTIF</div>
                <h3 style="font-size: 1.2rem; color: var(--dark); margin-bottom: 0.5rem; padding-right: 4rem;">Support E-Learning</h3>
                <p style="color: #999; font-size: 0.9rem; margin-bottom: 1.5rem;">Layanan dukungan platform pembelajaran online</p>
                <div style="margin-top: auto; padding-top: 1rem; border-top: 1px solid #f0f0f0;">
                    <button class="btn-action" style="width: 100%; background: #dc2626; color: white;" onclick="toggleLayanan(this)">
                        <i class="fas fa-power-off"></i> Nonaktifkan
                    </button>
                </div>
            </div>

            <!-- Layanan 6 - Server Backup -->
            <div class="card">
                <div style="position: absolute; top: 1.5rem; right: 1.5rem; background: #ffebee; color: #c62828; padding: 0.4rem 0.8rem; border-radius: 20px; font-size: 0.75rem; font-weight: 600;" class="layanan-status">NONAKTIF</div>
                <h3 style="font-size: 1.2rem; color: var(--dark); margin-bottom: 0.5rem; padding-right: 4rem;">Server Backup</h3>
                <p style="color: #999; font-size: 0.9rem; margin-bottom: 1.5rem;">Layanan backup dan recovery data server</p>
                <div style="margin-top: auto; padding-top: 1rem; border-top: 1px solid #f0f0f0;">
                    <button class="btn-action" style="width: 100%; background: var(--primary); color: white;" onclick="toggleLayanan(this)">
                        <i class="fas fa-power-off"></i> Aktifkan
                    </button>
                </div>
            </div>
        </div>

    </div>
</main>

<script>
    function toggleLayanan(btn) {
        const card = btn.closest('.card');
        const statusDiv = card.querySelector('.layanan-status');
        const isActive = statusDiv.textContent === 'AKTIF';

        if (isActive) {
            statusDiv.textContent = 'NONAKTIF';
            statusDiv.style.background = '#ffebee';
            statusDiv.style.color = '#c62828';
            btn.textContent = '<i class="fas fa-power-off"></i> Aktifkan';
            btn.style.background = 'var(--primary)';
            card.style.borderTop = 'none';
        } else {
            statusDiv.textContent = 'AKTIF';
            statusDiv.style.background = '#d4edda';
            statusDiv.style.color = '#155724';
            btn.textContent = '<i class="fas fa-power-off"></i> Nonaktifkan';
            btn.style.background = '#dc2626';
            card.style.borderTop = '3px solid var(--primary)';
        }
    }
</script>
