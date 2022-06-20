
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lib/datatable/dataTables.bootstrap.min.css') }}">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{{ asset('assets/scss/style.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
         @include('sufee.sidebar')
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

        @include('sufee.header')

        </header><!-- /header -->
        <!-- Header-->

        @include('sufee.breadcrumbs')

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Tambah Data Mahasiswa</strong>
                        </div>
                    <div class="card-body">
                        <form action="/mahasiswa/simpanmahasiswa" method="POST" class="pt-2 pb-2">
                            @csrf
                            <div class="form-group w-25">
                                <label>NIM</label>
                                <input type="number" name="nim" class="form-control" placeholder="Masukan NIM" required>
                            </div>
                            <div class="form-group w-25">
                                <label>Nama Mahasiswa</label>
                                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Mahasiswa" required>
                            </div>
                            <label>Jenis Kelamin</label>
                            <div class="form-check w-25=">
                                <input type="radio" name="gender" value="Laki-Laki" class="form-check-input">
                                <label>Laki-Laki</label>
                            </div>
                            <div class="form-check w-25=">
                                <input type="radio" name="gender" value="Perempuan" class="form-check-input">
                                <label>Perempuan</label>
                            </div>
                            <div class="form-group w-25">
                                <label>Jurusan Anda</label>
                                <select name="jurusan" class="form-control">
                                    <option value="0">Pilih Jurusan Anda</option>
                                    <option value="Sistem Informasi">Sistem Informasi</option>
                                    <option value="Informatika">Informatika</option>
                                    <option value="Desain Produk">Desain Produk</option>
                                    <option value="Arsitektur">Arsitektur</option>
                                    <option value="Manajemen">Manajemen</option>
                                </select>
                            </div>
                            <label>Bidang Minat</label>
                            <div class="form-check w-25=">
                                <input type="checkbox" name="bidang_minat[]" value="Sepak Bola" class="form-check-input">
                                <label>Sepak Bola</label>
                            </div>
                            <div class="form-check w-25=">
                                <input type="checkbox" name="bidang_minat[]" value="Basket" class="form-check-input">
                                <label>Basket</label>
                            </div>
                            <div class="form-check w-25=">
                                <input type="checkbox" name="bidang_minat[]" value="Catur" class="form-check-input">
                                <label>Catur</label>
                            </div>
                            <div class="form-check w-25=">
                                <input type="checkbox" name="bidang_minat[]" value="Bola Voli" class="form-check-input">
                                <label>Bola Voli</label>
                            </div>
                            <div class="form-group pt-4">
                                <input type="submit" value="SIMPAN" class="btn btn-outline-primary">
                            </div>
                        </form>
                </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="{{ asset('assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>


    <script src="{{ asset('assets/js/lib/data-table/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/datatables-init.js') }}"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>


</body>
</html>
