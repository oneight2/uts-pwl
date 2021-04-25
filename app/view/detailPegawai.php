<?php
include_once "app/module/pegawai/list.php";
?>
<div class="col-9">
    <div class="container">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mt-5" data-toggle="modal" data-target="#exampleModal">
            Launch demo modal
        </button>
        <div class="card mt-2">
            <div class="card-header">
                Data Pegawai
            </div>
            <div class="card-body">

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Agama</th>
                            <th scope="col">Divisi</th>
                            <th scope="col">Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($pegawai as $row) : ?>
                            <tr>
                                <th scope="row"><?= $no++ ?></th>
                                <td><?= $row['nip']  ?></td>
                                <td><?= $row['nama']  ?></td>
                                <td><?= $row['email']  ?></td>
                                <td><?= $row['agama']  ?></td>
                                <td><?= $row['iddiv']  ?></td>
                                <td><?= $row['foto']  ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>

    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pegawai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">NIP</label>
                            <input type="text" class="form-control" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Nama</label>
                            <input type="text" class="form-control" id="inputPassword4">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Email</label>
                        <input type="email" class="form-control" id="inputAddress">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="agama" id="exampleRadios1" value="Islam" checked>
                            <label class="form-check-label" for="exampleRadios1">Islam
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="agama" id="exampleRadios2" value="Kristen">
                            <label class="form-check-label" for="exampleRadios2">
                                Kristen
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="agama" id="exampleRadios1" value="Hindu" checked>
                            <label class="form-check-label" for="exampleRadios1">Hindu
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="agama" id="exampleRadios2" value="Budha">
                            <label class="form-check-label" for="exampleRadios2">
                                Budha
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="agama" id="exampleRadios2" value="Konghucu">
                            <label class="form-check-label" for="exampleRadios2">
                                Konghucu
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for=" inputState">Divisi</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Tambah</button>
            </div>
            </form>
        </div>
    </div>
</div>