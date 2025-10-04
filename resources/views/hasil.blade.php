<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pencarian - Rahasae</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <main class="content-center" style="padding: 2rem 1rem;">

        @if(!$catatans->isEmpty())
            {{-- Tampilkan judul pencarian jika ada hasil --}}
            <div class="search-query-display">Hasil untuk: "{{ $query }}"</div>

            {{-- Grid untuk hasil pencarian --}}
            <div class="results-grid">
                @foreach ($catatans as $catatan)
                    {{-- Setiap kartu adalah link ke halaman detail --}}
                    <a href="/catatan/{{ $catatan->kode_unik }}" class="result-card">
                        <div class="result-card-label">{{ $catatan->penerima_nama }}</div>
                        <div class="result-card-preview">
                            {{ Str::limit($catatan->pesan, 10, '...') }}
                        </div>
                    </a>
                @endforeach
            </div>
            <a href="/cari" class="catatan-back-button">Cari yang lain</a>

        @else
            {{-- JIKA TIDAK ADA CATATAN YANG DITEMUKAN --}}
            <div class="success-card">
                <h1 class="success-title" style="font-size:1.8rem;">Oops!</h1>
                <p class="success-message">
                    Tidak ada catatan yang ditemukan untuk "{{ $query }}".
                </p>
                <a href="/cari" class="success-button" style="margin-top:1.5rem;">Coba Cari Lagi</a>
            </div>
        @endif
    </main>

</body>
</html>