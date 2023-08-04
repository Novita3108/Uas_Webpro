        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
    
            <!-- Default to the left -->
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="<?= base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url(); ?>assets/dist/js/adminlte.min.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>

    <script>
<?php
if($this->session->flashdata('simpan')=="sukses"){
    echo 'Swal.fire("Alhamdulillah","Simpan data berhasil brooo","success")';
}elseif($this->session->flashdata('simpan')=="gagal"){
    echo 'Swal.fire("Astagfirullah","Simpan data gagal brooo","eror")';
}
?>

<?php
if($this->session->flashdata('edit')=="sukses"){
    echo 'Swal.fire("Alhamdulillah","Simpan data berhasil brooo","success")';
}elseif($this->session->flashdata('edit')=="gagal"){
    echo 'Swal.fire("Astagfirullah","Simpan data gagal brooo","eror")';
}
?>

<?php
if($this->session->flashdata('hapus')=="sukses"){
    echo 'Swal.fire("Alhamdulillah","Simpan data berhasil brooo","success")';
}elseif($this->session->flashdata('hapus')=="gagal"){
    echo 'Swal.fire("Astagfirullah","Simpan data gagal brooo","eror")';
}
?>
</script>
</body>

</html>