<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Album</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: url('https://smkn4bogor.sch.id/assets/images/background/smkn4bogor_2.jpg'); /* Gambar latar belakang */
            background-size: cover; /* Mengatur gambar agar memenuhi seluruh area */
            background-position: center; /* Menempatkan gambar di tengah */
            color: #fff;
            font-family: 'Poppins', sans-serif;
        }
        h1 {
            font-weight: 600;
            color: #fff;
        }
        .album-card {
            margin-bottom: 30px;
            transition: transform 0.3s ease;
        }
        .album-card:hover {
            transform: translateY(-10px); /* Efek hover */
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }
        .album-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        .album-card:hover .album-image {
            transform: scale(1.1); /* Efek zoom saat hover */
        }
        .card-body {
            background-color: rgba(255, 255, 255, 0.8); /* Warna latar belakang menjadi putih dengan transparansi */
            color: #333; /* Warna teks menjadi gelap untuk kontras yang baik */
            padding: 15px;
            text-align: center;
        }
        .card-title {
            font-weight: 600;
            color: #333; /* Ubah warna judul menjadi gelap */
        }
        .btn-primary {
            background: linear-gradient(to right, #00b4db, #0083b0);
            border: none;
            transition: background 0.3s ease;
        }
        .btn-primary:hover {
            background: linear-gradient(to right, #0083b0, #00b4db); /* Efek hover pada tombol */
        }
        .btn-danger {
            background-color: #dc3545; /* Warna merah untuk tombol hapus */
            border: none;
        }
    </style>
</head>
<body>

<div class="container mt-4">
    <h1 class="text-center mb-4">Daftar Album</h1>
    
    <!-- Form untuk menambahkan album -->
    <div class="card mb-4">
        <div class="card-body">
            <h3 class="text-dark">Tambah Album Baru</h3>
            <form id="albumForm">
                <div class="form-group">
                    <label for="albumName" class="text-dark">Nama Album</label>
                    <input type="text" class="form-control" id="albumName" placeholder="Masukkan nama album" required>
                </div>
                <div class="form-group">
                    <label for="albumImage" class="text-dark">URL Gambar Album</label>
                    <input type="url" class="form-control" id="albumImage" placeholder="Masukkan URL gambar album" required>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Album</button>
            </form>
        </div>
    </div>
    
    <!-- Tempat untuk menampilkan album -->
    <div class="row" id="albumList">
        <!-- Album akan ditambahkan di sini menggunakan JavaScript -->
    </div>
</div>

<script>
    // Ambil elemen form dan daftar album
    const albumForm = document.getElementById('albumForm');
    const albumList = document.getElementById('albumList');

    // Event listener untuk menambah album
    albumForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Mencegah reload halaman

        // Ambil nilai dari form
        const albumName = document.getElementById('albumName').value;
        const albumImage = document.getElementById('albumImage').value;

        // Buat elemen baru untuk album
        const albumCard = document.createElement('div');
        albumCard.classList.add('col-md-4', 'album-card');
        albumCard.innerHTML = `
            <div class="card">
                <img src="${albumImage}" class="card-img-top album-image" alt="${albumName}">
                <div class="card-body">
                    <h5 class="card-title">${albumName}</h5>
                    <button class="btn btn-danger" onclick="removeAlbum(this)">Hapus Album</button>
                </div>
            </div>
        `;

        // Tambahkan album ke daftar
        albumList.appendChild(albumCard);

        // Reset form setelah submit
        albumForm.reset();
    });

    // Fungsi untuk menghapus album
    function removeAlbum(button) {
        const albumCard = button.closest('.album-card');
        albumCard.remove(); // Menghapus kartu album
    }
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
