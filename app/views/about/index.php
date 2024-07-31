<section id="about">
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="display-5">SiBOS</h4>
                <hr>
                <p class="">Selamat datang di <span class="fw-bold">SiBOS</span> (Sistem Informasi Bioskop), platform terdepan yang didedikasikan untuk memberikan pengalaman terbaik dalam menikmati dunia perfilman. Kami hadir untuk memudahkan Anda dalam menemukan dan menikmati film-film favorit Anda di berbagai bioskop.</p>
                <p class="">Tunggu jadwal <b><?= $data['nama']; ?></b> disini, karena aplikasi ini <b><?= $data['status']; ?>.</b></p>
            </div>
            <div class="col-lg-3 d-flex mx-1">
                <img src="<?= BASEURL; ?>/img/img-about.png" alt="About Image" class="img-fluid rounded-3 shadow-lg">
            </div>
        </div>
    </div>
    <div class="container-fluid bg-light">
        <div class="container p-1">
            <div class="row mt-5">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="">
                        <h4 class="fw-bold">Visi Kami</h4>
                        <hr>
                    </div>
                    <p class="">
                        Menjadi platform informasi bioskop terpercaya dan terlengkap di Indonesia, yang tidak hanya memberikan kemudahan bagi pengguna tetapi juga meningkatkan pengalaman menonton film di bioskop.
                    </p>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="">
                        <h4 class="fw-bold">Hubungi Kami</h4>
                        <hr>
                    </div>
                    <p class="">
                        Kami selalu terbuka untuk mendengar masukan dan saran dari Anda. Jangan ragu untuk menghubungi kami melalui kontak kami di bawah ini:
                    </p>
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td colspan="2" class="fw-bold">PT. Berkarya Nuansa Indonesia</td>
                                </tr>
                                <tr>
                                    <td><strong>Alamat:</strong></td>
                                    <td>Jl. Merdeka No. 123, Jakarta, Indonesia</td>
                                </tr>
                                <tr>
                                    <td><strong>Telepon:</strong></td>
                                    <td>+62 21 1234 5678</td>
                                </tr>
                                <tr>
                                    <td><strong>Email:</strong></td>
                                    <td>info@sibos.com</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>