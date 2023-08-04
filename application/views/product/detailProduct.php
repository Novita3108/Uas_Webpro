

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">

                    <?php
                    if($this->session->flashdata('edit')=="sukses"){
                        echo '<div class="alert alert-success">Data product berhasil di edit</div>';
                    }elseif($this->session->flashdata('edit')=="gagal"){
                        echo '<div class="alert alert-danger">Data product gagal di edit</div>';
                    }
                    ?>

                    <?php
                    if($this->session->flashdata('hapus')=="sukses"){
                        echo '<div class="alert alert-success">Data product berhasil di hapus</div>';
                    }elseif($this->session->flashdata('hapus')=="gagal"){
                        echo '<div class="alert alert-danger">Data product gagal di hapus</div>';
                    }
                    ?>


                        <h1 class="m-0">Detail product</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Detail product</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <img src="<?php echo $product->image; ?>" width="100px" alt="">
                            <p>Title: <br> <?php echo $product->productTitle; ?> </p>
                            <p>Description: <br> <?php echo $product->productDescription; ?></p>
                            <p>Price: <br> <?php echo $product->price; ?></p>
                            <p>Category: <br> <?php echo $product->categoryName; ?></p>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    
    <body>
    <h1>Detail Produk</h1>
    <?php
    // Periksa apakah ada parameter productId dalam URL
    if (isset($_GET['product'])) {
        $productId = $_GET['product'];

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
            echo "<p>Produk ID: " . $data[$productId]['product'] . "</p>";
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

