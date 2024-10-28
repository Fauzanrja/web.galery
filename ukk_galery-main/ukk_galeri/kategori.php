<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('https://smkn4bogor.sch.id/assets/images/background/smkn4bogor_2.jpg'); /* Gambar latar belakang */
            background-size: cover; /* Mengatur gambar agar memenuhi seluruh area */
            background-position: center; /* Menempatkan gambar di tengah */
            color: #fff;
            font-family: 'Arial', sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        .category-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: none;
            border-radius: 20px;
            overflow: hidden;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            position: relative;
        }
        .category-card:hover {
            transform: translateY(-15px) rotateX(5deg);
            box-shadow: 0 20px 30px rgba(0, 0, 0, 0.2);
        }
        .category-card .card-img-top {
            height: 250px;
            object-fit: cover;
            transition: transform 0.4s ease;
        }
        .category-card:hover .card-img-top {
            transform: scale(1.1);
        }
        .card-body {
            text-align: center;
            padding: 30px 20px;
            background: rgba(0, 0, 0, 0.7);
        }
        .card-title {
            font-size: 1.8rem;
            margin-bottom: 15px;
            font-weight: bold;
            color: #FFD700;
        }
        .card-text {
            font-size: 1.1rem;
            margin-bottom: 20px;
        }
        .sub-category-list {
            display: flex;
            justify-content: center;
            gap: 15px;
            padding: 0;
            list-style: none;
        }
        .sub-category-list li {
            background-color: #FFD700;
            color: #000;
            padding: 10px 15px;
            border-radius: 10px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .sub-category-list li:hover {
            background-color: #ffeb3b;
            transform: scale(1.1);
        }
        .btn-primary {
            background-color: #ff5722;
            border-color: #ff5722;
            transition: background-color 0.3s ease, transform 0.3s ease;
            font-size: 1.2rem;
        }
        .btn-primary:hover {
            background-color: #e64a19;
            transform: translateY(-5px);
        }
        .category-card::before {
            content: '🔗';
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 3rem;
            color: rgba(255, 255, 255, 0.1);
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="text-center mb-5">Kategori</h1>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card category-card">
                <img src="img/PPLG.jpg" class="card-img-top" alt="PPLG">
                <div class="card-body">
                    <h5 class="card-title">Jurusan PPLG</h5>
                    <p class="card-text">Deskripsi kategori 1 yang lebih mendalam.</p>
                    <ul class="sub-category-list">
                        <li>Sub-Kategori A</li>
                        <li>Sub-Kategori B</li>
                        <li>Sub-Kategori C</li>
                    </ul>
                    <a href="#" class="btn btn-primary mt-3">Lihat Gambar</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card category-card">
                <img src="img/TJKT.jpg" class="card-img-top" alt="TJKT">
                <div class="card-body">
                    <h5 class="card-title">Jurusan TJKT</h5>
                    <p class="card-text">Deskripsi kategori 2 yang lebih mendalam.</p>
                    <ul class="sub-category-list">
                        <li>Sub-Kategori D</li>
                        <li>Sub-Kategori E</li>
                    </ul>
                    <a href="#" class="btn btn-primary mt-3">Lihat Produk</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card category-card">
                <img src="img/TKR.jpg" class="card-img-top" alt="TKR">
                <div class="card-body">
                    <h5 class="card-title">Jurusan TKR</h5>
                    <p class="card-text">Deskripsi kategori 3 yang lebih mendalam.</p>
                    <ul class="sub-category-list">
                        <li>Sub-Kategori F</li>
                        <li>Sub-Kategori G</li>
                        <li>Sub-Kategori H</li>
                    </ul>
                    <a href="#" class="btn btn-primary mt-3">Lihat Produk</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
