<div class="form-panel" style="margin:-10px -5px -10px -5px;float: left">
      <h4 class="mb"><i class="fa fa-plus"></i> PEMINJA MAN BUKU</h4>
      <form class="form-inline" role="form" action="INCLUDE/simpan_peminjaman.php" method="get">
          <input type="text" class="form-control" name="nim" placeholder="NIM" size="25px;" autofocus><br><br>
          <input type="text" class="form-control" name="kdbuku" placeholder="KD BUKU" size="25px;"><br><br>
          <input type="text" class="form-control" name="tanggalpm" value="<?php echo date('d-m-Y')?>" size="25px;"><br><br>
          <button type="submit" class="btn btn-theme">PROSES DATA</button>
    </form>
</div>

<div style="float: left;display: inline-block;margin:-25px 0px -15px 10px">
    <!-- awal div pengambilan data  --> 
    <div class="row mt">
       <div class="col-md-12">
             <div class="content-panel" style="margin-top: -10px;overflow: scroll;width: 900px;">
                <table class="table table-striped table-advance table-hover">
                  <h4><!-- <i class="fa fa-user"></i>--><b> DAFTAR SEMUA PEMINJAM BUKU</b></h4>
                  <hr>
                    <thead>
                      <tr>
                          <th>NO</th>
                          <th>NIM</th>
                          <th>NAMA PEMINJAM</th>
                          <th>ID BUKU</th>
                          <th>KD BUKU</th>
                          <th>JUDUL BUKU</th>
                          <th>TANGGAL MEMINJAM</th>
                          <th>STATUS</th>
                      </tr>
                    </thead> 
                    <tbody>
                      <?php
                            mysql_connect("localhost","root","");
                            mysql_select_db("library");
                            $no=0;
                            $sql=mysql_query("select * from management_mahasiswa,management_buku,management_peminjaman where management_mahasiswa.nim=management_peminjaman.nim AND management_peminjaman.id_buku=management_buku.id_buku");
                              while ($data=mysql_fetch_array($sql)) {
                                if ($data['status']==1)
                                  $status="<span style=background-color:pink;border-radius:5px>sedang dipinjam</span>";
                                if ($data['status']==0)
                                  $status="<span style=background-color:skyblue;color:white;border-radius:5px>sudah dikembalikan</span>";
                              $no++;
                        ?>
                    <tr>
                        <td><?php echo $no?></td>
                        <td><?php echo $data['nim']?></td>
                        <td><?php echo $data['nama']?></td>
                        <td><?php echo $data['id_buku']?></td>
                        <td><?php echo $data['kd_buku']?></td>
                        <td><?php echo $data['subjek']?></td>
                        <td><?php echo $data['tanggal_peminjaman']?></td>
                        <td><?php echo $status?></td>
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