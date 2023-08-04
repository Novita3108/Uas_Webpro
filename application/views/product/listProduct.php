

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">

                    <?php
                    if($this->session->flashdata('edit') === "sukses"){
                        echo '<div class="alert alert-success">Data product berhasil di edit</div>';
                    }elseif($this->session->flashdata('edit')=="gagal"){
                        echo '<div class="alert alert-danger">Data product gagal di edit</div>';
                    }
                    ?>

                    <?php
                    if($this->session->flashdata('delete') === "delete"){
                        echo '<div class="alert alert-success">Data product berhasil di hapus</div>';
                    }elseif($this->session->flashdata('hapus')=="gagal"){
                        echo '<div class="alert alert-danger">Data product gagal di hapus</div>';
                    }
                    ?>


                        <h1 class="m-0">List product</h1>
                        <a href="product/add/"class="btn btn-primary"> Tambah product </a>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">List product</li>
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

                    <table class="table table-bordered" id="book" border="1" cellspacing="5px" cellpadding="10px">
                        <thead class="bg-primary">
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <body>
                            <?php
                            $no = 1;
                            foreach ($products as $product) : ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $product->productTitle; ?> </td>
                                <td><?php echo $product->productDescription; ?></td>
                                <td>
                                    <img src="<?php echo $product->image; ?>" width="100px" alt="">
                                </td>
                                <td><?php echo $product->price; ?></td>
                                <td><?php echo $product->categoryName; ?></td>
                                <td class="actions">
                                    <a href="product/detail/<?php echo $product->productId; ?>">Lihat</a> <br>
                                    <a href="product/edit/<?php echo $product->productId; ?>" class="edit">Edit</a>  <br>
                                    <a href="product/delete/<?php echo $product->productId; ?>" onclick="return confirm('Yakin dihapus?')"class="delete">Delete</a>
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


    
   
