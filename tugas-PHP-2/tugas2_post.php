<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <main class="flex justify-center mt-16">
        <section class="w-4/12 border-2 border-black p-5 rounded-lg text-center">
            <?php
            /* 
                Kondisi Nilai Yang dikeluarkan
                >= 80          : Selamat kamu lulus dengan nilai A (Tulisan Biru)
                < 80 dan >= 70 : Selamat kamu lulus dengan nilai B (Tulisan Biru)
                < 70 dan >= 60 : Selamat kamu lulus dengan nilai C (Tulisan Biru)
                < 60 dan >= 50 : Kamu gagal dengan nilai D (Tulisan Merah)
                < 50           : Kamu gagal dengan nilai E (Tulisan Merah)
            */
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nama = $_POST["nama_form"];
                $username = $_POST["username_form"];
                $nim = $_POST["nim_form"];
                $nilai = $_POST["nilai_form"];
            ?>

                <h1 class="mb-4 text-2xl font-bold">Data Mahasiswa</h1>
                <div class="flex flex-col justify-between mb-2">
                    <div class="flex justify-between mb-2">
                        <p class="mr-4">Name:</p>
                        <p class="font-bold text-xl"><?php echo $nama; ?></p>
                    </div>
                    <div class="flex justify-between mb-2">
                        <p class="mr-4">Username:</p>
                        <p class="font-bold text-xl"><?php echo $username; ?></p>
                    </div>
                    <div class="flex justify-between mb-2">
                        <p class="mr-4">NIM:</p>
                        <p class="font-bold text-xl"><?php echo $nim; ?></p>
                    </div>
                    <div class="flex justify-between mb-2">
                        <p class="mr-4">Score:</p>
                        <p class="font-bold text-xl"><?php echo $nilai; ?></p>
                    </div>
                </div>

                <?php
                if ($nilai >= 80) {
                    echo "<p class='text-xl text-blue-500'>Selamat kamu lulus dengan nilai A</p>";
                } elseif ($nilai >= 70) {
                    echo "<p class='text-xl text-blue-500'>Selamat kamu lulus dengan nilai B</p>";
                } elseif ($nilai >= 60) {
                    echo "<p class='text-xl text-blue-500'>Selamat kamu lulus dengan nilai C</p>";
                } elseif ($nilai >= 50) {
                    echo "<p class='text-xl text-red-500'>Kamu gagal dengan nilai D</p>";
                } else {
                    echo "<p class='text-xl text-red-500'>Kamu gagal dengan nilai E</p>";
                }
                ?>
            <?php } ?>
        </section>
    </main>
</body>

</html>
