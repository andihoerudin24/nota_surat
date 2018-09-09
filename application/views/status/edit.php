<!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Silahkan Isi Nota Dinas</h3>
          </div>
          <!-- /.box-header -->
          <?php echo form_open_multipart('Status_surat/edit');
               echo form_hidden('id_surat',$surat['id_surat']);
           ?>
            <div class="box-body">
              <div class="row">
                <div class="col-xs-12">
                  <div class="form-group" style="margin-top:10px">
                    <span class="col-xs-2" style="margin-left:10px; margin-bottom:15px; font-size:18px">Kepada :</span>
                    <div class="col-xs-4">
                      <input class="form-control" type="text" id="onlynumber" readonly="" value="<?php echo $surat['kepada'] ?>" name="kepada" maxlength="11" autofocus required />
                    </div>
                    <span class="col-xs-2" style="margin-left:10px; margin-bottom:15px; font-size:18px">Tembusan :</span>
                    <div class="col-xs-3">
                      <input class="form-control" readonly="" value="<?php echo $surat['tembusan'] ?>" type="text" id="onlynumber" name="tembusan" maxlength="11" autofocus required />
                                               

                                              
                    </div>
                  </div>
                </div>
                <div class="col-xs-12" style="margin-top:10px">
                  <div class="form-group">
                    <span class="col-xs-2" style="margin-left:10px; margin-bottom:15px; font-size:18px">Dari :</span>
                    <div class="col-xs-4">
                      <input class="form-control" type="text" readonly="" value="<?php echo $surat['dari'] ?>" name="dari" maxlength="50" required />
                    </div>
					<span class="col-xs-2" style="margin-left:10px; margin-bottom:15px; font-size:18px">Tanggal :</span>
                    <div class="col-xs-3">
                      <input class="form-control" type="text" readonly="" value="<?php echo date('l, d-m-y')  ?>" id="onlynumber" name="tanggal" maxlength="11" autofocus required />
                                               

                                              
                    </div>
                  </div>
                </div>
                <div class="col-xs-12" style="margin-top:10px">
                  <div class="form-group">
                    <span class="col-xs-2" style="margin-left:10px; margin-bottom:15px; font-size:18px">No Nota Dinas :</span>
                    <div class="col-xs-4">
                      <input class="form-control" readonly="" value="<?php echo $surat['no_surat'] ?>" type="text" name="no_surat" required />
                    </div>
                  </div>
                </div>
                <div class="col-xs-12" style="margin-top:10px">
                  <div class="form-group">
                    <span class="col-xs-2" style="margin-left:10px; margin-bottom:15px; font-size:18px">Perihal :</span>
                    <div class="col-xs-4">
                      <?php  echo cmb_dinamis('id_prihal','prihal','nama_prihal','id_prihal',$surat['id_prihal'])  ?>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12" style="margin-top:15px">
                  <div class="form-group">
                   </div>

                     <div class="form-group" style="margin-top:10px">
                    <span class="col-xs-2" style="margin-left:10px; margin-bottom:15px; font-size:18px">Disposisi :</span>
                    <div class="col-xs-4">
                      <?php echo cmb_dinamis('id_login','tbl_login','nama','id') ?>

                    </div>



                    <div class="col-xs-2 col-xs-push-1">
                    </div>
                    <div class="col-xs-2 col-xs-push-1">
                      </div>
                    <div class="col-xs-2 col-xs-push-1">
                      </div>
                    <div class="col-xs-2 col-xs-push-1">
                    </div>
                    <div class="col-xs-2 col-xs-push-1">
                      <input type="submit" name="submit" class="btn btn-lg btn-block btn-success fa fa-save" value="Simpan" />
                    </div>
                  </div>
                </div>
                <div class="col-xs-12" style="margin-top:15px; margin-bottom: 10px">
                  <div class="form-group">
                    
                  </div>
                </div>

                 <div class="col-xs-12" style="margin-top:10px">
                  <div class="form-group">
                    <span class="col-xs-2" style="margin-left:10px; margin-bottom:15px; font-size:18px">Isi Nota :</span>
                    <div class="col-xs-4">
                        <textarea class="textarea" name="isi_nota" placeholder="isi nota"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $surat['isi_nota'] ?></textarea>
             
                    </div>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
          <?php echo form_close(); ?>
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
  </section>
  <!-- /.content -->
</div>
