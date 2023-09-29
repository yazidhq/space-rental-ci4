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

                                    <form action="/Lahan/proses_tambah_lahan" method="post" enctype="multipart/form-data">

                                        <div class="mb-3">
                                            <label class="form-label" for="fasilitas_lahan">Fasilitas Lahan</label>
                                            <input class="form-control" type="text" id="fasilitas_lahan" name="fasilitas_lahan" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="luas_lahan">Luas Lahan</label>
                                            <input class="form-control" type="number" id="luas_lahan" name="luas_lahan" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="kategori_lahan">Kategori Lahan</label>
                                            <select class="form-select" aria-label="Default select example" name="kategori_lahan">
                                                <option hidden selected>Pilih kategori</option>
                                                <option>Kios</option>
                                                <option>Retail</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="harga_lahan">Harga Lahan</label>
                                            <input class="form-control" type="number" id="harga_lahan" name="harga_lahan" required>
                                        </div>

                                        <!-- Image Upload -->
                                        <div class="mb-3">
                                            <label class="form-label" for="gambar_lahan">Gambar Rumah</label>
                                            <input class="form-control" type="file" id="gambar_lahan" name="gambar_lahan">
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