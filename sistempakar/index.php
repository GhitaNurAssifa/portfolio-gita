<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramalan Lahir</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&family=Open+Sans&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Open Sans', sans-serif;
            background: linear-gradient(to right, #1e1e2f, #2c2c4c);
            background-image: url('https://i.ibb.co/tK9zBPt/stars-bg.jpg');
            background-size: cover;
            background-attachment: fixed;
            color: white;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .form-box {
            background-color: rgba(0, 0, 0, 0.75);
            padding: 30px 40px;
            border-radius: 20px;
            box-shadow: 0 0 25px rgba(255, 255, 255, 0.2);
            width: 100%;
            max-width: 500px;
            text-align: center;
        }

        h2 {
            font-family: 'Cinzel', serif;
            font-size: 28px;
            margin-bottom: 10px;
            color: #ffd700;
        }

        .subtitle {
            font-size: 14px;
            color: #ccc;
            margin-bottom: 25px;
        }

        form label {
            display: block;
            text-align: left;
            margin-top: 15px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: none;
            outline: none;
            margin-bottom: 10px;
            background-color: #2e2e3f;
            color: white;
            font-size: 14px;
        }

        button[type="submit"] {
            width: 100%;
            background-color: #ffd700;
            color: #000;
            padding: 12px;
            border: none;
            border-radius: 10px;
            font-weight: bold;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #e6c200;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h2>🔮 Ramalan Lahir Anda</h2>
            <p class="subtitle">Masukkan data kelahiranmu dan temukan rahasia di baliknya!</p>
            <form action="proses.php" method="POST">
                <label>Hari Lahir:</label>
                <select name="hari" required>
                    <option value="">Pilih Hari</option>
                    <option>Senin</option>
                    <option>Selasa</option>
                    <option>Rabu</option>
                    <option>Kamis</option>
                    <option>Jumat</option>
                    <option>Sabtu</option>
                    <option>Minggu</option>
                </select>

                <label>Tanggal:</label>
                <input type="number" name="tanggal" min="1" max="31" required>

                <label>Bulan:</label>
                <select name="bulan" required>
                    <option value="">Pilih Bulan</option>
                    <option>Januari</option>
                    <option>Februari</option>
                    <option>Maret</option>
                    <option>April</option>
                    <option>Mei</option>
                    <option>Juni</option>
                    <option>Juli</option>
                    <option>Agustus</option>
                    <option>September</option>
                    <option>Oktober</option>
                    <option>November</option>
                    <option>Desember</option>
                </select>

                <label>Tahun:</label>
                <input type="number" name="tahun" min="1900" max="2099" required>

                <button type="submit">🔍 Lihat Ramalan</button>
            </form>
        </div>
    </div>
</body>
</html>
