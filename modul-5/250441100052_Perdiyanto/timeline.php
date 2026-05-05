<!DOCTYPE html>
<html>
<head>
    <title>Timeline Belajar Coding</title>
    <style>
        body {
            font-family: Arial;
            background: #2ecc71;
            padding: 20px;
        }

        .container {
            max-width: 900px;
            margin: auto;
        }

        h2 {
            text-align: center;
        }

        .timeline {
            position: relative;
            margin: 40px 0;
        }

        .timeline::before {
            content: "";
            position: absolute;
            left: 50%;
            top: 0;
            width: 4px;
            height: 100%;
            background: yellow;
            transform: translateX(-50%);
        }

        .itemleft {
            width: 45%;
            position: relative;
            margin-bottom: 30px;
            left: 0;
        }

        .itemright {
            width: 45%;
            position: relative;
            margin-bottom: 30px;
            left: 55%;
        }

        .card {
            background: white;
            padding: 15px;
            border-radius: 10px;
        }

        .highlight {
            color: red;
            font-weight: bold;
        }

        .nav {
            margin-top: 20px;
            text-align: center;
        }

        .nav a {
            text-decoration: none;
            padding: 10px 15px;
            background: green;
            color: white;
            border-radius: 5px;
            margin: 5px;
        }

        .nav a:hover {
            background: #2980b9;
        }
    </style>
</head>

    <body>
        <?php
            $timeline = [
                ["tahun" => "2022", "judul" => "Masuk Kuliah", "deskripsi" => "Mulai perjalanan sebagai mahasiswa IT."],
                ["tahun" => "2023", "judul" => "Belajar HTML & CSS", "deskripsi" => "Mengenal dasar pembuatan website."],
                ["tahun" => "2023", "judul" => "Belajar JavaScript", "deskripsi" => "Mulai memahami interaksi pada website."],
                ["tahun" => "2024", "judul" => "Belajar PHP", "deskripsi" => "Mulai belajar backend di praktikum."],
                ["tahun" => "2024", "judul" => "Proyek Pertama", "deskripsi" => "Membuat website sederhana dengan PHP."]
            ];

            function highlightTahun($tahun) {
                if ($tahun == "2024") {
                    return "highlight";
                }  else {
                    return "";
                }
            }

            function posisiItem($index) {
                if ($index % 2 == 0) {
                    return "itemleft";
                } else {
                    return "itemright";
                }
            }
        ?>
        <div class="container">
            <h2>Timeline Perjalanan Belajar Coding</h2>

            <div class="timeline">
                <?php foreach ($timeline as $index => $data): ?>
                    <div class="<?php echo posisiItem($index); ?>">
                        <div class="card">
                            <span class="<?php echo highlightTahun($data['tahun']); ?>">
                                <?php echo $data['tahun']; ?>
                            </span>
                            <h4><?php echo $data['judul']; ?></h4>
                            <p><?php echo $data['deskripsi']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="nav">
                <a href="index.php">← Kembali ke Profil</a>
                <a href="blog.php">Menuju Blog Developer →</a>
            </div>
        </div>
    </body>
</html>