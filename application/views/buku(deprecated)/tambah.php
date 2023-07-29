<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <section class="content">
                        <div class="row">
                            <h2><?php echo $judul; ?><h2>
                        </div>
                    </section>

                    <form class="form horizontal" action="<?= base_url(); ?>buku/simpan" method="post">
                        <div class="form-group">
                            <label>Kode Buku</label>
                            <input type="text" required class="form-control" name="kode_buku" />
                        </div>

                        <div class="form-group">
                            <label>Judul Buku</label>
                            <input type="text" required class="form-control" name="judul_buku" />
                        </div>

                        <div class="form-group">
                            <?php 
                                $categories = $this->db->get('tkategori')->result();
                            ?>
                            <label>Kategori Buku</label>
                            <select class="form-control" name="kategori">
                                <?php foreach ($categories as $cat): ?>
                                <option value="<?= $cat->id_kategori; ?>" selected><?= $cat->nama_kategori; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div>

                                <div class="form-grup">
                                    <label>Sampul Buku</label>
                                    <input type="text" required class="form-control" placeholder="masukan sampul Buku"
                                        name="sampul" />
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>
</div>
<!-- /.content-wrapper -->