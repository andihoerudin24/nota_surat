<div class="col-md-6">
    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Edit bidang</h3>
        </div>
        <?php
        echo form_open('Seksi/edit', 'class=form-horizontal');
        echo form_hidden('id_seksi', $seksi['id_seksi']);
        ?>
        <div class="box-body">
            <div class="form-group">
                <label class="col-sm-2 control-label">Nama seksi</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_seksi" value="<?php echo $seksi['nama_seksi'] ?>" id="inputEmail3">
                </div>


                <div class="col-sm-10">
                    <label>Nama bidang</label>
                    <?php echo cmb_dinamis('id_bidang', 'tbl_bidang', 'nama_bidang', 'id_bidang', $seksi['id_bidang']) ?> 
                </div>
            </div>
            <?php echo anchor('Seksi', 'Kembali', array('class' => 'btn btn-info')) ?>
            <button type="submit" name="submit" class="btn btn-info pull-right">Update</button>

        </div>


        <?php echo form_close() ?>
    </div>
</div>
