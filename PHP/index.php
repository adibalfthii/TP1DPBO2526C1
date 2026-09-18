<?php
require_once __DIR__ . "/Film.php";
session_start();

if (!isset($_SESSION['daftarFilm'])) {
    $_SESSION['daftarFilm'] = [];
}

$pesan = "";
$hasilCari = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST['action']; 

    if ($action == "tambah") {
        $filmBaru = new Film($_POST['id'], $_POST['judul'], $_POST['genre'], (int)$_POST['durasi'], $_POST['pathGambar']);
        $_SESSION['daftarFilm'][] = $filmBaru;
        $pesan = "Berhasil menambahkan film!";
    } 
    elseif ($action == "update") {
        $idDicari = $_POST['id'];
        $ketemu = false;
        foreach ($_SESSION['daftarFilm'] as $key => $f) {
            if ($f->getId() == $idDicari) {
                $_SESSION['daftarFilm'][$key]->setJudul($_POST['judul']);
                $_SESSION['daftarFilm'][$key]->setGenre($_POST['genre']);
                $_SESSION['daftarFilm'][$key]->setDurasi((int)$_POST['durasi']);
                $_SESSION['daftarFilm'][$key]->setPathGambar($_POST['pathGambar']);
                $pesan = "Berhasil mengupdate film dengan ID $idDicari!";
                $ketemu = true;
                break;
            }
        }
        if (!$ketemu) $pesan = "Gagal: ID Film tidak ditemukan.";
    } 
    elseif ($action == "hapus") {
        $idDicari = $_POST['id'];
        $ketemu = false;
        foreach ($_SESSION['daftarFilm'] as $key => $f) {
            if ($f->getId() == $idDicari) {
                unset($_SESSION['daftarFilm'][$key]); // Hapus data dari array
                $_SESSION['daftarFilm'] = array_values($_SESSION['daftarFilm']); // Susun ulang index array
                $pesan = "Berhasil menghapus film dengan ID $idDicari!";
                $ketemu = true;
                break;
            }
        }
        if (!$ketemu) $pesan = "Gagal: ID Film tidak ditemukan.";
    } 
    elseif ($action == "cari") {
        $idDicari = $_POST['id'];
        foreach ($_SESSION['daftarFilm'] as $f) {
            if ($f->getId() == $idDicari) {
                $hasilCari = $f;
                $pesan = "Data ditemukan!";
                break;
            }
        }
        if (!$hasilCari) $pesan = "Gagal: ID Film tidak ditemukan.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Bioskop DPBO</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .container { display: flex; gap: 20px; flex-wrap: wrap; }
        .box { border: 1px solid #ccc; padding: 15px; border-radius: 5px; background: #f9f9f9; width: 300px; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #aaa; padding: 10px; text-align: left; }
        th { background-color: #eee; }
        input[type="text"], input[type="number"] { width: 90%; padding: 5px; margin-bottom: 10px; }
        button { padding: 5px 15px; background: #007BFF; color: white; border: none; cursor: pointer; }
        button:hover { background: #0056b3; }
        .alert { background: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 15px; }
    </style>
</head>
<body>

    <h1>Sistem Manajemen Bioskop (PHP Web)</h1>

    <?php if ($pesan != "") echo "<div class='alert'>$pesan</div>"; ?>

    <div class="container">
        
        <div class="box">
            <h3>Tambah Data Film</h3>
            <form method="POST">
                <input type="hidden" name="action" value="tambah">
                ID Film: <input type="text" name="id" required>
                Judul: <input type="text" name="judul" required>
                Genre: <input type="text" name="genre" required>
                Durasi (mnt): <input type="number" name="durasi" required>
                Path Gambar lokal: <input type="text" name="pathGambar" placeholder="contoh: poster1.jpg" required>
                <button type="submit">Tambah</button>
            </form>
        </div>

        <div class="box">
            <h3>Update Data Film</h3>
            <form method="POST">
                <input type="hidden" name="action" value="update">
                ID Target: <input type="text" name="id" placeholder="ID yg ingin diubah" required>
                Judul Baru: <input type="text" name="judul" required>
                Genre Baru: <input type="text" name="genre" required>
                Durasi Baru: <input type="number" name="durasi" required>
                Path Gambar Baru: <input type="text" name="pathGambar" required>
                <button type="submit">Update</button>
            </form>
        </div>

        <div style="display: flex; flex-direction: column; gap: 20px;">
        
            <div class="box" style="height: max-content;">
                <h3>Hapus Data Film</h3>
                <form method="POST">
                    <input type="hidden" name="action" value="hapus">
                    ID Film: <input type="text" name="id" required>
                    <button type="submit" style="background: red;">Hapus</button>
                </form>
            </div>

            <div class="box" style="height: max-content;">
                <h3>Cari Data Film</h3>
                <form method="POST">
                    <input type="hidden" name="action" value="cari">
                    ID Film: <input type="text" name="id" required>
                    <button type="submit" style="background: green;">Cari</button>
                </form>
            </div>
        </div>
    </div>

    <?php if ($hasilCari != null): ?>
        <h3>Hasil Pencarian:</h3>
        <ul>
            <li>ID: <?= $hasilCari->getId() ?></li>
            <li>Judul: <?= $hasilCari->getJudul() ?></li>
            <li>Genre: <?= $hasilCari->getGenre() ?></li>
            <li>Durasi: <?= $hasilCari->getDurasi() ?> menit</li>
        </ul>
    <?php endif; ?>

    <h2>Daftar Semua Film</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Genre</th>
            <th>Durasi</th>
            <th>Gambar (Path)</th>
        </tr>
        <?php if (empty($_SESSION['daftarFilm'])): ?>
            <tr><td colspan="5" style="text-align:center;">Data bioskop masih kosong.</td></tr>
        <?php else: ?>
            <?php foreach ($_SESSION['daftarFilm'] as $f): ?>
                <tr>
                    <td><?= $f->getId() ?></td>
                    <td><?= $f->getJudul() ?></td>
                    <td><?= $f->getGenre() ?></td>
                    <td><?= $f->getDurasi() ?> menit</td>
                    <td>
                        <img src="<?= $f->getPathGambar() ?>" alt="Poster" width="80"><br>
                        <small><?= $f->getPathGambar() ?></small>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>

</body>
</html>