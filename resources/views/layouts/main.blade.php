<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        @include('partials/navbar')

        @include('partials/sidebar')

        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>{{ $title }}</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">{{ $title }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">

                @yield('content')

            </section>
        </div>

        @include('partials/footer')

    </div>
</body>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script src="plugins/jquery-chained/jquery.chained.min.js"></script>
<script>
    // $("#barang").chained("#unit");
    $(document).ready(function() {
        $("#barang").chained("#unit");
    });
</script>

<script>
    // Aktifkan script customfile
    $(function() {
        bsCustomFileInput.init();
    });

    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#usernameTambah').keyup(function() {
            var uname = $('#usernameTambah').val();
            if (uname == 0) {
                $('#hasilCekTambah').text('');
            } else {
                $.ajax({
                    url: 'functions/cek_tambah_user.php',
                    type: 'POST',
                    data: 'username=' + uname,
                    success: function(hasil) {
                        if (hasil > 0) {
                            $('#hasilCekTambah').html(
                                '<label class="col-form-label" for="inputSuccess"><i class="fas fa-times-circle"></i> Username Tidak Tersedia</label>'
                            );
                            $('#tambah').attr('disabled', 'disabled');
                        } else if (hasil) {
                            $('#hasilCekTambah').html(
                                '<label class="col-form-label" for="inputSuccess"><i class="fas fa-check-circle"></i> Username Tersedia</label>'
                            );
                            $('#tambah').removeAttr('disabled');
                        }
                    }
                });
            }
        });
    });

    $(document).ready(function() {
        $('#usernameEdit').keyup(function() {
            var uname = $('#usernameEdit').val();
            if (uname == 0) {
                $('#hasilCekEdit').text('');
            } else {
                $.ajax({
                    url: 'functions/cek_edit_user.php',
                    type: 'POST',
                    data: 'username=' + uname,
                    success: function(hasil) {
                        if (hasil > 0) {
                            $('#hasilCekEdit').html(
                                '<label class="col-form-label" for="inputSuccess"><i class="fas fa-times-circle"></i> Username Tidak Tersedia</label>'
                            );
                            $('#edit').attr('disabled', 'disabled');
                        } else if (hasil) {
                            $('#hasilCekEdit').html(
                                '<label class="col-form-label" for="inputSuccess"><i class="fas fa-check-circle"></i> Username Tersedia</label>'
                            );
                            $('#edit').removeAttr('disabled');
                        }
                    }
                });
            }
        });
    });

    $(document).ready(function() {
        $('#cekNamaUnit').keyup(function() {
            var namaUnit = $('#cekNamaUnit').val();
            if (namaUnit == 0) {
                $('#hasilCekUnit').text('');
            } else {
                $.ajax({
                    url: 'functions/cek_edit_unit.php',
                    type: 'POST',
                    data: 'namaUnit=' + namaUnit,
                    success: function(hasil) {
                        if (hasil > 0) {
                            $('#hasilCekUnit').html(
                                '<label class="col-form-label" for="inputSuccess"><i class="fas fa-times-circle"></i> Nama Unit Tidak Tersedia</label>'
                            );
                            $('#editUnit').attr('disabled', 'disabled');
                        } else if (hasil) {
                            $('#hasilCekUnit').html(
                                '<label class="col-form-label" for="inputSuccess"><i class="fas fa-check-circle"></i> Nama Unit Tersedia</label>'
                            );
                            $('#editUnit').removeAttr('disabled');
                        }
                    }
                });
            }
        });
    });

    $(document).ready(function() {
        $('#namaUnitTambah').keyup(function() {
            var namaUnit = $('#namaUnitTambah').val();
            if (namaUnit == 0) {
                $('#hasilUnitTambah').text('');
            } else {
                $.ajax({
                    url: 'functions/cek_edit_unit.php',
                    type: 'POST',
                    data: 'namaUnit=' + namaUnit,
                    success: function(hasil) {
                        if (hasil > 0) {
                            $('#hasilUnitTambah').html(
                                '<label class="col-form-label" for="inputSuccess"><i class="fas fa-times-circle"></i> Nama Unit Tidak Tersedia</label>'
                            );
                            $('#tambahUnit').attr('disabled', 'disabled');
                        } else if (hasil) {
                            $('#hasilUnitTambah').html(
                                '<label class="col-form-label" for="inputSuccess"><i class="fas fa-check-circle"></i> Nama Unit Tersedia</label>'
                            );
                            $('#tambahUnit').removeAttr('disabled');
                        }
                    }
                });
            }
        });
    });
</script>

</html>
