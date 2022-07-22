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
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
    {{-- Print Css --}}
    <link rel="stylesheet" href="/dist/css/print.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
</head>

<body>
    <div class="container my-5">
        <div class="d-flex justify-content-between">
            <div class="mb-2">
                <small><strong>Copyright &copy; 2021-2022 <a href="#">SPI Politeknik Negeri Cilacap</a>.</strong> All
                    rights
                    reserved.</small>
            </div>
            <div class="mb-2">
                <small>{{ date('d F Y (H:i:s)') }}</small>
            </div>
        </div>
        @yield('content')
    </div>
</body>

</html>
