<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <section class="content">
                        <div class="row">
                            <h2><?php echo $category->title; ?><h2>
                        </div>
                    </section>

                    <form class="form horizontal" action="<?= base_url(); ?>category/save/<?= $category->id ?>" method="post">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text"  required class="form-control" value="<?php echo $category->title; ?>" name="title" />
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" required class="form-control" value="<?php echo $category->description; ?>" name="description" />
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