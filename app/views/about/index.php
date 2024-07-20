<section class="container my-5">
    <div class="row">
        <div class="col-lg-9">
            <h3 class="display-5">Tentang Aplikasi</h3>
            <hr>
            <p class="lead">Aplikasi ini dapat memberikan informasi tentang film, jadwal film dan informasi bioskop.</p>
            <p class="fs-5">Tunggu jadwal <b><?= $data['nama']; ?></b> disini, karena aplikasi ini <b><?= $data['status']; ?></b></p>
        </div>
        <div class="col-lg-3 d-flex mx-1">
            <img src="<?= BASEURL; ?>/img/img-about.png" alt="About Image" class="img-fluid rounded-3 shadow-lg">
        </div>
    </div>
</section>