<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Sistem Manajemen Donasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Dashboard - Sistem Manajemen Donasi</h1>
        <a href="/" class="btn btn-outline-secondary">Kembali</a>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-md-4">
            <div class="card p-3">
                <div class="text-muted">Total Donatur</div>
                <div class="h4">{{ number_format($stats['total_donors']) }}</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3">
                <div class="text-muted">Total Donasi (IDR)</div>
                <div class="h4">Rp {{ number_format($stats['total_donations'], 0, ',', '.') }}</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3">
                <div class="text-muted">Kampanye Aktif</div>
                <div class="h4">{{ number_format($stats['campaigns']) }}</div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Donasi Terbaru
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-sm mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Donatur</th>
                            <th>Jumlah</th>
                            <th>Kampanye</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($recentDonations as $d)
                            <tr>
                                <td>{{ $d['donor'] }}</td>
                                <td>Rp {{ number_format($d['amount'], 0, ',', '.') }}</td>
                                <td>{{ $d['campaign'] }}</td>
                                <td>{{ $d['date'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <footer class="mt-4 text-muted small">&copy; {{ date('Y') }} Sistem Manajemen Donasi</footer>
</div>
</body>
</html>
