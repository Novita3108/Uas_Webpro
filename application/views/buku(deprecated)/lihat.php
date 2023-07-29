

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Detail Buku <?php echo $buku->judul_buku; ?></h1>
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
                    <div class="col-md-12">
                        <table class="table table-bordered" id="book" width="100%" cellspacing="02" cellpadding="">
                            <tr>
                                <td class="text-bold">Kode Buku </td>
                                <td><?php echo $buku->kode_buku; ?></td>
                            </tr>
                            <tr>
                                <td class="text-bold">Judul Buku</td>
                                <td><?php echo $buku->judul_buku; ?></td>
                            </tr>
                            <tr?>
                                <td class="text-bold">Kategori Buku</td>
                                <td><?php echo $buku->kategori_buku; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-bold">Sampul</td>
                                    <td><?php echo $buku->cover_buku; ?></td>
                                </tr>
                        </table>

                        <a href="<?= base_url() ?>" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    