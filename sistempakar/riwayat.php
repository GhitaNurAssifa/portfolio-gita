<?php
include 'koneksi.php';
$result = mysqli_query($koneksi, "SELECT * FROM riwayat_ramalan ORDER BY waktu_input DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Riwayat Ramalan</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&family=Open+Sans&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Open Sans', sans-serif;
            background: linear-gradient(to right, #1e1e2f, #2c2c4c);
            background-image: url('https://i.ibb.co/tK9zBPt/stars-bg.jpg');
            background-size: cover;
            background-attachment: fixed;
            color: white;
            padding: 40px;
        }

        .container {
            background-color: rgba(0, 0, 0, 0.75);
            padding: 30px;
            border-radius: 15px;
            max-width: 1000px;
            margin: auto;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);
        }

        h2 {
            font-family: 'Cinzel', serif;
            text-align: center;
            color: #ffd700;
            margin-bottom: 25px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            color: white;
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #ffd700;
            color: #000;
        }

        tr:nth-child(even) {
            background-color: rgba(255, 255, 255, 0.05);
        }

        tr:hover {
            background-color: rgba(255, 255, 255, 0.15);
        }

        a.back-btn {
            display: inline-block;
            margin-top: 25px;
            padding: 10px 20px;
            background-color: #ffd700;
            color: black;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        a.back-btn:hover {
            background-color: #e6c200;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>📜 Riwayat Ramalan Pengguna</h2>
        <table>
            <tr>
                <th>Tanggal</th>
                <th>Hari</th>
                <th>Bulan</th>
                <th>Tahun</th>
                <th>Hasil Ramalan</th>
            </tr>
            <?php while($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= htmlspecialchars($row['tanggal']) ?></td>
                <td><?= htmlspecialchars($row['hari']) ?></td>
                <td><?= htmlspecialchars($row['bulan']) ?></td>
                <td><?= htmlspecialchars($row['tahun']) ?></td>
                <td><?= htmlspecialchars($row['hasil']) ?></td>
            </tr>
            <?php endwhile; ?>
        </table>
        <center><a href="index.html" class="back-btn">⟵ Kembali ke Halaman Utama</a></center>
    </div>
</body>
</html>
