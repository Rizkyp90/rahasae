<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Catatan - Rahasae</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <main class="content-center">
        <form action="/hasil-pencarian" method="GET" class="search-form">
            <div class="search-input-wrapper">
                <input type="text" name="kode" class="search-input" placeholder="Cari Nama Kamu" required autocomplete="off">
            </div>
        </form>

        <a href="/menu" class="catatan-back-button">Kembali ke Menu</a>
    </main>

</body>
</html>