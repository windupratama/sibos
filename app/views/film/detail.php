<section class="container mt-5">
    <div class="my-3">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/film">Film</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL; ?>/bioskop">Bioskop</a>
            </li>
        </ul>
    </div>
    <hr>
    <h4 class="fw-bold"> User Aktif : <?= $data['nama'] ?></h4>
    <div class="row my-3">
        <div class="col-4">
            <img src="<?= BASEURL; ?>/img/film-4.png" class="img-fluid image-detail" alt="image-detail">
        </div>
        <div class="col">
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