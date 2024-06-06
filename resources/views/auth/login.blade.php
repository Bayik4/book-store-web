<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Main content -->
        <section class="content">
            <div class="container" style="height: 100vh; display: flex; justify-content: center; align-items: center;">
                <!-- /.card -->
                <!-- Horizontal Form -->
                <div class="card card-info" style="width: 400px">
                    <div class="card-header text-center">
                        <h3 class="">Login Form</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="{{ url('/login') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email"name="email" class="form-control" id="inputEmail3"
                                        placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password" class="form-control" id="inputPassword3"
                                        placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                        <label class="form-check-label" for="exampleCheck2">Remember
                                            me</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <a href="{{ url('/') }}" class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-info float-right">Sign in</button>
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- ./wrapper -->

    {{-- <!-- jQuery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes --> --}}
    {{-- <script src="../../dist/js/demo.js"></script> --}}

</body>

</html>
