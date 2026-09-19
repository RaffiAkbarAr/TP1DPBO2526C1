<?php

require_once "Tiket.php";
session_start();

/* =========================
   DATA AWAL
   ========================= */

if (!isset($_SESSION['data_tiket_simple'])) {

    $_SESSION['data_tiket_simple'] = [

    [
        'id' => 'T001',
        'namaFilm' => 'Sendirian Di Rumah',
        'jenisTiket' => 'Regular',
        'harga' => 35000,
        'gambar' => 'images/Sendirian Di Rumah.jpg'
    ],

    [
        'id' => 'T002',
        'namaFilm' => 'Manusia Kekelawar',
        'jenisTiket' => 'Regular',
        'harga' => 50000,
        'gambar' => 'images/Manusia Kekelawar.jpg'
    ],

    [
        'id' => 'T003',
        'namaFilm' => 'Monster',
        'jenisTiket' => 'Regular',
        'harga' => 35000,
        'gambar' => 'images/Monster.jpg'
    ]

];
}


/* =========================
   Tambah Tiket
   ========================= */

if (isset($_POST['tambah'])) {

    $_SESSION['data_tiket_simple'][] = [

        'id' => $_POST['id'],
        'namaFilm' => $_POST['namaFilm'],
        'jenisTiket' => $_POST['jenisTiket'],
        'harga' => $_POST['harga'],
        'gambar' => 'images/Monster.jpg'

    ];

    header("Location: index.php?menu=tampil");
    exit;
}


/* =========================
   Update Tiket
   ========================= */

if (isset($_POST['update'])) {

    foreach ($_SESSION['data_tiket_simple'] as $key => $data) {

        if ($data['id'] == $_POST['id']) {

            $_SESSION['data_tiket_simple'][$key]['namaFilm']
                = $_POST['namaFilm'];

            $_SESSION['data_tiket_simple'][$key]['jenisTiket']
                = $_POST['jenisTiket'];

            $_SESSION['data_tiket_simple'][$key]['harga']
                = $_POST['harga'];

        }
    }

    header("Location: index.php?menu=tampil");
    exit;
}


/* =========================
   Hapus Tiket
   ========================= */

if (isset($_POST['hapus'])) {

    foreach ($_SESSION['data_tiket_simple'] as $key => $data) {

        if ($data['id'] == $_POST['id']) {

            unset($_SESSION['data_tiket_simple'][$key]);

        }
    }

    $_SESSION['data_tiket_simple']
        = array_values($_SESSION['data_tiket_simple']);

    header("Location: index.php?menu=tampil");
    exit;
}


$menu = $_GET['menu'] ?? 'home';

?>

<!DOCTYPE html>

