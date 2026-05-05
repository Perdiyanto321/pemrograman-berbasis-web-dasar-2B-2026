<?php
$artikel = [
    [
        "id" => 1,
        "judul" => "Belajar HTML Pertama Kali",
        "tanggal" => "2023-01-10",
        "isi" => "Ini adalah pengalaman pertama belajar HTML, mulai dari tag dasar sampai membuat halaman sederhana.",
        "gambar" => "gambar 2.jpg",
        "link" => "https://developer.mozilla.org/id/docs/Web/HTML"
    ],
    [
        "id" => 2,
        "judul" => "Error Pertama",
        "tanggal" => "2023-02-15",
        "isi" => "Kesalahan pertama saat coding adalah lupa tanda titik koma, tapi dari situ jadi belajar debugging.",
        "gambar" => "gambar 3.jpg",
        "link" => "https://stackoverflow.com"
    ],
    [
        "id" => 3,
        "judul" => "Belajar PHP Dasar",
        "tanggal" => "2023-03-01",
        "isi" => "Mulai mengenal variabel, array, dan penggunaan GET di PHP.",
        "gambar" => "gambar 4.jpg",
        "link" => "https://www.php.net/docs.php"
    ]
];


$kutipan = [
    "Coding itu bukan soal pintar, tapi soal konsisten.",
    "Error adalah jalan menuju solusi.",
    "Semakin sering gagal, semakin jago.",
    "Belajar coding = belajar sabar."
];



$random_kutipan = $kutipan[array_rand($kutipan)];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blog</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>
    <body>
        <div class="w-full mx-auto p-10 bg-gradient-to-b h-auto from-emerald-500 to-teal-600">
            <div class="mb-5 text-center text-white font-bold">
                <a href="timeline.php">Home</a> |
                <a href="index.php">Profile</a> |
                <a href="blog.php">Blog</a>
            </div>
            <h2 class="text-center text-3xl text-teal-900 font-bold">Daftar Artikel</h2>
            <div class="flex p-6 justify-between text-teal-900 font-semibold ">
                <?php foreach ($artikel as $a): ?>
                    <a href="?id=<?php echo $a['id']; ?>">
                        <?php echo $a['judul']; ?>
                    </a>
                <?php endforeach; ?>
            </div>
            <hr>
            <h2 class="text-center text-3xl text-teal-900 font-bold mt-5">Detail Artikel</h2>
            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];

                foreach ($artikel as $a) {
                    if ($a['id'] == $id) {
                        echo "<h3 class='text-center mt-5 text-2xl font-semibold text-teal-900'>" . $a['judul'] . "</h3>";
                        echo "<p class='text-center text-sm text-gray-700'>Tanggal: " . $a['tanggal'] . "</p>";

                        echo "<p class='text-center mt-5 text-lg text-white'>" . $a['isi'] . "</p>";

                        echo "<div class='flex justify-center mt-5'>
                                <img src='img/" . $a['gambar'] . "' class='w-60 rounded-lg shadow'>
                            </div>";

                        echo "<p class='text-center mt-5'>
                                <a href='" . $a['link'] . "' target='_blank' class='text-blue-600 underline'>
                                    Baca Referensi
                                </a>
                            </p>";
                    }
                }
            } else {
                echo "<p class='text-center mt-5'>Pilih artikel untuk melihat detail.</p>";
            }
            ?>

            <hr class="mt-5">

            <h3 class="text-center text-xl font-bold text-teal-900 mt-5">💡 Kutipan Hari Ini</h3>
            <p class="text-center italic text-gray-800 mt-2">"<?php echo $random_kutipan; ?>"</p>

        </div>
    </body>
</html>