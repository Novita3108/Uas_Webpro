<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <section class="content">
                        <div class="row">
                            <h2><?php echo $product->productTitle; ?><h2>
                        </div>
                    </section>

                    <form class="form horizontal" action="<?= base_url(); ?>product/save/<?= $product->productId ?>" method="post">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text"  required class="form-control" value="<?php echo $product->productTitle; ?>" name="title" />
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" required class="form-control" value="<?php echo $product->productDescription; ?>" name="description" />
                        </div>

                         <div class="form-group">
                            <label>Image</label>
                            <input type="text" required class="form-control" value="<?php echo $product->image; ?>" name="image" />
                        </div>

                         <div class="form-group">
                            <label>Price</label>
                            <input type="text" required class="form-control" value="<?php echo $product->price; ?>" name="price" />
                        </div>

                        <div class="form-group">
                            <label>Category Product</label>
                            <?php 
                                $categories = $this->db->get('tb_category')->result();
                            ?>
                            <select class="form-control" name="category_id">
                                <?php foreach ($categories as $cat): ?>
                                <option value="<?= $cat->id; ?>" <?php if($product->category_id ===  $cat->id) echo "selected"; ?>><?= $cat->title; ?></option>
                                <?php endforeach; ?>
                            </select>
                        <div>

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