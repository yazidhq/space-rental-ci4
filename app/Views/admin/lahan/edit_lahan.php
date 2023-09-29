<?php $this->extend('admin/layout/template'); ?>

<?php $this->section('konten'); ?>

<main class="mb-5">
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <section class="clean-block clean-form">
                <div class="p-3 py-3 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-md-12 col-xl-12">
                            <div class="card p-3">

                                <div class="container-fluid mt-4 px-4">

                                    <div class="block-heading">
                                        <h2 id="purple"><strong>Tambah Lahan</strong></h2>
                                        <hr>
                                    </div>

                                    <form action="/Lahan/proses_edit_lahan/<?= $lahan['id_lahan'] ?>" method="post" enctype="multipart/form-data">

                                        <input type="hidden" name="gambarlama" value="<?= $lahan['gambar_lahan'] ?>">

                                        <div class="mb-3">
                                            <label class="form-label" for="fasilitas_lahan">Fasilitas Lahan</label>
                                            <input class="form-control" type="text" id="fasilitas_lahan" name="fasilitas_lahan" value="<?= $lahan['fasilitas_lahan'] ?>">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="luas_lahan">Luas Lahan</label>
                                            <input class="form-control" type="number" id="luas_lahan" name="luas_lahan" value="<?= $lahan['luas_lahan'] ?>">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="kategori_lahan">Kategori Lahan</label>
                                            <select class="form-select" aria-label="Default select example" name="kategori_lahan">
                                                <option hidden selected><?= $lahan['kategori_lahan'] ?></option>
                                                <option>Premium</option>
                                                <option>Standar</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="harga_lahan">Harga Lahan</label>
                                            <input class="form-control" type="number" id="harga_lahan" name="harga_lahan" value="<?= $lahan['harga_lahan'] ?>">
                                        </div>


                                        <div class="mb-3">
                                            <label class="form-label" for="harga_lahan">Status Lahan</label>
                                            <select class="form-select" aria-label="Default select example" name="status_lahan">
                                                <option hidden selected><?= $lahan['status_lahan'] == 1 ? 'Tersedia' : 'Tidak Tersedia' ?></option>
                                                <option value="<?= intval('1') ?>">Tersedia</option>
                                                <option value="<?= intval('0') ?>">Tidak Tersedia</option>
                                            </select>
                                        </div>

                                        <!-- Image Upload -->
                                        <div class="mb-3">
                                            <label class="form-label" for="gambar">Gambar Lahan</label>
                                            <div class="col-sm-12">
                                                <img src="/self-assets/gambar-lahan/<?= $lahan['gambar_lahan']; ?>" class="img-thumbnail img-preview" width="20%">
                                            </div>
                                            <div class="mb-3">
                                                <input class="form-control" type="file" id="gambar_lahan" name="gambar_lahan">
                                            </div>
                                        </div>
                                        <!-- Image -->



                                        <div class="d-grid gap-2">
                                            <button class="btn btn-dark rounded-0" role="button" type="submit">
                                                Simpan
                                            </button>
                                        </div>

                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>

<?php $this->endSection(); ?>