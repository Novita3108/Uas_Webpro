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

                    <form class="form horizontal" action="<?= base_url(); ?>buku/simpan_edit" method="post">
                        <div class="form-group">
                            <label>kode_buku</label>
                            <input type="text" required class="form-control" value="<?php echo $buku->kode_buku; ?>" name="kode_buku" />
                        </div>

                        <div class="form-group">
                            <label>judul_buku</label>
                            <input type="text" required class="form-control" value="<?php echo $buku->judul_buku; ?>" name="judul_buku" />
                        </div>

                        <div class="form-group">
                            <label>kategori Buku</label>
                            <?php 
                                $categories = $this->db->get('tkategori')->result();
                            ?>
                            <select class="form-control" name="kategori">
                                <option value="">Pilih</option>
                                <?php foreach ($categories as $cat): ?>
                                <option value="<?= $cat->id_kategori; ?>" <?php if($buku->kategori_buku ==  $cat->id_kategori) echo "selected"; ?>><?= $cat->nama_kategori; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div>

                                <div class="form-grup">
                                    <label>sampul Buku</label>
                                    <input type="text" required class="form-control" value="<?= $buku->cover_buku ?>" placeholder="masukan sampul Buku" name="sampul" />
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">simpan</button>
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