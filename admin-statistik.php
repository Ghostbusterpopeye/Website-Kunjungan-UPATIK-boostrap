<?php
$title = 'Admin Statistik';
include 'includes/header.php';
?>

<!-- Sidebar -->
<?php include 'includes/admin-sidebar.php'; ?>

<!-- Main Content -->
<main class="admin-main">
    <div class="admin-container">
        
        <h1 class="page-title">Statistik Tahunan</h1>

        <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 2rem;">
            <!-- Chart Card -->
            <div class="table-card" style="min-height: 400px;">
                <h2 style="margin-bottom: 2rem;">Grafik Kunjungan Bulanan</h2>
                <div style="min-height: 300px; display: flex; align-items: center; justify-content: center;">
                    <canvas id="kunjunganChart" style="max-width: 100%;"></canvas>
                </div>
            </div>

            <!-- Stats Right Column -->
            <div style="display: flex; flex-direction: column; gap: 2rem;">
                <!-- Total Tahunan -->
                <div class="card" style="text-align: center;">
                    <div class="card-header">Total Tahunan</div>
                    <div style="font-size: 3rem; font-weight: bold; color: var(--primary); margin: 1rem 0;">232</div>
                    <div style="color: #999; font-size: 0.9rem;">Total pengunjung tahun ini</div>
                </div>

                <!-- Total Selesai -->
                <div class="card" style="text-align: center;">
                    <div class="card-header">Total Selesai</div>
                    <div style="font-size: 3rem; font-weight: bold; color: #10b981; margin: 1rem 0;">67</div>
                    <div style="color: #999; font-size: 0.9rem;">Tiket yang diselesaikan</div>
                </div>

                <!-- Rata-rata -->
                <div class="card" style="text-align: center;">
                    <div class="card-header">Rata-Rata Bulanan</div>
                    <div style="font-size: 3rem; font-weight: bold; color: #8b5cf6; margin: 1rem 0;">20</div>
                    <div style="color: #999; font-size: 0.9rem;">Pengunjung per bulan</div>
                </div>

                <!-- Print Button -->
                <button class="btn-primary" style="width: 100%; padding: 1rem; border: none; border-radius: 10px; cursor: pointer; margin-top: auto;" onclick="alert('Mencetak Laporan...')">
                    <i class="fas fa-print"></i> Cetak Laporan
                </button>
            </div>
        </div>

    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const ctx = document.getElementById('kunjunganChart').getContext('2d');
        
        let gradient = ctx.createLinearGradient(0, 0, 0, 300);
        gradient.addColorStop(0, 'rgba(45, 90, 135, 0.4)');
        gradient.addColorStop(1, 'rgba(45, 90, 135, 0.0)');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
                datasets: [{
                    label: 'Total Kunjungan',
                    data: [15, 20, 18, 25, 30, 28, 35, 32, 40, 38, 42, 50],
                    borderColor: '#2D5A87',
                    backgroundColor: gradient,
                    borderWidth: 3,
                    tension: 0.4,
                    fill: true,
                    pointBackgroundColor: '#ffffff',
                    pointBorderColor: '#2D5A87',
                    pointBorderWidth: 2,
                    pointRadius: 5,
                    pointHoverRadius: 7
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: true,
                        labels: {
                            font: { size: 12 },
                            color: '#666'
                        }
                    },
                    tooltip: {
                        backgroundColor: '#2A2A3E',
                        titleFont: { size: 13 },
                        bodyFont: { size: 14, weight: 'bold' },
                        padding: 12,
                        displayColors: false,
                        cornerRadius: 8,
                        titleColor: '#fff',
                        bodyColor: '#fff'
                    }
                },
                scales: {
                    x: {
                        grid: { display: false, drawBorder: false },
                        ticks: { font: { size: 12 }, color: '#999' }
                    },
                    y: {
                        beginAtZero: true,
                        max: 60,
                        grid: { color: '#f0f0f0' },
                        ticks: { font: { size: 12 }, color: '#999' }
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
            }
        });
    });
</script>
