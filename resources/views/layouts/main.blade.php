<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
    {{-- Print Css --}}
    <link rel="stylesheet" href="/dist/css/print.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    {{--
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    --}}

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        {{-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div> --}}
        @include('sweetalert::alert')

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

                {{-- Custom Alert Message --}}
                {{-- @if (session('success'))
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @elseif (session('error'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif --}}

                {{-- @if (count($errors) > 0)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $errors }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif --}}

                @yield('content')

            </section>
        </div>

        @include('partials/footer')

    </div>
</body>

<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/plugins/jszip/jszip.min.js"></script>
<script src="/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script src="/plugins/jquery-chained/jquery.chained.min.js"></script>
<script src="/plugins/sweetalert2/sweetalert2.all.min.js"></script>
@stack('script')
{{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script> --}}
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<script>
    // $("#barang").chained("#unit");
    $(document).ready(function() {
        $("#barang").chained("#unit");
    });

    $('input[name="daterange"]').daterangepicker({
        format: 'YYYY-MM-DD'
    });
//     $(function() {
//   $('input[name="daterange"]').daterangepicker({
//     opens: 'right'
//   }, function(start, end, label) {
//     console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
//   });
// });
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
            "buttons": ["excel", "pdf", "print", "colvis"]
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
