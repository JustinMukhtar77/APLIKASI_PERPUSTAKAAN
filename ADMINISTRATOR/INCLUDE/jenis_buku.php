<div style="margin:-25px 0px 0px 10px">
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
                          <th>KD BUKU</th>
                          <th>JUDUL</th>
                          <th>PENULIS</th>
                          <th>PENERBIT</th>
                          <th>DESKRIPSI</th>
                          <th>BAHASA</th>
                          <th>ISBN</th>
                          <th>EDISI</th>
                          <th>KETERSEDIAAN</th>
                          <th><i class=" fa fa-edit"></i></th>
                      </tr>
                    </thead> 
                    <tbody>
                      <?php
                            mysql_connect("localhost","root","");
                            mysql_select_db("library");
                            $data=mysql_query("select * from management_buku,kategory_buku WHERE management_buku.id_buku=kategory_buku.id_buku");
                            while($ambildata=mysql_fetch_array($data)) {
                              if($ambildata['status']==1)
                                $ketersediaan="<span style=background-color:pink;border-radius:5px>sedang dipinjam</span>";
                              else
                                $ketersediaan="<span style=background-color:skyblue;border-radius:5px>tersedia</span>";

                        ?>
                    <tr>
                        <td><?php echo $ambildata['id_buku']?></td>
                        <td><?php echo $ambildata['kd_buku']?></td>
                        <td><?php echo $ambildata['subjek']?></td>
                        <td><?php echo $ambildata['penulis']?></td>
                        <td><?php echo $ambildata['penerbit']?></td>
                        <td><?php echo $ambildata['deskripsi_fisik']?></td>
                        <td><?php echo $ambildata['bahasa']?></td>
                        <td><?php echo $ambildata['isbn']?></td>
                        <td><?php echo $ambildata['edisi']?></td>
                        <td><?php echo $ketersediaan ?></td>
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