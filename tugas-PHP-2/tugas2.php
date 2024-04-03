<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="flex justify-center items-center">
    <main class="my-[50px] w-[35%]">
        <h2 class="text-2xl font-bold mb-5 text-center">Form Nilai</h2>
        <form action="tugas2_post.php" method="post" enctype="multipart/form-data" class="space-y-2 p-5 rounded-lg border-2 border-black">
            <div>
                <label class="block mb-1">Name:</label>
                <input type="text" name="nama_form" placeholder="Input Nama" class="w-full border-gray-300 border p-1 rounded-md">
            </div>
            <div>
                <label class="block mb-1">Username:</label>
                <input type="text" name="username_form" placeholder="Input Username" class="w-full border-gray-300 border p-1 rounded-md">
            </div>
            <div>
                <label class="block mb-1">NIM:</label>
                <input type="text" name="nim_form" placeholder="Input NIM" class="w-full border-gray-300 border p-1 rounded-md">
            </div>
            <div>
                <label class="block mb-1">Nilai:</label>
                <input type="text" name="nilai_form" placeholder="Input Nilai" class="w-full border-gray-300 border p-1 rounded-md mb-5">
            </div>
            <button type=submit name="submit" class="w-full bg-blue-400 text-white py-0.5 rounded-md">Submit</button>
        </form>
    </main>
</body>

</html>