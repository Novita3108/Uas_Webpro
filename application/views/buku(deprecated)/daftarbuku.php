

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
            
                   

                    <?php
                    if($this->session->flashdata('edit')=="sukses"){
                        echo '<div class="alert alert-success">Data buku berhasil di edit</div>';
                    }elseif($this->session->flashdata('edit')=="gagal"){
                        echo '<div class="alert alert-danger">Data buku gagal di edit</div>';
                    }
                    ?>

                    <?php
                    if($this->session->flashdata('hapus')=="sukses"){
                        echo '<div class="alert alert-success">Data buku berhasil di hapus</div>';
                    }elseif($this->session->flashdata('hapus')=="gagal"){
                        echo '<div class="alert alert-danger">Data buku gagal di hapus</div>';
                    }
                    ?>


                        <h1 class="m-0">List Buku</h1>
                        <a href="buku/tambah/"class="btn btn-primary"> Tambah buku </a>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">List Buku</li>
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
                                <th>Kode Buku</th>
                                <th>Judul Buku</th>
                                <th>Kategori</th>
                                <th>Sampul</th>
                                <th>action</th>
                            </tr>
                        </thead>

                        <body>
                            <?php
                            $no = 1;
                            foreach ($daftar_buku as $buku) { ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $buku->kode_buku; ?> </td>
                                    <td><?php echo $buku->judul_buku; ?></td>
                                    <td><?php echo $buku->nama_kategori; ?></td>
                                    <td><?php echo $buku->cover_buku; ?></td>
                                    <td class="actions">
                                        <a href="buku/lihat/<?php echo $buku->kode_buku; ?>">Lihat</a>
                                        <a href="buku/edit/<?php echo $buku->kode_buku; ?>" class="edit">Edit</a>
                                        <a href="buku/hapus/<?php echo $buku->kode_buku; ?>" onclick="return confirm('Yakin dihapus?')"class="delete">Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

