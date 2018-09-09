<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <!-- /.box-header -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Bidang</h3>
                    <hr><br><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Tambah
                    </button>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Bidang</th>
                                <th>Aksi Edit</th>
                                <th>Aksi Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($bidang as $row): ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $row->nama_bidang; ?></td>
                                    <td><?php echo anchor('Bidang/edit/' . $row->id_bidang, 'Edit', array('class' => 'btn btn-info')) ?></td>
                                    <td><?php echo anchor('Bidang/Hapus/' . $row->id_bidang, 'Hapus', array('class' => 'btn btn-danger')) ?>

                                </tr>
                                <?php $no++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
            <!-- /.box-body -->
        </div>
    </div>
</div>
</section>
<!-- /.box -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Bidang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('Bidang/add') ?>
                <div class="col-sm-12">
                    <span class="icon-picture">
                        <label class="icon-archive">Nama Bidang</label>
                        <input type="text" autofocus="TRUE" name="nama_bidang" required="" class="form-control">

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

