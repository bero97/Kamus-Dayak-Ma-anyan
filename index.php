<?php
include 'functions.php';
$kamus = load_kamus();

$kata = '';
$hasil = '';
$arah = 'indo-dayak';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kata = strtolower(trim($_POST['kata']));
    $arah = $_POST['arah'];

    if ($arah == 'indo-dayak') {
        $hasil = $kamus[$kata] ?? 'Kata tidak ditemukan.';
    } else {
        $hasil = array_search($kata, $kamus);
        $hasil = $hasil ? $hasil : 'Kata tidak ditemukan.';
    }
}
?>

<?php include 'header.php'; ?>

<div class="container">
    <h2>Kamus Indonesia ↔ Dayak Ma'anyan</h2>
    <form method="post">
        <input type="text" name="kata" value="<?= htmlspecialchars($kata) ?>" placeholder="Masukkan kata..." required>
        <select name="arah">
            <option value="indo-dayak" <?= $arah == 'indo-dayak' ? 'selected' : '' ?>>Indonesia → Dayak</option>
            <option value="dayak-indo" <?= $arah == 'dayak-indo' ? 'selected' : '' ?>>Dayak → Indonesia</option>
        </select>
        <button type="submit">Terjemahkan</button>
    </form>

    <?php if ($hasil): ?>
        <div class="hasil">
            <strong>Hasil:</strong> <?= htmlspecialchars($hasil) ?>
        </div>
    <?php endif; ?>

    <a href="tambah.php" class="tambah-link">➕ Tambah Kata Baru</a>
    <a href="about.php" class="tambah-link">➕ Tentang Aplikasi</a>
</div>

<?php include 'footer.php'; ?>
