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
        <div class="p-5 border border-grey-light-custom" style="width: 100%; max-width: 600px;">
            <h3 class="text-primary mb-4">Daftar Vaksin <?= $this->session->userdata('daftar_vaksin') ?></h3>
            <form action="<?= base_url("C_dashboard/daftar_user") ?>" method="POST">
                <input class="mb-4 border border-grey-custom rounded-1 text-grey-custom d-block w-75 p-2 " type="date" name="tanggal-vaksin" placeholder="Pilih tanggal" required>
                <button class="btn bg-info px-4 py-2 d-block w-50">Daftar Vaksin</button>
            </form>
        </div>
        <!-- JIKA USER SUDAH DAFTAR VAKSIN -->
    <?php else : ?>
        <p><?= date('d', (strtotime($this->session->userdata('tanggal_vaksin'))) - time()) ?> Hari menuju Vaksin</p>
        <div class="p-5 border border-grey-light-custom mb-4" style="width: 100%; max-width: 600px;">
            <h3 class="text-primary mb-4">Tiket Vaksin <?= $this->session->userdata('dosis') ?></h3>
            <div class="container-fluid">
                <div class="row position-relative">
                    <div class="col">
                        <h6 class="h6 fst-italic text-grey-custom fw-light">Nama</h6>
                        <p class=""><?= $this->session->userdata('nama') ?></p>
                    </div>

                    <div class="col position-absolute top-0 end-0">
                        <h6 class="h6 fst-italic text-grey-custom fw-light  text-end">Nomor Antrian</h6>
                        <p class="text-end" style="font-size: 50px;">
                            <?php
                            if ($this->session->userdata('nomor_antrian') < 10) {
                                echo '00';
                            } else if ($this->session->userdata('nomor_antrian') >= 10 && $this->session->userdata('nomor_antrian') < 100) {
                                echo '0';
                            }
                            echo $this->session->userdata('nomor_antrian') - 1;
                            ?>
                        </p>
                    </div>
                </div>
                <div>
                    <h6 class="h6 fst-italic text-grey-custom fw-light">Tanggal</h6>
                    <p class=""><?= $this->session->userdata('tanggal_vaksin') ?></p>
                </div>
                <div>
                    <h6 class="h6 fst-italic text-grey-custom fw-light">Temppat</h6>
                    <p class=""><?= $this->session->userdata('tempat_vaksin') ?></p>
                </div>
            </div>
        </div>
        <button class="btn bg-info px-4 py-2 d-block w-50">Download Tiket Vaksin</button>
    <?php endif; ?>

<?php else : ?>
    <div id="beranda-konten" data-click-sidebar="<?= $data_click_sidebar ?>">
        <h1 class="text-primary">Vaksin <?= $vaksin_keberapa ?></h1>
    </div>
    <div class="w-75 h-auto p-4 bg-white border-1 border-grey-custom">
        <h3 class="text-info mb-2"><? var_dump($nama_vaksin) ?></h3>
    </div>
<?php endif; ?>