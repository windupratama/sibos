<section id="information">
    <div class="container mt-3">
        <div class="row">
            <h3 class="fw-bold">Bioskop Indonesia</h3>
            <p class="text-muted">Akses informasi terkini seputar film-film seru di bioskop kesayangan Anda.</p>
            <div class="my-2 alert-message">
                <?php Notification::alert(); ?>
            </div>
            <hr>
            <?php if (isset($data['nama'])): ?>
                <p class="text-danger">Selamat datang <span class="fw-bold"><?= htmlspecialchars($data['nama'], ENT_QUOTES, 'UTF-8'); ?></span></p>
            <?php endif; ?>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?= BASEURL; ?>/img/ic-film.png" class="img-fluid rounded-start p-2" alt="ic-film">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <a href="<?= BASEURL; ?>/film" class="text-decoration-none">
                                    <h5 class="card-title fw-bold text-danger">Film</h5>
                                </a>
                                <p class="card-text">Lihat selengkapnya.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?= BASEURL; ?>/img/ic-cinema.png" class="img-fluid rounded-start p-2" alt="ic-bioskop">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <a href="<?= BASEURL; ?>/bioskop" class="text-decoration-none">
                                    <h5 class="card-title fw-bold text-danger">Bioskop</h5>
                                </a>
                                <p class="card-text">Lihat selengkapnya.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if (isset($_SESSION['user'])): ?>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="<?= BASEURL; ?>/img/ic-schedule.png" class="img-fluid rounded-start p-2" alt="ic-jadwal">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <a href="<?= BASEURL; ?>/jadwal" class="text-decoration-none">
                                        <h5 class="card-title fw-bold text-danger">Jadwal</h5>
                                    </a>
                                    <p class="card-text">Lihat selengkapnya.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <?php if (isset($_SESSION['user'])): ?>
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="<?= BASEURL; ?>/img/ic-event.png" class="img-fluid rounded-start p-2" alt="ic-film">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <a href="<?= BASEURL; ?>/film" class="text-decoration-none">
                                        <h5 class="card-title fw-bold text-danger">Event</h5>
                                    </a>
                                    <p class="card-text">Lihat selengkapnya.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="<?= BASEURL; ?>/img/ic-ticket.png" class="img-fluid rounded-start p-2" alt="ic-bioskop">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <a href="<?= BASEURL; ?>/bioskop" class="text-decoration-none">
                                        <h5 class="card-title fw-bold text-danger">Pesan Tiket</h5>
                                    </a>
                                    <p class="card-text">Lihat selengkapnya.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</section>
<script>
    $(document).ready(function() {
        const time = $('.alert-message').text();
        if (time != '') {
            setTimeout(function() {
                $('.alert-message').fadeOut('slow');
            }, 3000)
        }
    })
</script>