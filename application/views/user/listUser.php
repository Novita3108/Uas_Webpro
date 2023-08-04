

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">

                    <?php
                    if($this->session->flashdata('edit')=="sukses"){
                        echo '<div class="alert alert-success">Data user berhasil di edit</div>';
                    }elseif($this->session->flashdata('edit')=="gagal"){
                        echo '<div class="alert alert-danger">Data user gagal di edit</div>';
                    }
                    ?>

                    <?php
                    if($this->session->flashdata('hapus')=="sukses"){
                        echo '<div class="alert alert-success">Data user berhasil di hapus</div>';
                    }elseif($this->session->flashdata('hapus')=="gagal"){
                        echo '<div class="alert alert-danger">Data user gagal di hapus</div>';
                    }
                    ?>
                        <h1 class="m-0">List user</h1>
                        <a href="user/add/"class="btn btn-primary"> Tambah user </a>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">List user</li>
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
                                <th>Username</th>
                                <th>Email</th>
                                <th>action</th>
                            </tr>
                        </thead>

                        <body>
                            <?php
                            $no = 1;
                            foreach ($users as $user) : ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $user->username; ?> </td>
                                <td><?php echo $user->email; ?> </td>
                                <td class="actions">
                                    <a href="user/detail/<?php echo $user->id; ?>">Lihat</a>
                                    <a href="user/edit/<?php echo $user->id; ?>" class="edit">Edit</a>
                                    <a href="user/delete/<?php echo $user->id; ?>" onclick="return confirm('Yakin dihapus?')"class="delete">Delete</a>
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

