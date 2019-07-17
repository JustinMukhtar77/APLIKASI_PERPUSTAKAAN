<?php
    @session_start();
    if (empty($_SESSION['nama']) AND empty($_SESSION['no_telepon'])) {
      echo "<script>alert('harap login dulu !');location.href=\"../index.php\"</script>";
    }else{
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>APLIKASI PERPUSTAKAAN</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <!-- <header class="header black-bg"> -->
      <header class="header" style="background-color: skyblue;">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="#" class="logo"><b>APLIKASI PERPUSTAKAAN</b></a>
            
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.html" style="color: black">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">
                      <?php
                        echo $_SESSION['nama'];
                      ?> 
                  </h5>
              	  	
                  <li class="mt">
                    <!-- class="active" -->
                      <a href="?menu=daftarmahasiswa">
                          <i class="fa fa-user"></i>
                          <span>DAFTAR MAHASISWA</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="#">
                          <i class="fa fa-laptop"></i>
                          <span>MANAGEMENT BUKU</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="?menu=daftarbuku">DAFTAR BUKU</a></li>
                          <li><a  href="?menu=jenisbuku">KATEGORI BUKU</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="#" >
                          <i class="fa fa-money"></i>
                          <span>MAGEMENT PEMINJAMAN</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="?menu=peminjamanbuku">PEMINJAMAN BUKU</a></li>
                          <li><a  href="?menu=pengembalianbuku">PENGEMBALIAN BUKU</a></li>
                          <li><a  href="?menu=laporanpeminjaman">LAPORAN PEMINJAMAN</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a>
                          <i class="fa fa-android"></i>
                          <span>MENU</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="?menu=beranda">BERANDA DEPAN</a></li>
                          <li><a  href="?menu=info">INFO PERPUSTAKAAN</a></li>
                          <li><a  href="?menu=lokasi">LOKASI PERPUSTAKAAN</a></li>
                          <li><a  href="?menu=pustakawan">PUSTAKAWAN</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>BACK TO LAYAR</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="../index.php">Login</a></li>
                          <li><a  href="INCLUDE/screen.php">Lock Screen</a></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
     
      <!--main content start-->

      <section id="main-content">
          <section class="wrapper">
              <div class="row mt">
              <div class="col-lg-12">
                <?php
                  if (empty($_GET['menu'])) {
                      include 'INCLUDE/daftar_mahasiswa.php';
                  }else{
                      if ($_GET['menu']=="daftarbuku") 
                        include 'INCLUDE/buku.php';
                      else if ($_GET['menu']=="daftarmahasiswa")
                        include 'INCLUDE/daftar_mahasiswa.php';
                      else if ($_GET['menu']=="jenisbuku") 
                        include 'INCLUDE/jenis_buku.php';
                      else if ($_GET['menu']=="peminjamanbuku")
                        include 'INCLUDE/peminjaman_buku.php';
                      else if($_GET['menu']=="pengembalianbuku")
                        include 'INCLUDE/pengembalian_buku.php';
                      else if($_GET['menu']=="laporanpeminjaman")
                        include 'INCLUDE/laporan_pembaca.php';
                      else if($_GET['menu']=="beranda")
                        echo "HALAMAN BERANDA PERPUSTAKAAN";
                      else if($_GET['menu']=="info")
                        echo "HALAMAN INFO PERPUSTAKAAN";
                      else if($_GET['menu']=="lokasi")
                        echo "HALAMAN LOKASI PERPUSTAKAAN";
                      else if ($_GET['menu']=="pustakawan") 
                        echo "HALAMAN PUSTAKAWAN PERPUSTAKAAN";
                  }
                ?>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->
                      
        </div><! --/row -->
          </section>
      </section>
      <footer class="site-footer">
          <div class="text-center">
              <?php echo date('Y')?> - Alvarez.is
              <a href="calendar.html#" class="go-buttom">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
	<script src="assets/js/zabuto_calendar.js"></script>	
	
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  </body>
</html>
<?php
}
?>