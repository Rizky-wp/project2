<?= $this->extend('layout/admin'); ?>
<?= $this->section('content'); ?>
<section class="content pt-0">
    <div class="container">
        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
        <div class="row">
            <div class="col p-5 ">
                <span class="judul">Input Data Tanah</span>
            </div>
        </div>
        <div class="row">
            <div class="col p-5 ">
                <?php
                if (isset($pesan)) {
                    if ($pesan == "berhasil") {
                        echo '<div class="alert alert-alert-success text-center" role="alert">
                        Data Berhasil Ditambahkan!
                        </div>';
                    }
                }
                ?>
            </div>
        </div>
        <?php
        if (isset($pesan)) {
            if ($pesan == "gagal") {
                echo '<div class="alert alert-danger text-center" role="alert">
                        Username atau Password salah!
                        </div>';
            }
        }
        ?>
        <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
        <div class="row">
            <div class="col">
                <div class="container-sm">
                    <form method="POST" action="<?= base_url('/admin/submit') ?>">
                        <div class="mb-5">
                            <label for="nama" class="form-label">Nama</label>
                            <input name="nama" type="text" class="form-control" id="nama" aria-describedby="namaData" required>
                            <!-- <div id="namaData" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                        <div class="mb-5">
                            <label for="noSurat" class="form-label">Nomer Surat</label>
                            <input name="noSurat" type="number" class="form-control" id="noSurat" aria-describedby="" required>
                        </div>
                        <div class="mb-5">
                            <label for="noHakMilik" class="form-label">Nomer Hak Milik</label>
                            <input name="noHakMilik" type="text" class="form-control" id="noHakMilik" aria-describedby="" required>
                        </div>
                        <div class="mb-5">
                            <label for="luas" class="form-label">Luas M2</label>
                            <input name="luas" type="number" min="0" class="form-control" id="luas" aria-describedby="" required>
                        </div>
                        <div class="mb-5">
                            <label for="noBerkas" class="form-label">Nomer Berkas</label>
                            <input name="noBerkas" type="text" class="form-control" id="noBerkas" aria-describedby="" required>
                        </div>
                        <div class="mb-5">
                            <label for="daftarIsian" class="form-label">Daftar Isian</label>
                            <input name="daftarIsian" type="text" class="form-control" id="daftarIsian" aria-describedby="" required>
                        </div>
                        <button type="submit" class="btn btn-primary mb-5">Submit</button>
                    </form>
                </div>


            </div>
        </div>
    </div>


    </div>
</section>

<?= $this->endSection(); ?>