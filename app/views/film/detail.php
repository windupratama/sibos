<section class="container mt-5">
    <div class=" row my-3">
        <div class="col-12 d-flex align-items-center">
            <a href="<?=BASEURL;?>/film" class="text-decoration-none">
                <i class="fas fa-arrow-alt-circle-left text-warning me-2"></i>
            </a>
            <h5 class="fw-bold text-danger mb-0">Detail Film</h5>
        </div>
    </div>
    <hr>
    <div class="row my-3">
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-2">
            <img src="<?= BASEURL; ?>/img/film-4.png" class="img-fluid" alt="image-detail">
        </div>
        <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Judul Film : <?= $data['film']['judul'] ?></h5>
                    <p class="card-text">Deskripsi :
                        <br>
                        <?= $data['film']['deskripsi'] ?>
                    </p>
                    <p class="card-text">Tahun Rilis : <small class="text-muted"><?= $data['film']['tahun_rilis'] ?></small></p>
                </div>
            </div>
        </div>
    </div>
</section>