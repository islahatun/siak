<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
    <div class="card">
        <div class="card-body">
            <form>
                <div class="row">
                    <div class="col">
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="inputnama" hidden name="id_pengguna">
                        </div>
                        <div class="form-group row">
                            <label for="inputnama" class="col-sm-4 col-form-label">Nama</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnama" nama="nama">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="jk">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Tempat, Tanggal Lahir</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="ttl">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Kewarganegaraan</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="kewarganegaraan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Agama</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="agama">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Status Perkawinan</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" nama="status_perkawinan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Pekerjaan</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="pekerjaan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Pendidikan</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="pendidikan">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group row">
                            <label for="inputnik" class="col-sm-4 col-form-label">Alamat Asal</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputnik" name="alamat_asal">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputjk" class="col-sm-4 col-form-label">NIK</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputjk" name="nik">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Pindah ke</label>
                            <div class="col-sm-7">
                                <div class="row">
                                    <div class="col">
                                        <label for="inputPassword" class="col-form-label">Alamat</label>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" id="inputPassword" name="alamat_pindah">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-7">
                                <div class="row">
                                    <div class="col">
                                        <label for="inputPassword" class="col-form-label">Rt/Rw</label>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" id="inputPassword" name="rt/rw_pindah">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-7">
                                <div class="row">
                                    <div class="col">
                                        <label for="inputPassword" class="col-form-label">Kel/Desa</label>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" id="inputPassword" name="desa_pindah">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-7">
                                <div class="row">
                                    <div class="col">
                                        <label for="inputPassword" class="col-form-label">Kecamatan</label>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" id="inputPassword" name="kecamatan_pindah">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-7">
                                <div class="row">
                                    <div class="col">
                                        <label for="inputPassword" class="col-form-label">Kab/Kota</label>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" id="inputPassword" name="kabupaten/kota_pindah">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-7">
                                <div class="row">
                                    <div class="col">
                                        <label for="inputPassword" class="col-form-label">Provinsi</label>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" id="inputPassword" name="provinsi_pindag">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Alasan Pindah</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputPassword" name="alasan_pindah">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label for="">Pengikut :</label>
                    <div class="col">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>
                                        <button class="btn btn-danger">Tidak Ikut</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="container-fluid text-right">
                    <button class="btn btn-dark mb-5">Kirim</button>
                </div>
            </form>

        </div>
    </div>

    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- Button trigger modal -->