<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Halaman Mahasiswa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active">Halaman Mahasiswa</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Mahasiswa</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" id="nim" placeholder="NIM">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Nama">
                </div>
                <div class="form-group row">
                    <label class="col-4">jenis kelamin</label>
                    <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="lakilaki">
                            <label for="radio_0" class="custom-control-label">laki laki</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="peyempuan">
                            <label for="radio_1" class="custom-control-label">peyempuan</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="tempatlahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tempatlahir" placeholder="Tempat Lahir">
                </div>
                <div class="form-group">
                    <label for="nama">Tempat Lahir</label>
                    <input type="text" class="form-control" id="nama" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Prodi</label>
                    <select class="custom-select rounded-0" id="exampleSelectRounded0">
                        <option>Teknik Informatika</option>
                        <option>Sistem Informasi</option>
                        <option>Bisnis Digital</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama">IPK</label>
                    <input type="text" class="form-control" id="nama" placeholder="IPK">
                </div>


            </div>
            <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->