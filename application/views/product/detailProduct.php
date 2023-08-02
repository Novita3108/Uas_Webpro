<!-- lihat.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Detail Produk</title>
</head>
<body>
    <h1>Detail Produk</h1>
    <?php
    // Periksa apakah ada parameter productId dalam URL
    if (isset($_GET['productId'])) {
        $productId = $_GET['productId'];

        // Di sini, Anda dapat mengambil data dari database atau sumber lain berdasarkan productId yang dipilih
        // Sebagai contoh, kita akan menampilkan data sesuai dengan productId yang dipilih pengguna

        // Data contoh, Anda dapat menggantinya dengan sumber data sebenarnya
        $data = array(
            1 => array(
                'productId' => 1,
                'productName' => 'Produk 1',
                'price' => 10000,
                'description' => 'Deskripsi produk 1'
            ),
            2 => array(
                'productId' => 2,
                'productName' => 'Produk 2',
                'price' => 20000,
                'description' => 'Deskripsi produk 2'
            ),
            3 => array(
                'productId' => 3,
                'productName' => 'Produk 3',
                'price' => 30000,
                'description' => 'Deskripsi produk 3'
            )
            // Tambahkan lebih banyak data dengan mengganti productId dan nilainya sesuai kebutuhan
        );

        if (isset($data[$productId])) {
            echo "<p>Produk ID: " . $data[$productId]['productId'] . "</p>";
            echo "<p>Nama Produk: " . $data[$productId]['productName'] . "</p>";
            echo "<p>Harga: " . $data[$productId]['price'] . "</p>";
            echo "<p>Deskripsi: " . $data[$productId]['description'] . "</p>";
        } else {
            echo "<p>Produk tidak ditemukan</p>";
        }
    } else {
        echo "<p>Tidak ada productId yang dipilih</p>";
    }
    ?>
    <a href="index.php">Kembali ke Daftar Produk</a>
</body>
</html>
