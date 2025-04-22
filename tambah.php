<?php
include 'functions.php';

$pesan = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $indo = strtolower(trim($_POST['indo']));
    $dayak = strtolower(trim($_POST['dayak']));

    if ($indo && $dayak) {
        $kamus = load_kamus();
        if (!isset($kamus[$indo])) {
            save_kamus($indo, $dayak);
            $pesan = "✅ Kata berhasil ditambahkan!";
        } else {
            $pesan = "⚠️ Kata sudah ada dalam kamus.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Kata - Kamus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f4f6f8;
            padding: 20px;
        }

        .container {
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        input[type="text"] {
            padding: 12px 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
        }

        button {
            padding: 12px;
            border: none;
            background-color: #007bff;
            color: white;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        .pesan {
            margin-top: 15px;
            padding: 12px;
            background-color: #e7f3e7;
            border-left: 5px solid #4CAF50;
            border-radius: 6px;
            color: #333;
            font-size: 15px;
        }

        .kembali-link {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #007bff;
            font-size: 14px;
        }

        .kembali-link:hover {
            text-decoration: underline;
        }

        @media (max-width: 600px) {
            .container {
                padding: 20px;
            }

            h2 {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Tambah Kata Baru</h2>
    <form method="post">
        <input type="text" name="indo" placeholder="Bahasa Indonesia" required>
        <input type="text" name="dayak" placeholder="Bahasa Dayak" required>
        <button type="submit">Tambah ke Kamus</button>
    </form>

    <?php if ($pesan): ?>
        <div class="pesan"><?= htmlspecialchars($pesan) ?></div>
    <?php endif; ?>

    <a href="index.php" class="kembali-link">← Kembali ke Kamus</a>
</div>

</body>
</html>
