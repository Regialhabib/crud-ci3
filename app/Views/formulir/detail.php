<?php $this->extend('layout/template'); ?>

<?php $this->section('content'); ?>
<div class="container">
    <a href="/regi/read"><button class="btn btn-primary ">Kembali</button></a>
    <table class="table mt-3 table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Nim</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Alamat</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Jenis Kelamin</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><?= $dataForm['nama'] ?></td>
                <td><?= $dataForm['nim'] ?></td>
                <td><?= $dataForm['email'] ?></td>
                <td><?= $dataForm['password'] ?></td>
                <td><?= $dataForm['alamat'] ?></td>
                <td><?= $dataForm['tempat-lahir'] ?></td>
                <td><?= $dataForm['tanggal-lahir'] ?></td>
                <td><?= $dataForm['jenis-kelamin'] ?></td>

            </tr>

        </tbody>
    </table>
</div>
<?php $this->endSection(); ?>