<?php if ($data_click_sidebar === 0) : ?>
    <?= $this->session->userdata('flash') ?>
    <h1 class="text-primary mb-4">Hai, <?= $this->session->userdata('nama') ?>!</h1>
    <!-- JIKA USER SUDAH MELAKUKAN VAKSIN -->
    <?php if ($this->session->has_userdata('tidak_vaksin')) : ?>
        <div class="p-5 border border-grey-light-custom" style="width: 100%; max-width: 600px;">
            <i class="bi bi-calendar2-x my-3 text-center d-block text-info" style="font-size: 100px;"></i>
            <h6 class="h6 fw-light text-center"><?= $this->session->userdata('tidak_vaksin') ?></h6>
        </div>

        <!-- JIKA USER BELUM DAFTAR VAKSIN -->
    <?php elseif ($this->session->has_userdata('daftar_vaksin') && !($this->session->has_userdata('nomor_antrian'))) : ?>
        <div class="col-lg-8">
            <div class="card p-4">
                <div class="card-body">
                    <h3 class="text-primary mb-4">Daftar Vaksin <?= $this->session->userdata('daftar_vaksin') ?></h3>
                    <p>Waktu pendaftaraan terakhir: <?= date('d, m Y', strtotime($this->session->userdata('tanggal_vaksin_akhir'))) ?> </p>
                    <form action="<?= base_url("C_dashboard/daftar_user") ?>" method="POST">
                        <div class="col-9">
                            <input class="mb-4 form-control" type="date" name="tanggal-vaksin" placeholder="Pilih tanggal" value="<?= date('Y-m-d'); ?>" required min="<?= date('Y-m-d', strtotime($this->session->userdata('tanggal_vaksin_mulai'))) ?>" max="<?= date('Y-m-d', strtotime($this->session->userdata('tanggal_vaksin_akhir'))) ?>">
                        </div>
                        <div class="d-grid col-md-6 gap-2">
                            <button class="btn bg-info" type="submit">Daftar Vaksin</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- JIKA USER SUDAH DAFTAR VAKSIN -->
    <?php else : ?>
        <?php if (time() < (strtotime($this->session->userdata('tanggal_vaksin')))) : ?>
            <div class="col-lg-7">
                <div class="alert alert-info">
                    <?= date('d', (strtotime($this->session->userdata('tanggal_vaksin'))) - time()) ?> Hari menuju Vaksin
                </div>
            </div>

        <?php else : ?>

            <div class="col-lg-7">
                <div class="alert alert-danger">
                    Anda Telat Vaksin!
                </div>
            </div>

        <?php endif ?>

        <div class="p-5 border border-grey-light-custom mb-4" style="width: 100%; max-width: 600px;">
            <h3 class="text-primary mb-4">Tiket Vaksin <?= $this->session->userdata('dosis') ?></h3>
            <div class="container-fluid">
                <div>
                    <h6 class="h6 fst-italic text-grey-custom fw-light">NIK</h6>
                    <p class=""><?= $this->session->userdata('nik_id_admin') ?></p>
                </div>
                <div class="row position-relative">
                    <div class="col">
                        <h6 class="h6 fst-italic text-grey-custom fw-light">Nama</h6>
                        <p class=""><?= $this->session->userdata('nama') ?></p>
                    </div>

                    <div class="col position-absolute top-0 end-0">
                        <h6 class="h6 fst-italic text-grey-custom fw-light text-end">Nomor Antrian</h6>
                        <p class="text-end" style="font-size: 50px;">
                            <?php
                            if ($this->session->userdata('nomor_antrian') < 10) {
                                echo '00';
                            } else if ($this->session->userdata('nomor_antrian') >= 10 && $this->session->userdata('nomor_antrian') < 100) {
                                echo '0';
                            }
                            echo $this->session->userdata('nomor_antrian');
                            ?>
                        </p>
                    </div>
                </div>
                <div>
                    <h6 class="h6 fst-italic text-grey-custom fw-light">Tanggal</h6>
                    <p class=""><?= $this->session->userdata('tanggal_vaksin') ?></p>
                </div>
                <div>
                    <h6 class="h6 fst-italic text-grey-custom fw-light">Tempat</h6>
                    <p class=""><?= $this->session->userdata('tempat_vaksin') ?></p>
                </div>
            </div>
        </div>
        <a href="<?= base_url('C_admin/download_tiket'); ?>" class="btn bg-info px-4 py-2 d-block w-50 mb-5">Download Tiket Vaksin</a>
    <?php endif; ?>

<?php else : ?>
    <div id="beranda-konten" data-click-sidebar="<?= $data_click_sidebar ?>">
        <h1 class="text-primary">Vaksin <?= $vaksin_keberapa ?></h1>
    </div>
    <div class="col-lg-8">
        <?php if ($nama_vaksin) : ?>
            <div class="alert alert-success">
                Terimakasih telah melakukan vaksin dosis <?php echo $nama_vaksin[0]["dosis"] ?>
            </div>
            <div class="card mb-5">
                <div class="card-body p-5 position-relative">
                    <div class="row">
                        <div class="col-lg-7">
                            <p class="text-grey-custom fst-italic m-0 fw-light">Nama :</p>
                            <p class="mb-3 fs-4"><?php echo $this->session->userdata("nama") ?></p>
                            <p class="text-grey-custom fst-italic m-0 fw-light">Nama vaksin :</p>
                            <p class="mb-3 fs-4"><?php echo $nama_vaksin[0]["nama_vaksin"] ?></p>
                            <p class="text-grey-custom fst-italic m-0 fw-light">Tanggal vaksin :</p>
                            <p class="fs-4"><?php echo date("d M Y", strtotime($nama_vaksin[0]["tanggal_vaksin"])) ?></p>
                        </div>
                        <div class="col-lg-5">
                            <img src="<?= base_url("asset/img/centang.png") ?>" alt="centang"" width=" 100%">
                        </div>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <div class="alert alert-danger">
                Anda belum melakukan vaksin
            </div>
            <div class="card mb-5">
                <div class="card-body p-5 position-relative">
                    <div class="row">
                        <div class="col-lg-7">
                            <p class="text-grey-custom fst-italic m-0 fw-light">Nama :</p>
                            <p class="mb-3 fs-4"><?php echo $this->session->userdata("nama") ?></p>
                            <p class="text-grey-custom fst-italic m-0 fw-light">Nama vaksin :</p>
                            <p class="mb-3 fs-4">-</p>
                            <p class="text-grey-custom fst-italic m-0 fw-light">Tanggal vaksin :</p>
                            <p class="fs-4">-</p>
                        </div>
                        <div class="col-lg-5">
                            <img src="<?= base_url("asset/img/silang.png") ?>" alt="centang" width="100%">
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>