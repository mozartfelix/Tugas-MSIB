<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Table</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php
    $lists = [
        [
            "nama_makanan" => "Sate Ayam",
            "harga" => 5000
        ],
        [
            "nama_makanan" => "Sate Padang",
            "harga" => 15000
        ],
        [
            "nama_makanan" => "Nasi Padang",
            "harga" => 25000
        ],
        [
            "nama_makanan" => "Sate Kambing",
            "harga" => 20000
        ],
        [
            "nama_makanan" => "Bakso",
            "harga" => 13000
        ],
    ]
    ?>

    <main class="max-w-2xl mx-auto my-[50px]">
        <h2 class="text-2xl font-medium mb-4 text-center">List Harga Makanan</h2>
        <section class="overflow-x-auto">
            <table class="table-auto w-full border-collapse border border-gray-500">
                <thead>
                    <tr class="bg-blue-300">
                        <td class="border border-gray-500 font-bold text-center px-2 py-2">No</td>
                        <td class="border border-gray-500 font-bold text-center px-4 py-2">Nama Makanan</td>
                        <td class="border border-gray-500 font-bold text-center px-2 py-2">Harga</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lists as $key => $value) : ?>
                        <tr class="<?php echo ($key % 2 == 0) ? 'bg-white' : 'bg-gray-200'; ?> hover:<?php echo ($key % 2 == 0) ? 'bg-gray-300' : 'bg-gray-300'; ?>">
                            <td class="border border-gray-500 px-2 py-2"><?= $key += 1 ?></td>
                            <td class="border border-gray-500 px-4 py-2"><?= $value['nama_makanan'] ?></td>
                            <td class="border border-gray-500 px-2 py-2"><?= $value['harga'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </section>
    </main>
</body>

</html>