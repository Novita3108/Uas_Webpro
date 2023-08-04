

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">

                    <?php
                    if($this->session->flashdata('edit') === "sukses"){
                        echo '<div class="alert alert-success">Data transaction berhasil di edit</div>';
                    }elseif($this->session->flashdata('edit')=="gagal"){
                        echo '<div class="alert alert-danger">Data transaction gagal di edit</div>';
                    }
                    ?>

                    <?php
                    if($this->session->flashdata('delete') === "delete"){
                        echo '<div class="alert alert-success">Data transaction berhasil di hapus</div>';
                    }elseif($this->session->flashdata('hapus')=="gagal"){
                        echo '<div class="alert alert-danger">Data transaction gagal di hapus</div>';
                    }
                    ?>


                        <h1 class="m-0">List transaction</h1>
                        <a href="transaction/add/"class="btn btn-primary"> Tambah transaction </a>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">List transaction</li>
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
                     <!-- // product_id, quantity, price_per_quantity, net_sales -->

                    <table class="table table-bordered" id="book" border="1" cellspacing="5px" cellpadding="10px">
                        <thead class="bg-primary">
                            <tr>
                                <th>No</th>
                                <th>Quantity</th>
                                <th>Price Per Quantity</th>
                                <th>Net Sales</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <body>
                            <?php
                            $no = 1;
                            foreach ($transactions as $transaction) : ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $transaction->quantity; ?></td>
                                <td><?php echo $transaction->price_per_quantity; ?></td>
                                <td><?php echo $transaction->net_sales; ?></td>
                                <td class="actions">
                                    <a href="transaction/detail/<?php echo $transaction->transactionId; ?>">Lihat</a> <br>
                                    <a href="transaction/edit/<?php echo $transaction->transactionId; ?>" class="edit">Edit</a>  <br>
                                    <a href="transaction/delete/<?php echo $transaction->transactionId; ?>" onclick="return confirm('Yakin dihapus?')"class="delete">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>

                    </table>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    
   
