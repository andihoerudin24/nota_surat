<!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Status Nota Dinas</h3>
          </div>
          <!-- /.box-header -->
          <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
       
          <div class="col-xs-12" style="margin-bottom: 30px">
            <div class="col-xs-6"></div>
            <form action="#" method="post">
            <div class="col-xs-3">
                <input type="text" name="f1" class="form-control" placeholder="Cari" value=""/>
            </div>
            <div class="col-xs-1">
                <button type="submit" class="btn btn-primary btn-block glyphicon glyphicon-search" title="Cari"></button>
            </div>
            </form>
            <form action="#" method="post">
              <div class="col-xs-1" style="margin-left:-10px">
                <button type="submit" class="btn btn-warning btn-block glyphicon glyphicon-refresh" title="Tampilkan Semua Surat"></button>
              </div>
            </form>
      <form action="#" method="post">
              <div class="col-xs-1" style="margin-left:-10px">
        <input type="hidden" name="f2" class="form-control" value="1"/>
                <button type="submit" class="btn btn-success btn-block glyphicon glyphicon-thumbs-up" title="Tampilkan Surat yang Belum Disposisi"></button>
              </div>
            </form>
          </div>

          <!-- <button type="submit" class="btn btn-success btn-block glyphicon glyphicon-search" title="Cari"></button> -->
          <!-- /.box-header -->
          <div class="box-body">
            <table class="table table-bordered table-responsive">
              <thead>
                <tr>
                  <th style="width:5%; text-align:center; vertical-align:top">No.</th>
          <th style="width:10%; text-align:center; vertical-align:top">Tanggal Terima</th>
                  <th style="width:20%; text-align:center; vertical-align:top">Tanggal Nota</th>
                  <th style="width:20%; text-align:center; vertical-align:top">No Nota Dinas</th>
                  <th style="width:10%; text-align:center; vertical-align:top">Dari</th>
                  <th style="width:10%; text-align:center; vertical-align:top">Perihal</th>
                  <th style="width:10%; text-align:center; vertical-align:top">Status</th>
                  <th colspan="2" style="width:15%; text-align:center; vertical-align:top">Aksi</th>

                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach ($surat as $row):?>
              <tr>
                  <td style="text-align:center; vertical-align:top"><?php echo $no; ?></td>
          <td style="text-align:center; vertical-align:top"><?php echo $row->tanggal; ?></td>
                  <td><?php echo $row->tanggal; ?></td>
                  <td style=" text-align:center"><?php echo $row->no_surat; ?></td>
                  <td style=" text-align:center"><?php echo $row->dari ?></td>
                  <td style=" text-align:center"><?php echo $row->nama_prihal; ?></td>
                  <?php if ($row->status==0):?>
                  <td style=" text-align:center">BELUM DI DISPOSISI</td>
                  <?php  elseif ($row->id_login==1) :  ?>
                  <td style=" text-align:center">SUDAH DI DISPOSISI  DENGAN: Admin</td>

                  <?php  elseif ($row->id_login==2) :  ?>
                  <td style=" text-align:center">SUDAH DI DISPOSISI  DENGAN: User</td>

                  <?php  elseif ($row->id_login==3) :  ?>
                  <td style=" text-align:center">SUDAH DI DISPOSISI  DENGAN: Kepala Dinas</td>

                  <?php  elseif ($row->id_login==4) :  ?>
                  <td style=" text-align:center">SUDAH DI DISPOSISI  DENGAN: Sekretaris Dinas</td>

                  <?php  elseif ($row->id_login==5) :  ?>
                  <td style=" text-align:center">SUDAH DI DISPOSISI  DENGAN: KABID</td>

                  <?php  elseif ($row->id_login==6) :  ?>
                  <td style=" text-align:center">SUDAH DI DISPOSISI  DENGAN: KASUBAG</td>

                  <?php  elseif ($row->id_login==7) :  ?>
                  <td style=" text-align:center">SUDAH DI DISPOSISI  DENGAN: Kepala Seksi</td>

                  <?php else: ?>
                  <td style=" text-align:center">SUDAH DI DISPOSISI </td>
                <?php endif;   ?>
                   <td>
                    <?php echo anchor('Status_surat/edit/' . $row->id_surat, 'lihat', array('class' => 'btn btn-info'))?>
                    <?php echo anchor('Prihal/Hapus/' . $row->id_prihal, 'Hapus', array('class' => 'btn btn-danger')) ?></td>
                    </td>
                            </td>
                </tr>
                <?php $no++; ?>
                               <?php  endforeach; ?>
                              </tbody>
             
            </table>
            <div class="pagination">
                          </div>
          </div>
            <!-- /.box-body -->
        </div>
          <!-- /.box -->
      </div>
        <!-- /.col -->
    </div>
      <!-- /.row -->
  </section>
    <!-- /.content -->

        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
  </section>
  <!-- /.content -->
</div>
