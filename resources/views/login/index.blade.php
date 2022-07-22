<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    {{-- @include('sweetalert::alert') --}}
    @if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    {{-- <script>
        $(function() {
        var Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000
        });

        $('.swalDefaultError').click(function() {
          Toast.fire({
            icon: 'error',
            title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
          })
        });
    });
    </script> --}}
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-orange">
            <div class="text-center">
                <img src="dist/img/logo1.png" style="width:300px;height:225px;">
                <!-- <a href="../index.php" class="h1">Audit<b>PBJ</b></a> -->
            </div>
            <div class="card-body">
                <!-- <p class="login-box-msg">Sign in to start your session</p> -->

                <form action="/login" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="username" id="username" class="form-control" placeholder="Username"
                            autofocus required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password"
                            required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <button type="submit" class="btn btn-primary btn-block"
                            style="background-color: #FF8364; border-color:transparent">Login</button>
                    </div>
                </form>

                {{-- <button type="button" class="btn btn-danger swalDefaultError">
                    Launch Error Toast
                </button> --}}
                {{-- <div class="row">
                    <div class="col-sm-7">
                        <a href="register.php">Mendaftar user baru</a>
                    </div>
                    <div class="col">
                        <a href="forgot-password.html">Lupa Password?</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <script src="plugins/sweetalert2/sweetalert2.min.js"></script>
</body>

</html>
