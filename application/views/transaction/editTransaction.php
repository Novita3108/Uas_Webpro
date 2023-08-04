<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <section class="content">
                        <div class="row">
                            <h2>#<?php echo $transaction->id; ?><h2>
                        </div>
                    </section>

                    <form class="form horizontal" action="<?= base_url(); ?>transaction/save/<?= $transaction->transactionId ?>" method="post">

                         <div class="form-group">
                            <label>Product</label>
                            <?php 
                                $products = $this->db->get('tb_product')->result();
                            ?>
                            <select class="form-control" name="product_id">
                                <?php foreach ($products as $product): ?>
                                <option value="<?= $product->id; ?>" <?php if($transaction->product_id ===  $product->id) echo "selected"; ?>><?= $product->title; ?></option>
                                <?php endforeach; ?>
                            </select>
                        <div>

                        <div class="form-group">
                            <label>Quantity</label>
                            <input type="text"  required class="form-control" value="<?php echo $transaction->quantity; ?>" name="quantity" />
                        </div>

                        <div class="form-group">
                            <label>Price per Quantity</label>
                            <input type="text" required class="form-control" value="<?php echo $transaction->price_per_quantity; ?>" name="price_per_quantity" />
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