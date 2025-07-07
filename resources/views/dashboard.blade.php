@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<div class="card">
    <div class="card-header">
        <h3>Selamat Datang di Sistem Manajemen Rumah Sakit</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <!-- Statistik Pasien -->
            <div class="col-md-4 mb-3">
                <div class="card bg-light text-dark">
                    <div class="card-body text-center">
                        <h5>Jumlah Pasien</h5>
                        <h2>{{ $pasienCount }}</h2>
                        <a href="{{ route('pasiens.index') }}" class="btn btn-primary btn-sm">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <!-- Statistik Dokter -->
            <div class="col-md-4 mb-3">
                <div class="card bg-light text-dark">
                    <div class="card-body text-center">
                        <h5>Jumlah Dokter</h5>
                        <h2>{{ $dokterCount }}</h2>
                        <a href="{{ route('dokters.index') }}" class="btn btn-primary btn-sm">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <!-- Statistik Pendaftaran -->
            <div class="col-md-4 mb-3">
                <div class="card bg-light text-dark">
                    <div class="card-body text-center">
                        <h5>Jumlah Pendaftaran</h5>
                        <h2>{{ $pendaftaranCount }}</h2>
                        <a href="{{ route('pendaftarans.index') }}" class="btn btn-primary btn-sm">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Grafik Sederhana (Placeholder) -->
        <div class="card mt-4">
            <div class="card-header">
                <h5>Statistik Pendaftaran Terbaru</h5>
            </div>
            <div class="card-body">
                <canvas id="pendaftaranChart" width="400" height="200"></canvas>
            </div>
        </div>
    </div>
</div>

<!-- Script untuk Chart.js (Placeholder) -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('pendaftaranChart').getContext('2d');
    const pendaftaranChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Pending', 'Approved', 'Rejected'],
            datasets: [{
                label: 'Jumlah Pendaftaran',
                data: [{{ $pendingCount }}, {{ $approvedCount }}, {{ $rejectedCount }}],
                backgroundColor: ['#4682b4', '#87cefa', '#ff6347'],
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endsection