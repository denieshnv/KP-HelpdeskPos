<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>HELPDESK</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/adminlte/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->

  <!-- TABEL -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/adminlte/css/adminlte.css">
  <!-- AKHIR TABEL -->

</head>
<body class="hold-transition sidebar-mini layout-fixed accent-orange">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <!-- Navbar kiri -->
  <nav class="main-header navbar navbar-expand navbar-light navbar-orange">


    <!-- Navbar kanan -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a href="/logout" class="nav-link " >
          <i class="fa fa-sign-out-alt"></i>
        </a>
      </li>      
    </ul> 
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar main-sidebar-custom sidebar-light-orange elevation-4">
    <!-- Logo Pos -->
    <a href="/viewmasalah">
    <nav class="brand-link navbar-orange">
      <img src="/adminlte/img/poss.png"
           alt="Logo POS"
           class="brand-image"
           >
      <span class="brand-text font-weight-normal" style="color: white">HELPDESK</span>
    </nav>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Daftar Masalah
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/viewmasalah" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tampilkan Masalah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/viewquery" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tampilkan Query</p>
                </a>
              </li>
            </ul>
          </li>
                    <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/masalahform" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Masalah</p>
                </a>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE App -->
<script src="/adminlte/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- SCRIPT QUERY -->
<script src="/adminlte/js/demo.js"></script>


<script type='text/javascript'>
        function addFields(){
            // Banyaknya form yang mau dibuat
            var number = document.getElementById("query").value;
            var formquery = document.getElementById("formquery");
            // Hapus form sebelumnya
            while (formquery.hasChildNodes()) {
                formquery.removeChild(formquery.lastChild);
            }
            for (i=0;i<number;i++){
                // Membuat form
                formquery.appendChild(document.createTextNode("Query " + (i+1)));
                // Membuat elemen input
                var input = document.createElement("input");
                input.className="form-control";
                input.type = "text";
                input.name = "query" + i;
                formquery.appendChild(input);
                formquery.appendChild(document.createElement("br"));
                formquery.appendChild(document.createTextNode("Parameter " + (i+1)));
                var paraminput = document.createElement("input");
                paraminput.className="form-control";
                paraminput.type = "text";
                paraminput.name = "parameter" +i;
                formquery.appendChild(paraminput);
                // Append a line break 
                formquery.appendChild(document.createElement("br"));

            }
        }</script>

<script src="/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/adminlte/js/demo.js"></script>
<!-- page script -->
<script>

  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
      "ordering" :true,
      "searching" :true,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      
    });
  });
      $('.toastsDefaultSuccess').click(function() {
      $(document).Toasts('create', {
        class: 'bg-light',
        title: 'Sukses',
        subtitle: '',
        body: 'Data Masalah telah berhasil disimpan'
      })
    });
</script>
</body>
</html>
