<?php if ($click_sidebar === 0) : ?>
    <div id="beranda-konten" data-click-sidebar="0">
        <h1 class="text-primary mb-4">Hai, Ahmad Hilman Dani</h1>
    </div>
    <div class="p-5 border border-grey-light-custom" style="width: 60%;">
        <h3 class="text-primary mb-4">Daftar Vaksin keempat</h3>
        <input class="mb-4 border border-grey-custom rounded-1 text-grey-custom d-block w-75 p-2 " type="date" name="tanggal-vaksin" placeholder="Pilih tanggal" required>
        <button class="btn bg-info px-4 py-2 d-block w-50" type="date" placeholder="Pilih tanggal" required>Daftar Vaksin</button>
    </div>


<?php else : ?>
    <div id="beranda-konten" data-click-sidebar="<?= $click_sidebar ?>" onclick="clickSidebar(1)">
        <h1 class="text-primary">Vaksin <?= $vaksin_user_ke ?></h1>

    </div>
    <div class="h-auto py-4 bg-white border-1 border-grey-custom pe-5">
        <!-- <h3 class="text-info mb-2"><?= $jenis_vaksin ?></h3> -->
        <form action="" method="post">
            <div class="row">
                <div class="col-md-9">
                    <div class="mb-3">
                        <input class="form-control form-control-lg" list="datalistOptions" id="exampleDataList" placeholder="Input NIK">
                        <datalist id="datalistOptions">
                            <option value="35121109010002">
                            <option value="35122109210032">
                            <option value="35122110210012">
                            <option value="35122210410029">
                            <option value="35122510410029">
                        </datalist>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="d-grid gap-2">
                        <button class="btn btn-info btn-lg" type="button">Tambah</button>
                    </div>
                </div>
            </div>
        </form>

        <!-- table data vaksin pertama -->
        <ul class="nav nav-tabs my-4" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link fs-4 active border-0 border-bottom border-primary border-2 " id="home-tab" data-bs-toggle="tab" data-bs-target="#vaksin-pasien" type="button" role="tab" aria-controls="vaksin-pasien" aria-selected="true">
                    Pasien Tervaksin
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link fs-4 border-0 " id="profile-tab" data-bs-toggle="tab" data-bs-target="#statistik-data" type="button" role="tab" aria-controls="statistik-data" aria-selected="false">
                    Statistik Data
                </button>
            </li>

        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="vaksin-pasien" role="tabpanel" aria-labelledby="home-tab" tabindex="0">

                <div class="table-responsive m-4">
                    <table class="table table-striped table-hover" id="tableVaksin">
                        <thead style="color: #ADADAD;">
                            <tr>
                                <td>NIK</td>
                                <td>Nama</td>
                                <td>Tgl Lahir</td>
                                <td>Kab.</td>
                                <td>L/P</td>
                                <td>Pekerjaan</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-primary">3529121109010002</td>
                                <td>RIfan</td>
                                <td>11/09/01</td>
                                <td>Sumenep</td>
                                <td>L</td>
                                <td>Mahasiswa</td>
                                <td><button class="btn btn-outline-danger btn-sm rounded-circle"><i class="bi bi-trash"></i></button></td>
                            </tr>
                            <tr>
                                <td class="text-primary">3529121109010002</td>
                                <td>RIfan</td>
                                <td>11/09/01</td>
                                <td>Sumenep</td>
                                <td>L</td>
                                <td>Mahasiswa</td>
                                <td><button class="btn btn-outline-danger btn-sm rounded-circle"><i class="bi bi-trash"></i></button></td>
                            </tr>




                        </tbody>
                    </table>
                </div>

            </div>
            <div class="tab-pane fade" id="statistik-data" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">Statistik Data</div>

        </div>
    </div>
<?php endif; ?>