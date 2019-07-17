<div class="row mt">
   <div class="col-md-12">
         <div class="content-panel" style="margin-top: -10px;">
            <table class="table table-striped table-advance table-hover">
              <h4><i class="fa fa-table"></i> DAFTAR MAHASISWA</h4>
              <hr>
                <thead>
                <tr>
                    <th>NIM</th>
                    <th>NAMA</th>
                    <th>JK</th>
                    <th>PRODI</th>
                    <th>TETALA</th>
                    <th>ALAMAT ASAL</th>
                    <th>TELEPON</th>
                    <th>STATUS</th>
                    <th>TANDAI</th>
                    <th><i class=" fa fa-edit"></i>ACTION</th>
                </tr>
                </thead> 
                <tbody>
                  <?php
                        mysql_connect("localhost","root","");
                        mysql_select_db("library");
                        $data=mysql_query("select * from management_mahasiswa");
                        while($ambildata=mysql_fetch_array($data)) {

                    ?>
                <tr>
                    <td><?php echo $ambildata['nim']?></td>
                    <td><?php echo $ambildata['nama']?></td>
                    <td><?php echo $ambildata['jk']?></td>
                    <td><?php echo $ambildata['prodi']?></td>
                    <td><?php echo $ambildata['tetala']?></td>
                    <td><?php echo $ambildata['alamat']?></td>
                    <td><?php echo $ambildata['no_telepon']?></td>
                    <td><span class="label label-info label-mini">Due</span></td>
                    <td><input type="checkbox" name="pilih"></td>
                    <td>
                        <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                        <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                    </td>
                </tr>
                <?php
                  }
                ?>
                </tbody>
            </table>
        </div><!-- /content-panel -->
   </div>
</div>