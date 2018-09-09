
<div class="col-md-12">
    <div class="box-header">
        <h3 class="box-title">Data perihal</h3>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Tambah
        </button>


    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>nama perihal</th>
                    <th colspan="2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($prihal as $row):
                    ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row->nama_prihal ?></td>
                        <td><?php echo anchor('Prihal/edit/' . $row->id_prihal, 'Edit', array('class' => 'btn btn-info')) ?></td>
                        <td><?php echo anchor('Prihal/Hapus/' . $row->id_prihal, 'Hapus', array('class' => 'btn btn-danger')) ?></td>
                    </tr>
                    <?php $no++; ?>
<?php endforeach; ?>
            </tbody>

        </table>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah prihal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('Prihal/add') ?>
                <div class="col-sm-12">
                    <span class="icon-picture">
                       <label class="icon-archive">Nama Prihal</label>
                        <input type="text" autofocus="TRUE" name="nama_kategori" required="" class="form-control">
                        
                    </span>
                </div>
            </div>
            <hr>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Tutup</button>
                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            </div>

            <?php echo form_close(); ?>
        </div>
    </div>
</div>

