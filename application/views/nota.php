<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Nota DINAS</h3>
              <?php
if ($this->session->flashdata('Berhasil')) {
    echo "<div class='alert alert-info'>";
    echo $this->session->flashdata('Berhasil');
    echo "</div>";
} elseif ($this->session->flashdata('edit')) {
    echo "<div class='alert alert-warning'>";
    echo $this->session->flashdata('edit');
    echo "</div>";
} elseif ($this->session->flashdata('hapus')) {
    echo "<div class='alert alert-warning bg-danger'>";
    echo $this->session->flashdata('hapus');
    echo "</div>";
}
?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal Terima</th>
                  <th>Tanggal Nota</th>
                  <th>No Nota Dinas</th>
                  <th>Kepada</th>
                  <th>Dari</th>
                  <th>Perihal</th>
                  <th>Tembusan</th>
                  <th>Isi Nota</th>
                  <th>Status</th>
                  <th>Edit</th>
                  <th>Delete</th>


                </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach ($surat as $p): ?>
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $p->tanggal ?></td>
                  <td><?php echo $p->tanggal ?></td>
                  <td><?php echo $p->no_surat ?></td>
                  <td><?php echo $p->kepada ?></td>
                  <td><?php echo $p->dari ?></td>
                  <td><?php echo $p->nama_prihal ?></td>
                  <td><?php echo $p->tembusan ?></td>
                  <td><?php echo $p->isi_nota ?></td>
                  <td><div class="btn-group">
                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a href="<?php echo site_url('Ajukan_surat/update/'.$p->id_surat) ?>">Disposisi</a></li>
                          <li><a href="<?php echo site_url('Ajukan_surat/edit/'.$p->id_surat) ?>">Belum Disposisi</a></li>
                        </ul>
                      </div>
                    </td>
                     <td><?php echo anchor('Nota_dinnas/edit/' . $p->id_surat, 'Edit', array('class' => 'btn btn-info')) ?></td>
                        <td><?php echo anchor('Nota_dinnas/Hapus/' . $p->id_surat, 'Hapus', array('class' => 'btn btn-danger')) ?>
                </tr>
                <?php $no++; ?>
                <?php endforeach; ?>
                
               
                </tbody>
                  </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
</div>