<div class="row mt">
   <div class="col-md-12">
         <div class="content-panel" style="margin-top: -35px;overflow: scroll;">
            <table class="table table-striped table-advance table-hover">
              <h4><i class="fa fa-pencil"></i> LAPORAN PARA PEMBACA</h4>
              <hr>
                <thead>
                <tr>
                    <th>NO</th>
                    <th>NIM</th>
                    <th>NAMA PEMBACA</th>
                    <th>ID BUKU</th>
                    <th>KD BUKU</th>
                    <th>JUDUL BUKU</th>
                    <th>PEMINJAMAN</th>
                    <th>PENGEMBALIAN</th>
                    <th>LAMA</th>
                    <th>TELAT</th>
                    <th>DENDA</th>
                    <th><i class=" fa fa-edit"></i></th>
                </tr>
                </thead> 
                <tbody>
                  <?php
                        mysql_connect("localhost","root","");
                        mysql_select_db("library");
                        $no=0;
                        // $data1=mysql_query("select * from management_mahasiswa,management_buku,management_peminjaman,management_pengembalian where management_mahasiswa.nim=management_peminjaman.nim && management_pengembalian.nim && management_buku.id_buku=management_peminjaman.id_buku && management_peminjaman.kd_buku");
                        //     while($ambildata=mysql_fetch_array($data1)) {
                        $data1=mysql_query("select * from  management_mahasiswa,management_buku,kategory_buku,management_peminjaman,management_pengembalian where management_mahasiswa.nim=management_peminjaman.nim && management_buku.id_buku=management_peminjaman.id_buku && kategory_buku.kd_buku=management_pengembalian.kd_buku && management_peminjaman.kd_buku");
                        while ($ambildata=mysql_fetch_array($data1)) {
                            $no++;
                    ?>
                <tr>
                    <td><?php echo $no?></td>
                    <td><?php echo $ambildata['nim']?></td>
                    <td><?php echo $ambildata['nama']?></td>
                    <td><?php echo $ambildata['id_buku']?></td>
                    <td><?php echo $ambildata['kd_buku']?></td>
                    <td><?php echo $ambildata['subjek']?></td>
                    <td><?php echo $ambildata['tanggal_peminjaman']?></td>
                    <td><?php echo $ambildata['tanggal_pengembalian']?></td>
                    <td><?php echo $ambildata['lama']?></td>
                    <td><?php echo $ambildata['telat']?></td>
                    <td><?php echo $ambildata['denda']?></td>
                    <td><input type="checkbox" name=""></td>
                </tr>
                <?php
                  }
                ?>
                </tbody>
            </table>
        </div><!-- /content-panel -->
   </div>
</div>