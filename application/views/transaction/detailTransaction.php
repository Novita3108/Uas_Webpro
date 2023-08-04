

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">

                    <?php
                    if($this->session->flashdata('edit')=="sukses"){
                        echo '<div class="alert alert-success">Data transaction berhasil di edit</div>';
                    }elseif($this->session->flashdata('edit')=="gagal"){
                        echo '<div class="alert alert-danger">Data transaction gagal di edit</div>';
                    }
                    ?>

                    <?php
                    if($this->session->flashdata('hapus')=="sukses"){
                        echo '<div class="alert alert-success">Data transaction berhasil di hapus</div>';
                    }elseif($this->session->flashdata('hapus')=="gagal"){
                        echo '<div class="alert alert-danger">Data transaction gagal di hapus</div>';
                    }
                    ?>

                        <h1 class="m-0">Detail transaction</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Detail transaction</li>
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
                            <p><?= $transaction->title ?></p>
                            <p>Quantity: <br> <?php echo $transaction->quantity; ?></p>
                            <p>Price Per Quantity: <br> <?php echo $transaction->price_per_quantity; ?></p>
                            <p>Net Sales: <br> <?php echo $transaction->net_sales; ?></p>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    