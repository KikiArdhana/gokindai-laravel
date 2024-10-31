<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> <!-- Menggunakan Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            display: flex;
        }
        .sidebar {
            min-height: 100vh; /* Memastikan sidebar tetap sepanjang viewport */
        }
    </style>
</head>
<body>

    <div class="sidebar bg-dark text-white p-4">
        <h1> Dashboard </h1>
        <nav class="nav flex-column">
            <a class="nav-link text-white" href="#">Diskon</a>
            <a class="nav-link text-white" href="#">Level</a>
            <a class="nav-link text-white" href="#">Member</a>
            <a class="nav-link text-white" href="#">Menu</a>
            <a class="nav-link text-white" href="#">Pegawai</a>
            <a class="nav-link text-white" href="#">Poin</a>     
            <a class="nav-link text-white" href="#">Transaksi</a>
        </nav>
    </div>

    <div class="content flex-grow-1 p-4">
        <div class="card">
            <div class="card-body">
                <!-- Konten entitas akan ditampilkan di sini -->
                @yield('content') <!-- Tempat untuk konten spesifik setiap entitas -->
            </div>
        </div>
    </div>

</body>
</html>
