<div class="form-panel" style="margin:-10px -5px 0px -5px;width: 23%;float:left;">
      <h4 class="mb"><i class="fa fa-plus"></i> DAFTAR BUKU</h4>
      <form method="get" action="INCLUDE/simpan_buku.php" class="form-inline">
        <input type="text" class="form-control" name="idbuku" placeholder="ID BUKU" size="25px;"><br><br>
        <input type="text" class="form-control" name="subjek" placeholder="SUBJECK / JUDUL BUKU" size="25px;"><br><br>
        <input type="text" class="form-control" name="penulis" placeholder="PENULIS" size="25px;"><br><br>
        <input type="text" class="form-control" name="penerbit" placeholder="PENERBIT" size="25px;"><br><br>
        <input type="text" class="form-control" name="deskripsi" placeholder="DESKRIPSI FISIK" size="25px;"><br><br>
        <input type="text" class="form-control" name="bahasa" placeholder="BAHASA" size="25px"><br><br>
        <input type="text" class="form-control" name="isbn" placeholder="ISBN / ISSN" size="25px"><br><br>
        <input type="text" class="form-control"  name="edisi" placeholder="EDISI" size="25px"><br><br>
        <input type="text" class="form-control"  name="stok" placeholder="JML BUKU / STOCK" size="25px"><br><br>
        <button type="submit" class="btn btn-theme">PROSES DATA</button>
      </form>
</div>
<div style="width:850px;float: left;display: inline-block;margin:-25px 0px 0px 10px">
    <!-- awal div pengambilan data  --> 
    <div class="row mt">
       <div class="col-md-12">
             <div class="content-panel" style="margin-top: -10px;">
                <table class="table table-striped table-advance table-hover">
                  <h4><i class="fa fa-book"></i> DAFTAR SEMUA BUKU</h4>
                  <hr>
                    <thead>
                      <tr>
                          <th>ID</th>
                          <th>JUDUL</th>
                          <th>PENULIS</th>
                          <th>PENERBIT</th>
                          <th>DESKRIPSI</th>
                          <th>BAHASA</th>
                          <th>ISBN</th>
                          <th>EDISI</th>
                          <th>STOK</th>
                          <th><i class=" fa fa-edit"></i></th>
                      </tr>
                    </thead> 
                    <tbody>
                      <?php
                            mysql_connect("localhost","root","");
                            mysql_select_db("library");
                            $data=mysql_query("select * from management_buku");
                            while($ambildata=mysql_fetch_array($data)) {

                        ?>
                    <tr>
                        <td><?php echo $ambildata['id_buku']?></td>
                        <td><?php echo $ambildata['subjek']?></td>
                        <td><?php echo $ambildata['penulis']?></td>
                        <td><?php echo $ambildata['penerbit']?></td>
                        <td><?php echo $ambildata['deskripsi_fisik']?></td>
                        <td><?php echo $ambildata['bahasa']?></td>
                        <td><?php echo $ambildata['isbn']?></td>
                        <td><?php echo $ambildata['edisi']?></td>
                        <td><?php echo $ambildata['stock_buku']?></td>
                        <td><input type="checkbox" name="pilih"></td>
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