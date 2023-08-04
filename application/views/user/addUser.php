<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form class="form horizontal" action="<?= base_url(); ?>user/save" method="post">
                       <div class="form-group">
                            <label>username</label>
                            <input type="text"  required class="form-control" value="" name="username" />
                        </div>

                        <div class="form-group">
                            <label>email</label>
                            <input type="text" required class="form-control" value="" name="email" />
                        </div>

                        <div class="form-group">
                            <label>password</label>
                            <input type="text" required class="form-control" value="" name="password" />
                        </div>

                         <button type="submit" class="btn btn-primary my-5">save</button>
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