<section class="container">
    <!-- <h4 class="fw-bold"> User : <?= $data['nama'] ?></h4> -->
    <div class="row my-3">
        <div class="card">
            <div class="my-2 alert-message">
                <?php Notification::alert(); ?>
            </div>
            <div class="card-header bg-warning mt-2">
                <h5 class="card-title mb-0">Daftar Film</h5>
                <form action="<?= BASEURL; ?>/film/cari" method="post">
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control form-control-sm bg-light" name="keyword" placeholder="cari film/genre/tahun rilis" autocomplete="off">
                        <span class="input-group-text">
                            <button type="submit" class="btn btn-sm btn-danger" id="cariFilm">Cari</button>
                        </span>
                    </div>
                </form>
            </div>
            <div class="card-body">
                <?php if (isset($_SESSION['user'])): ?>
                <div class="text-end">
                    <button type="button" class="btn btn-sm btn-primary me-2" data-bs-toggle="modal" data-bs-target="#tambahData">
                        Tambah Data
                    </button>
                </div>
                <?php endif; ?>
                <div class="table-responsive table-sm p-2" style="max-height: 400px;">
                    <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="bg-light">
                            <tr>
                                <th>No</th>
                                <th>Judul Film</th>
                                <th>Genre</th>
                                <th>Durasi</th>
                                <th>Tahun Rilis</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $no = 1;
                            foreach ($data['film'] as $film) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $film['judul'] ?></td>
                                    <td><?= $film['genre'] ?></td>
                                    <td><?= $film['durasi'] ?> menit</td>
                                    <td><?= $film['tahun_rilis'] ?></td>
                                    <td><?= $film['deskripsi'] ?></td>
                                    <td>
                                        <?php if (isset($_SESSION['user'])): ?>
                                            <button class="btn btn-warning btn-sm btn-edit m-1" data-id="<?= $film['id'] ?>" data-judul="<?= $film['judul'] ?>" data-genre="<?= $film['genre'] ?>" data-durasi="<?= $film['durasi'] ?>" data-tahun-rilis="<?= $film['tahun_rilis'] ?>" data-deskripsi="<?= $film['deskripsi'] ?>">
                                                Edit
                                            </button>
                                            <button class="btn btn-danger btn-sm btn-hapus m-1" data-id="<?= $film['id'] ?>">
                                                Hapus
                                            </button>
                                        <?php endif; ?>
                                        <a href="<?= BASEURL; ?>/film/detail/<?= $film['id'] ?>" class="btn btn-info btn-sm btn-detail m-1">Detail</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Tambah -->
    <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header bg-warning text-white">
                    <h1 class="modal-title fs-5"> Tambah Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= BASEURL; ?>/film/tambah" id="formTambah" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="judulFilm" class="form-label fw-bold">Judul Film</label>
                            <input type="text" class="form-control form-control-sm" id="judulFilm" name="judul" placeholder="ketik judul film.." autocomplete="off" required>
                        </div>
                        <div class="mb-3">
                            <label for="genre" class="form-label fw-bold">Genre</label>
                            <select class="form-control form-control-sm" id="genre" name="genre">
                                <option value="">Pilih genre...</option>
                                <option value="Aksi">Aksi</option>
                                <option value="Komedi">Komedi</option>
                                <option value="Fantasi">Fantasi</option>
                                <option value="Drama">Drama</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="durasi" class="form-label fw-bold">Durasi Film</label>
                            <input type="number" class="form-control form-control-sm" id="durasi" name="durasi" min="0" max="150" placeholder="input durasi.." autocomplete="off" required>
                        </div>
                        <div class="mb-3">
                            <label for="tahun_rilis" class="form-label fw-bold">Tahun Rilis</label>
                            <input type="number" class="form-control form-control-sm" id="tahun_rilis" name="tahun_rilis" min="2000" max="2099" placeholder="input tahun rilis.." autocomplete="off" required>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
                            <input type="text" class="form-control form-control-sm" id="deskripsi" name="deskripsi" placeholder="ketik deskripsi.." autocomplete="off" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Edit -->
    <div class="modal fade" id="editData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header bg-warning text-white">
                    <h1 class="modal-title fs-5"> Edit Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= BASEURL; ?>/film/edit/<?= $film['id'] ?>?_method=put" id="formEdit" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="idFilm" class="form-label fw-bold">Id Film</label>
                            <input type="text" class="form-control form-control-sm id-film" id="idFilm" name="id" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="judulFilm" class="form-label fw-bold">Judul Film</label>
                            <input type="text" class="form-control form-control-sm judul-film" id="judulFilm" name="judul" placeholder="ketik judul film.." autocomplete="off" required>
                        </div>
                        <div class="mb-3">
                            <label for="genre" class="form-label fw-bold">Genre</label>
                            <select class="form-control form-control-sm genre-film" id="genre" name="genre">
                                <option value="">Pilih genre...</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="durasi" class="form-label fw-bold">Durasi Film</label>
                            <input type="number" class="form-control form-control-sm durasi-film" id="durasi" name="durasi" placeholder="input durasi.." autocomplete="off" required>
                        </div>
                        <div class="mb-3">
                            <label for="tahun_rilis" class="form-label fw-bold">Tahun Rilis</label>
                            <input type="number" class="form-control form-control-sm tahun-rilis" id="tahun_rilis" name="tahun_rilis" placeholder="input tahun rilis.." autocomplete="off" required>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
                            <input type="text" class="form-control form-control-sm deskripsi-film" id="deskripsi" name="deskripsi" placeholder="ketik deskripsi.." autocomplete="off" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Hapus -->
    <div class="modal fade" id="hapusData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title">Konfirmasi Hapus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="hapus-data" method="post">
                    <div class="modal-body">
                        <h5> Apakah yakin ingin menghapus data?</h5>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-check-circle"></i>
                            Ya
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script>
    $('#dataTable').on('click', '.btn-edit', function() {
        $('#editData').modal('show');
        let id = $(this).data('id');
        let judul = $(this).data('judul');
        // console.log(judul);
        let genre = $(this).data('genre');
        let durasi = $(this).data('durasi');
        let tahun_rilis = $(this).data('tahun-rilis');
        let deskripsi = $(this).data('deskripsi');

        let optionGenre = `
            <option value="">Pilih genre...</option>
            <option value="Aksi" ${genre === 'Aksi' ? 'selected' : ''}> Aksi </option>
            <option value="Komedi" ${genre == 'Komedi' ? 'selected' : ''}> Komedi </option>
            <option value="Fantasi" ${genre == 'Fantasi' ? 'selected' : ''}> Fantasi </option>
            <option value="Drama" ${genre == 'Drama' ? 'selected' : ''}> Drama </option>
        `;


        $('.id-film').val(id);
        $('.judul-film').val(judul);
        $('.genre-film').html(optionGenre);
        $('.durasi-film').val(durasi);
        $('.tahun-rilis').val(tahun_rilis);
        $('.deskripsi-film').val(deskripsi);
    });

    $('#dataTable').on('click', '.btn-hapus', function() {
        $('#hapusData').modal('show');
        let id = $(this).data('id');
        // console.log(id);
        let url = `<?= BASEURL; ?>/film/hapus/${id}?_method=delete`;
        $('.hapus-data').attr('action', url);
    });

    $(document).ready(function() {
        const time = $('.alert-message').text();
        if (time != '') {
            setTimeout(function() {
                $('.alert-message').fadeOut('slow');
            }, 3000)
        }
    })
</script>