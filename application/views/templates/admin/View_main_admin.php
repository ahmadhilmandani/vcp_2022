<?php if ($data_click_sidebar == 0) : ?>
    <div id="beranda-konten" data-click-sidebar="0">
        <h1 class="text-primary mb-4">Hai, Ahmad Hilman Dani</h1>
    </div>
    <div class="p-5 border border-grey-light-custom" style="width: 60%;">
        <h3 class="text-primary mb-4">Daftar Vaksin keempat</h3>
        <input class="mb-4 border border-grey-custom rounded-1 text-grey-custom d-block w-75 p-2 " type="date" name="tanggal-vaksin" placeholder="Pilih tanggal" required>
        <button class="btn bg-info px-4 py-2 d-block w-50" type="date" placeholder="Pilih tanggal" required>Daftar Vaksin</button>
    </div>
    </div>

<?php else : ?>
    <div id="beranda-konten" data-click-sidebar="<?= $data_click_sidebar ?>" onclick="clickSidebar(1)">
        <h1 class="text-primary">Vaksin <?= $vaksin_keberapa ?></h1>
    </div>
    <div class="w-75 h-auto p-4 bg-white border-1 border-grey-custom">
        <h3 class="text-info mb-2"><?= $nama_vaksin ?></h3>
        <!-- <input class="mb-2 bg-white border-1 border-grey-custom text-grey-custom" type="date" name="tanggal-vaksin" placeholder="Pilih tanggal" required>
    <button class="bg-info p-4" type="date" placeholder="Pilih tanggal" required>Daftar Vaksin</button> -->
    </div>
<?php endif; ?>