<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Cinema 26</title>

    <style>

        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            margin: 0;
            background: #f2f2f2;
            color: #222;
        }

        .container {
            width: 900px;
            max-width: 92%;
            margin: 40px auto;
        }

        .header {
            background: #222;
            color: white;
            padding: 30px;
            border-radius: 12px;
            text-align: center;
            margin-bottom: 25px;
        }

        .header h1 {
            margin: 0 0 8px;
        }

        .header p {
            margin: 0;
            color: #ddd;
        }

        /* =====================
           MENU 5 FITUR
           ===================== */

        .menu {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 12px;
            margin-bottom: 25px;
        }

        .menu a {
            text-decoration: none;
            text-align: center;
            background: white;
            color: #222;
            padding: 18px 10px;
            border-radius: 10px;
            box-shadow: 0 2px 8px #ccc;
            font-weight: bold;
        }

        .menu a:hover {
            background: #222;
            color: white;
        }

        .menu .active {
            background: #222;
            color: white;
        }

        /* =====================
           CONTENT
           ===================== */

        .content {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 2px 8px #ccc;
        }

        .content h2 {
            margin-top: 0;
        }

        /* =====================
           TABLE
           ===================== */

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #222;
            color: white;
            padding: 12px;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        .gambar {
            width: 55px;
            height: 55px;
        }

        /* =====================
           FORM
           ===================== */

        .form-box {
            max-width: 500px;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button {
            margin-top: 20px;
            padding: 11px 20px;
            border: none;
            border-radius: 6px;
            background: #222;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background: #444;
        }

        .back {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #222;
            font-weight: bold;
        }

        .hasil {
            margin-top: 25px;
        }

        /* =====================
           HOME
           ===================== */

        .home {
            text-align: center;
            padding: 30px;
        }

        .home h2 {
            margin-bottom: 10px;
        }

        .home p {
            color: #666;
        }

        @media(max-width: 700px) {

            .menu {
                grid-template-columns: 1fr 1fr;
            }

        }

    </style>

</head>


<body>

<div class="container">


    <!-- HEADER -->

    <div class="header">

        <h1>🎬 Cinema 26</h1>

        <p>
            Sistem Pengelolaan Data Tiket
        </p>

    </div>


    <!-- 5 TOMBOL FITUR -->

    <div class="menu">

        <a href="index.php?menu=tambah"
           class="<?= $menu == 'tambah' ? 'active' : '' ?>">

            ➕<br>
            Tambah Tiket

        </a>


        <a href="index.php?menu=tampil"
           class="<?= $menu == 'tampil' ? 'active' : '' ?>">

            📋<br>
            Tampilkan semua tiket

        </a>


        <a href="index.php?menu=update"
           class="<?= $menu == 'update' ? 'active' : '' ?>">

            ✏️<br>
            Update Tiket

        </a>


        <a href="index.php?menu=hapus"
           class="<?= $menu == 'hapus' ? 'active' : '' ?>">

            🗑️<br>
            Hapus Tiket

        </a>


        <a href="index.php?menu=cari"
           class="<?= $menu == 'cari' ? 'active' : '' ?>">

            🔍<br>
            Cari Tiket

        </a>

    </div>


    <!-- =========================
         HOME
         ========================= -->

    <?php if ($menu == 'home'): ?>

        <div class="content home">

            <h2>Selamat Datang</h2>

            <p>
                Silakan pilih salah satu fitur di atas
                untuk mengelola data tiket bioskop.
            </p>

        </div>


    <!-- =========================
         Tampilkan semua tiket
         ========================= -->

    <?php elseif ($menu == 'tampil'): ?>

        <div class="content">

            <h2>📋 Data Tiket</h2>

            <p>
                Daftar seluruh tiket bioskop.
            </p>

            <br>

            <table>

                <tr>

                    <th>Gambar</th>
                    <th>ID</th>
                    <th>Nama Film</th>
                    <th>Jenis Tiket</th>
                    <th>Harga</th>

                </tr>


                <?php foreach (
                    $_SESSION['data_tiket_simple']
                    as $data
                ): ?>

                    <?php

                    $tiket = new Tiket(
                        $data['id'],
                        $data['namaFilm'],
                        $data['jenisTiket'],
                        $data['harga'],
                        $data['gambar']
                    );

                    ?>

                    <tr>

                        <td>

                            <img
                                class="gambar"
                                src="<?= $tiket->getGambar(); ?>"
                                alt="Tiket"
                            >

                        </td>

                        <td>
                            <?= $tiket->getId(); ?>
                        </td>

                        <td>
                            <?= htmlspecialchars(
                                $tiket->getNamaFilm()
                            ); ?>
                        </td>

                        <td>
                            <?= $tiket->getJenisTiket(); ?>
                        </td>

                        <td>
                            Rp <?= number_format(
                                $tiket->getHarga(),
                                0,
                                ',',
                                '.'
                            ); ?>
                        </td>

                    </tr>

                <?php endforeach; ?>

            </table>

        </div>


    <!-- =========================
         Tambah Tiket
         ========================= -->

    <?php elseif ($menu == 'tambah'): ?>

        <div class="content">

            <h2>➕ Tambah Tiket Tiket</h2>

            <p>
                Masukkan data tiket baru.
            </p>

            <div class="form-box">

                <form method="POST">

                    <label>ID Tiket</label>

                    <input
                        type="text"
                        name="id"
                        placeholder="T004"
                        required
                    >


                    <label>Nama Film</label>

                    <input
                        type="text"
                        name="namaFilm"
                        placeholder="Nama film"
                        required
                    >


                    <label>Jenis Tiket</label>

                    <select name="jenisTiket">

                        <option value="Regular">
                            Regular
                        </option>

                        <option value="Regular">
                            Regular
                        </option>

                    </select>


                    <label>Harga</label>

                    <input
                        type="number"
                        name="harga"
                        placeholder="35000"
                        required
                    >


                    <button
                        type="submit"
                        name="tambah"
                    >
                        Tambah Tiket
                    </button>

                </form>

            </div>

        </div>


    <!-- =========================
         Update Tiket
         ========================= -->

    <?php elseif ($menu == 'update'): ?>

        <div class="content">

            <h2>✏️ Update Tiket Tiket</h2>

            <p>
                Ubah data tiket berdasarkan ID.
            </p>

            <div class="form-box">

                <form method="POST">

                    <label>ID Tiket</label>

                    <input
                        type="text"
                        name="id"
                        placeholder="T001"
                        required
                    >


                    <label>Nama Film Baru</label>

                    <input
                        type="text"
                        name="namaFilm"
                        required
                    >


                    <label>Jenis Tiket Baru</label>

                    <select name="jenisTiket">

                        <option value="Regular">
                            Regular
                        </option>

                        <option value="Regular">
                            Regular
                        </option>

                    </select>


                    <label>Harga Baru</label>

                    <input
                        type="number"
                        name="harga"
                        required
                    >


                    <button
                        type="submit"
                        name="update"
                    >
                        Update Tiket
                    </button>

                </form>

            </div>

        </div>


    <!-- =========================
         Hapus Tiket
         ========================= -->

    <?php elseif ($menu == 'hapus'): ?>

        <div class="content">

            <h2>🗑️ Hapus Tiket Tiket</h2>

            <p>
                Masukkan ID tiket yang ingin dihapus.
            </p>

            <div class="form-box">

                <form method="POST">

                    <label>ID Tiket</label>

                    <input
                        type="text"
                        name="id"
                        placeholder="T001"
                        required
                    >


                    <button
                        type="submit"
                        name="hapus"
                    >
                        Hapus Tiket
                    </button>

                </form>

            </div>

        </div>


    <!-- =========================
         Cari Tiket
         ========================= -->

    <?php elseif ($menu == 'cari'): ?>

        <div class="content">

            <h2>🔍 Cari Tiket Tiket</h2>

            <p>
                Cari berdasarkan ID atau nama film.
            </p>


            <div class="form-box">

                <form method="GET">

                    <input
                        type="hidden"
                        name="menu"
                        value="cari"
                    >


                    <label>ID / Nama Film</label>

                    <input
                        type="text"
                        name="keyword"
                        placeholder="Contoh: T001"
                        required
                    >


                    <button type="submit">
                        Cari Tiket
                    </button>

                </form>

            </div>


            <?php if (isset($_GET['keyword'])): ?>

                <?php

                $keyword = strtolower(
                    trim($_GET['keyword'])
                );

                $ketemu = false;

                ?>

                <div class="hasil">

                    <h3>Hasil Pencarian</h3>

                    <table>

                        <tr>

                            <th>ID</th>
                            <th>Nama Film</th>
                            <th>Jenis</th>
                            <th>Harga</th>

                        </tr>


                        <?php foreach (
                            $_SESSION['data_tiket_simple']
                            as $data
                        ): ?>

                            <?php

                            if (
                                strtolower($data['id'])
                                == $keyword

                                ||

                                strtolower($data['namaFilm'])
                                == $keyword
                            ):

                                $ketemu = true;

                            ?>

                                <tr>

                                    <td>
                                        <?= $data['id']; ?>
                                    </td>

                                    <td>
                                        <?= htmlspecialchars(
                                            $data['namaFilm']
                                        ); ?>
                                    </td>

                                    <td>
                                        <?= $data['jenisTiket']; ?>
                                    </td>

                                    <td>
                                        Rp <?= number_format(
                                            $data['harga'],
                                            0,
                                            ',',
                                            '.'
                                        ); ?>
                                    </td>

                                </tr>

                            <?php endif; ?>

                        <?php endforeach; ?>


                        <?php if (!$ketemu): ?>

                            <tr>

                                <td colspan="4">
                                    Data tidak ditemukan.
                                </td>

                            </tr>

                        <?php endif; ?>

                    </table>

                </div>

            <?php endif; ?>

        </div>

    <?php endif; ?>


</div>

</body>

</html>