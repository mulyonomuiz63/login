<div class="right_col" role="main">

<header class="page-header">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h1 class="separator">Nasabah</h1>
        </div>
    </div>
</header>

<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card" id="box-jenis-ujian">
                <!-- <h5 class="card-header"><font id="card-title">Daftar Barang</font> -->
                    <!-- <div class="float-right">
                        <button id="btn-tambah" class="btn btn-primary btn-sm"><strong><i class="icon dripicons-plus" style="color: white;"></i>Tambah Barang</strong></button>
                    </div>
                </h5> -->
                <div class="card-body">
                    <div id="body-table">
                        <table id="table-barang" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <th>Usia < 19 Tahun</th>
                                    <th>Usia 19-34 Tahun</th>
                                    <th>Usia 35-54 Tahun</th>
                                    <th>Usia >54 Tahun</th>
                                    <th>Usia >Total</th>
                                </tr>
                            </thead>
                            <tbody>
                           
                            
                              
                            </tbody>
                        </table>
                    </div>
                    <div id="body-form" style="display: none">
                        <form method="POST" action="welcome/add_wel" class="form-horizontal" id="form-tambah"  enctype="multipart/form-data">
                        {{csrf_field()}}
                            <input readonly hidden type="text" name="flag_edit" id="flag_edit">
                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Kode Barang</label>
                                    <div class="col-md-5">
                                        <input id="kode_barang" type="text" name="satu" placeholder="Ex : 4T-C60AH1X"class="form-control" required>
                                        <small style="color: red; display: none;" id="att-kode-barang">Kode barang sudah digunakan</small>
                                    </div>
                                </div>
                            </div>
                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Deskripsi</label>
                                    <div class="col-md-5">
                                        <input id="nama_barang" type="text" name="dua" placeholder="Ex : TV 14 Inch"class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Harga Barang</label>
                                    <div class="col-md-5">
                                        <input id="harga_barang" type="text" name="tiga" placeholder="Rp. 0"class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3"></label>
                                    <div class="col-md-5">
                                        <button type="submit" class="btn btn-info" id="btn-save"><strong>Simpan</strong></button>
                                        <button type="button" class="btn btn-danger" id="btn-batal"><strong>Batal</strong></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</div>