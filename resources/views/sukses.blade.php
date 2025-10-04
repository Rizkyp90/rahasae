<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Terkirim! - Rahasae</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <main>
        <div class="success-card">
            <svg class="success-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                <circle class="success-icon-circle" cx="26" cy="26" r="25" fill="none"/>
                <path class="success-icon-checkmark" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
            </svg>

            <h1 class="success-title">Terkirim!</h1>
            <p class="success-message">
                Pesan kamu berhasil terkirim.<br>Terima kasih banyak! :)
            </p>

            <p class="success-message" style="margin-top:1.5rem; font-size: 0.9rem;">Simpan kode rahasia ini untuk melihat pesanmu:</p>
            <div class="unique-code-display">
                {{ $kode }}
            </div>

            <a href="/" class="success-button">Selesai</a>
        </div>
    </main>

</body>
</html>