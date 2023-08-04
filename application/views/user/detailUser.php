

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">

                    <?php
                    if($this->session->flashdata('edit')=="sukses"){
                        echo '<div class="alert alert-success">Data User berhasil di edit</div>';
                    }elseif($this->session->flashdata('edit')=="gagal"){
                        echo '<div class="alert alert-danger">Data User gagal di edit</div>';
                    }
                    ?>

                    <?php
                    if($this->session->flashdata('delete') == "delete"){
                        echo '<div class="alert alert-success">Data User berhasil di hapus</div>';
                    }elseif($this->session->flashdata('delete') == "failed"){
                        echo '<div class="alert alert-danger">Data User gagal di hapus</div>';
                    }
                    ?>


                        <h1 class="m-0">Detail User</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Detail User</li>
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
                            <p>username: <br> <?php echo $user->username; ?> </p>
                            <p>email: <br> <?php echo $user->email; ?></p>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

