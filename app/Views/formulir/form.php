<?php $this->extend('layout/template'); ?>

<?php $this->section('content'); ?>
<div class="container">
    <form action="/regi/proses" method="POST">
        <div class="row mt-5">

            <div class="col-6 mx-auto p-3 border">
                <h2>DATA DIRI</h2>
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">NAMA</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">NIM</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="nim">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">EMAIL</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" name="email">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">PASSWORDD</label>
                            <input type="password" class="form-control" id="exampleFormControlInput1" name="password">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">ALAMAT</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="alamat">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">TEMPAT LAHIR</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="tempat-lahir">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">TGL LAHIR</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1" name="tanggal-lahir">
                        </div>
                    </div>
                    <div class="col-6">
                        <div>
                        <label  class="form-label">JENIS KELAMIN</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis-kelamin" id="flexRadioDefault1" value="Laki-laki">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Laki-Laki
                            </label>
                        </div>
                        <div class="form-check">

                            <input class="form-check-input" type="radio" name="jenis-kelamin" id="flexRadioDefault2" checked value="Perempuan">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Perempuan
                            </label>
                        </div>
                    </div>
                </div>


                <div class="mb-3">
                    <button type="submit" class="btn btn-primary" id="insert">KIRIM</button>
                </div>
            </div>
        </div>
    </form>

</div>

<?php $this->endSection(); ?>