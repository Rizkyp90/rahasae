<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catatan untuk {{ $catatan->penerima_nama }} - Rahasae</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <main class="content-center" style="padding: 2rem 1rem;">
        <div class="detail-card">
            <h1 class="detail-title">{{ $catatan->penerima_nama }}</h1>
            <p class="detail-message">
                {{ $catatan->pesan }}
            </p>
            <p class="detail-sender">Dari: <span>{{ $catatan->pengirim_nama }}</span></p>

            <a href="javascript:history.back()" class="catatan-back-button">Kembali</a>
        </div>
    </main>

</body>
</html>