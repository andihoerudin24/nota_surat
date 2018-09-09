<div class="col-xs-12">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Tembusan Nota</h3>
            <?php $level = $this->session->userdata('level'); ?>
            <?php if ($level==3): ?>
            <div class="pull-right"></div> 
            <?php elseif($level==5): ?>
            <div class="pull-right"></div>
            <?php else: ?>
            <?php echo anchor('Tembusan/add','Tambah',array('class'=>'btn btn-danger')) ?>
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
                        <th>Nomor Nota </th>
                        <th>Nama Bidang</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $level = $this->session->userdata('level'); ?>
                    <?php $no = 1;
                    foreach ($tembusan as $p): ?>
                        <tr>
                            <td><?php echo $no ?></td>
                            <td><?php echo $p->nomor ?></td>
                            <td><?php echo $p->nama_bidang ?></td>
                            <?php if ($level==3):  ?>
                            <?php elseif ($level==5):  ?>
                             <td>Tidak Bisa Edit</td>
                             <td>Tidak Bisa Hapsu</td>
                             <?php else:  ?>
                            <td><?php echo anchor('Tembusan/edit/' . $p->id_tembusan, 'Edit', array('class' => 'btn btn-info')) ?></td>
                            <td><?php echo anchor('Tembusan/Hapus/' . $p->id_tembusan, 'Hapus', array('class' => 'btn btn-danger')) ?>
                       <?php endif;  ?>
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