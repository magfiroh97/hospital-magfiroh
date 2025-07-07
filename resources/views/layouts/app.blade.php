<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Hospital Magfiroh')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap 5 CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            background-color: #f8fff8;
        }
        .sidebar {
            height: 100vh;
            background-color: #198754;
            padding-top: 20px;
        }
        .sidebar a {
            color: #ffffff;
            display: block;
            padding: 12px 20px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #146c43;
        }
        .sidebar .logo {
            font-size: 1.4rem;
            font-weight: bold;
            color: white;
            text-align: center;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        {{-- Sidebar --}}
        <div class="col-md-3 col-lg-2 sidebar">
            <div class="logo">
                <i class="fas fa-hospital"></i> Hospital Magfiroh
            </div>
            <a href="{{ route('dashboard') }}"><i class="fas fa-chart-line me-2"></i> Dashboard</a>
            <a href="{{ route('pasiens.index') }}"><i class="fas fa-user-injured me-2"></i> Pasien</a>
            <a href="{{ route('dokters.index') }}"><i class="fas fa-user-md me-2"></i> Dokter</a>
            <a href="{{ route('pendaftarans.index') }}"><i class="fas fa-notes-medical me-2"></i> Pendaftaran</a>
        </div>

        {{-- Main Content --}}
        <div class="col-md-9 col-lg-10 p-4">
            @yield('content')
        </div>
    </div>
</div>

{{-- Bootstrap JS --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
