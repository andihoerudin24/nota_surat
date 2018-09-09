<div class="col-md-6">
    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Edit prihal</h3>
        </div>
        <?php echo form_open('Prihal/edit','class=form-horizontal');
               echo form_hidden('id_prihal',$prihal['id_prihal']); 
                ?>
            <div class="box-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nama prihal</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_kategori" value="<?php echo $prihal['nama_prihal'] ?>" id="inputEmail3">
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <?php echo anchor('Prihal', 'Kembali', array('class' => 'btn btn-info')) ?>
                <button type="submit" name="submit" class="btn btn-info pull-right">Update</button>
            </div>
        <?php echo form_close() ?>
    </div>
