<div class="col-md-6">
    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Edit bidang</h3>
        </div>
        <?php
        echo form_open('Bidang/edit', 'class=form-horizontal');
        echo form_hidden('id_bidang', $bidang['id_bidang']);
        ?>
        <div class="box-body">
            <div class="form-group">
                <label class="col-sm-2 control-label">Nama bidang</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_bidang" value="<?php echo $bidang['nama_bidang'] ?>" id="inputEmail3">
                </div>
            </div>
            <?php echo anchor('Bidang', 'Kembali', array('class' => 'btn btn-info')) ?>
            <button type="submit" name="submit" class="btn btn-info pull-right">Update</button>

        </div>


        <?php echo form_close() ?>
    </div>
