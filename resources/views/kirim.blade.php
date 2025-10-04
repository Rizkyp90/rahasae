<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kirim Catatan - Rahasae</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <main>
        <img src="{{ asset('images/amplopppp.png') }}" alt="Amplop Rahasae" class="envelope-img">

        <div class="input-display">
            Kirim untuk siapa?
        </div>

        <div class="choice-grid">
            <a href="/tulis/orang-tua" class="choice-box">Orang Tua</a>
            <a href="/tulis/saudara" class="choice-box">Saudara</a>
            <a href="/tulis/pasangan" class="choice-box">Pasangan</a>
            <a href="/tulis/sahabat" class="choice-box">Sahabat</a>
            <a href="/tulis/teman" class="choice-box">Teman</a>
            <a href="/tulis/untukku-nanti" class="choice-box">Untukku Nanti</a>
            <a href="/tulis/rahasia" class="choice-box">Rahasia</a>
            <a href="/tulis/lainnya" class="choice-box">Lainnya...</a>
        </div>
    </main>

</body>
</html>