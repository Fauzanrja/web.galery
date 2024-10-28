<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komentar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('https://smkn4bogor.sch.id/assets/images/background/smkn4bogor_2.jpg'); /* Gambar latar belakang */
            background-size: cover; /* Mengatur gambar agar memenuhi seluruh area */
            background-position: center; /* Menempatkan gambar di tengah */
            color: #333; /* Warna teks */
        }
        .list-group-item {
            background-color: rgba(255, 255, 255, 0.8); /* Warna latar belakang komentar dengan transparansi */
            border-left: 5px solid #007bff; /* Garis samping biru */
            transition: transform 0.2s, background-color 0.2s;
        }
        .list-group-item:hover {
            background-color: #e9ecef; /* Warna saat hover */
            transform: scale(1.02); /* Animasi memperbesar sedikit saat hover */
        }
        h1 {
            color: #007bff; /* Warna judul */
        }

        /* Gaya khusus untuk komentar Ariq Atthlah */
        .list-group-item.ariq {
            background: linear-gradient(135deg, #74ebd5, #acb6e5); /* Gradien warna */
            border-left: 8px solid #ff8c00; /* Garis samping oranye tebal */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Bayangan */
            border-radius: 10px; /* Ujung border melengkung */
            position: relative;
            padding-left: 20px; /* Ruang tambahan untuk ikon */
            color: #ffffff;
            animation: glow 1s ease-in-out infinite alternate; /* Animasi glow */
        }

        /* Animasi glow */
        @keyframes glow {
            from {
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            }
            to {
                box-shadow: 0 4px 20px rgba(255, 140, 0, 0.7);
            }
        }

        /* Ikon di sebelah kiri komentar Ariq */
        .list-group-item.ariq::before {
            content: '🌟'; /* Ikon bintang */
            font-size: 30px;
            position: absolute;
            top: 10px;
            left: -15px;
            color: #ff8c00;
        }

        /* Menambahkan animasi hover pada tombol waktu */
        .list-group-item small {
            transition: color 0.2s, transform 0.2s;
        }

        .list-group-item small:hover {
            color: #ff8c00; /* Mengubah warna waktu menjadi oranye saat hover */
            transform: scale(1.1); /* Sedikit memperbesar waktu */
        }
    </style>
</head>
<body>

<div class="container mt-4">
    <h1 class="mt-4">Komentar</h1>
    <div class="list-group">
        <div class="list-group-item ariq"> <!-- Menambahkan kelas khusus untuk komentar Ariq -->
            <h5 class="mb-1">Ariq Atthlah</h5>
            <p class="mb-1">Komentar pertama dari Ariq. Sangat menarik!</p>
            <small>Waktu: 09 Agustus 2024</small>
        </div>
        <div class="list-group-item ariq"> <!-- Menambahkan kelas khusus untuk komentar Ghuril -->
            <h5 class="mb-1">Ghuril</h5>
            <p class="mb-1">Komentar dari Ghuril. Sangat informatif!</p>
            <small>Waktu: 09 Agustus 2024</small>
        </div>
        <div class="list-group-item ariq"> <!-- Menambahkan kelas khusus untuk komentar Leon -->
            <h5 class="mb-1">Leon</h5>
            <p class="mb-1">Komentar dari Leon. Menarik untuk dibahas!</p>
            <small>Waktu: 09 Agustus 2024</small>
        </div>
        <!-- Tambahkan komentar lainnya di sini -->
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
