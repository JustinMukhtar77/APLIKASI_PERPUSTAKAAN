<div>
<div class="form-panel" style="margin:-10px -5px -10px -5px;float: left">
      <h4 class="mb"><!-- <i class="fa fa-minus"></i> --> PENGEMBALIAN BUKU</h4>
      <form class="form-inline" role="form" action="INCLUDE/simpan_pengembalian.php" method="get">
          <input type="text" class="form-control" name="nim" placeholder="NIM" size="25px;" autofocus><br><br>
          <input type="text" class="form-control" name="kdbuku" placeholder="KD BUKU" size="25px;"><br><br>
          <input type="date" class="form-control" name="tanggalpm"  size="25px;"><br><br>
          <button type="submit" class="btn btn-theme">PROSES DATA</button>
    </form>
</div>
<!-- TANBLE PENGEMBALIAN BUKU -->
<div style="float: left;display: inline-block;margin:-25px 0px -15px 10px;">
    <!-- awal div pengambilan data  --> 
    <div class="row mt">
       <div class="col-md-12">
             <div class="content-panel" style="margin-top: -10px;">
                <table class="table table-striped table-advance table-hover">
                  <h4> <i class="fa fa-android"></i><b> DAFTAR CATATAN PENGEMBALIAN BUKU</b></h4>
                  <hr>
                    <thead>
                      <tr>
                          <th>NIM</th>
                          <th>KD BUKU</th>
                          <th>TANGGAL MENGEMBALIKAN</th>
                          <th>LAMA HARI</th>
                          <th>TELAT</th>
                          <th>DENDA</th>
                      </tr>
                    </thead> 
                    <tbody>
                      <?php
                            mysql_connect("localhost","root","");
                            mysql_select_db("library");
                            $no=0;
                            $data=mysql_query("SELECT * FROM management_pengembalian");
                            while ($sql=mysql_fetch_assoc($data)) {
                        ?>
                    <tr>
                        <td><?php echo $sql['nim']?></td>
                        <td><?php echo $sql['kd_buku']?></td>
                        <td><?php echo $sql['tanggal_pengembalian']?></td>
                        <td><?php echo $sql['lama']?></td>
                        <td><?php echo $sql['telat']?></td>
                        <td><?php echo $sql['denda']?></td>
                    </tr>
                    <?php
                      }
                    ?>
                    </tbody>
                </table>
            </div><!-- /content-panel -->
       </div>
  </div>
<!-- batas div  -->
</div>