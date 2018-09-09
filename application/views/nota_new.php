<div class="col-xs-12">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Nota</h3>
            <?php $level = $this->session->userdata('level'); ?>
            <?php if ($level==3): ?>
            <div class="pull-right"></div> 
            <?php elseif($level==4): ?>
            <div class="pull-right"></div>
            <?php else: ?>
            <div class="pull-right"><?php echo anchor('Nota/add', 'Ajukan Nota Dinnas', array('class' => 'btn btn-danger')) ?></div> 
           <?php endif; ?>
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
            } elseif ($this->session->flashdata('file')) {
                echo "<div class='alert alert-warning bg-danger'>";
                echo $this->session->flashdata('file');
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
                        <th>Nomor Nota</th>
                        <th>Disposisi</th>
                        <th>Nama Seksi</th>
                        <th>Tanggal</th>
                        <th>Disposisi</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $level = $this->session->userdata('level'); ?>
                    <?php
                    $no = 1;
                    foreach ($nota as $p):
                        ?>
                        <tr>
                            <td><?php echo $no ?></td>
                            <td><?php echo $p->nomor ?></td>
                            <td><?php echo $p->disposisi ?></td>
                            <td><?php echo $p->nama_seksi ?></td>
                            <td><?php echo $p->tanggal ?></td>
    <?php if ($level == 2): ?>
                                <td>Tidak Bisa Edit</td>
                                <td>Tidak Bisa Hapus</td>
    <?php elseif ($level == 3): ?>
                                <td><?php echo anchor('Nota/edit/' . $p->id_nota, 'Disposisi', array('class' => 'btn btn-info')) ?></td>
                                <td>Tidak Bisa Hapus</td>
    <?php elseif($level ==4): ?> 
                                 <td><?php echo anchor('Nota/edit/' . $p->id_nota, 'Disposisi', array('class' => 'btn btn-info')) ?></td>
                                <td>Tidak Bisa Hapus</td>
     <?php  else: ?>                           
                                <td><?php echo anchor('Nota/edit/' . $p->id_nota, 'Disposisi', array('class' => 'btn btn-info')) ?></td>

                                <td><?php echo anchor('Nota/Hapus/' . $p->id_nota, 'Hapus', array('class' => 'btn btn-danger')) ?>
                        <?php endif; ?>
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