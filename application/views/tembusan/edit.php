<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-8">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">TAMBAH TEMBUSAN SURAT</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <?php echo form_open('Tembusan/edit') ?>
                <?php echo form_hidden('id_tembusan',$tembusan['id_tembusan']) ?>
                <div class="box-body">
                    <div class="form-group">
                        <label>Nomor Nota</label>
                        <?php echo cmb_dinamis('id_nota', 'tbl_nota', 'nomor', 'id_nota',$tembusan['id_nota']) ?>
                    </div>
                    <div class="form-group">
                        <label>Nama Bidang</label>
                        <?php echo cmb_dinamis('id_bidang', 'tbl_bidang', 'nama_bidang', 'id_bidang',$tembusan['id_bidang']) ?>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                    <?php echo anchor('Tembusan', 'Kembali', array('class' => 'btn btn-danger')) ?>
                </div>
                <?php echo form_close(); ?>
            </div>
            <!-- /.box -->
        </div>
    </div>

</section>
<!-- /.content -->

