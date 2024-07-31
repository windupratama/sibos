<section class="container">
    <!-- <h4 class="fw-bold"> User : <?= $data['nama'] ?></h4> -->
    <div class="row my-3">
        <div class="card">
            <div class="my-2 alert-message">
                <?php Notification::alert(); ?>
            </div>
            <div class="card-header bg-warning mt-2">
                <h5 class="card-title mb-0">Daftar Bioskop</h5>
                <form action="<?= BASEURL; ?>/bioskop/cari" method="post">
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control form-control-sm bg-light" name="keyword" placeholder="cari nama bioskop" autocomplete="off">
                        <span class="input-group-text">
                            <button type="submit" class="btn btn-sm btn-danger" id="cariBioskop">Cari</button>
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
                                <th>Nama Bioskop</th>
                                <th>Alamat</th>
                                <th>Kota</th>
                                <?php if (isset($_SESSION['user'])): ?>
                                    <th>Aksi</th>
                                <?php endif; ?>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $no = 1;
                            foreach ($data['bioskop'] as $bioskop) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $bioskop['nama'] ?></td>
                                    <td><?= $bioskop['alamat'] ?></td>
                                    <td><?= $bioskop['kota'] ?></td>
                                    <?php if (isset($_SESSION['user'])): ?>
                                        <td>
                                            <button class="btn btn-warning btn-sm btn-edit m-1"
                                                data-id="<?= $bioskop['id'] ?>"
                                                data-nama="<?= $bioskop['nama'] ?>"
                                                data-alamat="<?= $bioskop['alamat'] ?>"
                                                data-kota="<?= $bioskop['kota'] ?>">
                                                Edit
                                            </button>
                                            <button class="btn btn-danger btn-sm hapus-bioskop m-1" data-id="<?= $bioskop['id'] ?>">
                                                Hapus
                                            </button>
                                            <!-- <a href="<?= BASEURL; ?>/bioskop/detail/<?= $bioskop['id'] ?>" class="btn btn-info btn-sm btn-detail m-1">Detail</a> -->
                                        </td>
                                    <?php endif; ?>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Modal Hapus -->
        <div class="modal fade" id="hapusBioskop" tabindex="-1" aria-labelledby="bioskopModalLabel" aria-hidden="true">
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
        <!-- Modal Tambah -->
        <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header bg-warning text-white">
                        <h1 class="modal-title fs-5"> Tambah Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?= BASEURL; ?>/bioskop/tambah" id="formTambah" method="post">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="nama" class="form-label fw-bold">Nama Bioskop</label>
                                <input type="text" class="form-control form-control-sm" id="nama" name="nama" placeholder="ketik nama bioskop.." autocomplete="off" required>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label fw-bold">Alamat Bioskop</label>
                                <input type="text" class="form-control form-control-sm" id="alamat" name="alamat" placeholder="ketik alamat bioskop.." autocomplete="off" required>
                            </div>
                            <div class="mb-3">
                                <label for="kota" class="form-label fw-bold">Kota Bioskop</label>
                                <input type="text" class="form-control form-control-sm" id="kota" name="kota" placeholder="ketik kota bioskop.." autocomplete="off" required>
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
        <div class="modal fade" id="editDataBioskop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header bg-warning text-white">
                        <h1 class="modal-title fs-5"> Edit Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?= BASEURL; ?>/bioskop/edit/<?= $bioskop['id'] ?>?_method=put" id="formEdit" method="post">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="idBioskop" class="form-label fw-bold">Id Bioskop</label>
                                <input type="text" class="form-control form-control-sm id-bioskop" id="idBioskop" name="id" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label fw-bold">Nama Bioskop</label>
                                <input type="text" class="form-control form-control-sm nama-bioskop" id="nama" name="nama" placeholder="ketik nama bioskop.." autocomplete="off" required>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label fw-bold">Alamat Bioskop</label>
                                    <input type="text" class="form-control form-control-sm alamat-bioskop" id="alamat" name="alamat" placeholder="ketik alamat bioskop.." autocomplete="off" required>
                                </div>
                                <div class="mb-3">
                                    <label for="kota" class="form-label fw-bold">Kota Bioskop</label>
                                    <input type="text" class="form-control form-control-sm kota-bioskop" id="kota" name="kota" placeholder="ketik kota bioskop.." autocomplete="off" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $('#dataTable').on('click', '.btn-edit', function() {
        $('#editDataBioskop').modal('show');
        let id = $(this).data('id');
        let nama = $(this).data('nama');
        // console.log(nama);
        let alamat = $(this).data('alamat');
        let kota = $(this).data('kota');

        $('.id-bioskop').val(id);
        $('.nama-bioskop').val(nama);
        $('.kota-bioskop').val(kota);
        $('.alamat-bioskop').val(alamat);
    });

    $('#dataTable').on('click', '.hapus-bioskop', function() {
        $('#hapusBioskop').modal('show');
        let id = $(this).data('id');
        let url = `<?= BASEURL; ?>/bioskop/hapus/${id}?_method=delete`;
        console.log(id);
        $('.hapus-data').attr('action', url);
    });

    $(document).ready(function() {
        const time = $('.alert-message').text();
        if (time != '') {
            setTimeout(function() {
                $('.alert-message').fadeOut('slow');
            }, 3000)
        }
    });
</script>