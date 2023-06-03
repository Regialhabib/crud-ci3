<?php $this->extend('layout/template'); ?>

<?php $this->section('content'); ?>
<div class="container">
    <form action="/regi/prosesUpdate" method="POST">
        <div class="row mt-5">

            <div class="col-6 mx-auto">
                <h2>DATA DIRI</h2>
                <input type="hidden" name="id" value="<?= $dataForm['id'] ?>">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">NAMA</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" required value="<?= $dataForm['nama'] ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">NIM</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nim"value="<?= $dataForm['nim'] ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">EMAIL</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" name="email" value="<?= $dataForm['email'] ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">PASSWORDD</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1" name="password"value="<?= $dataForm['password'] ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">ALAMAT</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="alamat"value="<?= $dataForm['alamat'] ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">TEMPAT LAHIR</label>b
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="tempat-lahir" value="<?= $dataForm['tempat-lahir'] ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">TGL LAHIR</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" name="tanggal-lahir" value="<?= $dataForm['tanggal-lahir'] ?>">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis-kelamin" id="flexRadioDefault1" value="laki-laki" >
                    <label class="form-check-label" for="flexRadioDefault1">
                        Laki-Laki
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis-kelamin" id="flexRadioDefault2" checked value="perempuan">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Perempuan
                    </label>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">KIRIM</button>
                </div>
            </div>
        </div>
    </form>

</div>

<?php $this->endSection(); ?>