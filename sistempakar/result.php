<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Ramalan Kelahiran</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&family=Open+Sans&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Open Sans', sans-serif;
            background: linear-gradient(to bottom, #1f1f2f, #2c2c4c);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('https://i.ibb.co/tK9zBPt/stars-bg.jpg');
            background-size: cover;
            background-position: center;
        }

        .result-box {
            background-color: rgba(0, 0, 0, 0.75);
            padding: 40px 30px;
            border-radius: 15px;
            box-shadow: 0 0 25px rgba(255, 255, 255, 0.2);
            max-width: 600px;
            text-align: center;
        }

        h2 {
            font-family: 'Cinzel', serif;
            font-size: 32px;
            margin-bottom: 15px;
            color: #ffd700;
        }

        p {
            font-size: 18px;
            line-height: 1.7;
        }

        .btn-kembali {
            margin-top: 30px;
            padding: 12px 25px;
            background-color: #ffd700;
            color: #000;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .btn-kembali:hover {
            background-color: #e6c200;
        }
    </style>
</head>
<body>
    <div class="result-box">
        <h2>🔮 Ramalan Kelahiran Anda</h2>
        <p>
            <?php
            if (isset($_GET['hasil'])) {
                echo nl2br(htmlspecialchars($_GET['hasil']));
            } else {
                echo "Hasil ramalan tidak tersedia.";
            }
            ?>
        </p>
        <a href="index.php" class="btn-kembali">🔙 Kembali</a>
    </div>
</body>
</html>
