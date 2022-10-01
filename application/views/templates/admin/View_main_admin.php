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
                        <button class="btn btn-info btn-lg" type="submit">Tambah</button>
                    </div>
                </div>
            </div>
        </form>

        <!-- table data vaksin pertama -->
        <ul class="nav nav-tabs my-4" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link nav-tab-link fs-4 border-0 active text-primary border-bottom border-primary border-2 " id="vaksin-tab" data-bs-toggle="tab" data-bs-target="#vaksin-pasien" type="button" role="tab" aria-controls="vaksin-pasien" aria-selected="true">
                    Pasien Tervaksin
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-muted nav-tab-link fs-4 border-0 " id="statstik-tab" data-bs-toggle="tab" data-bs-target="#statistik-data" type="button" role="tab" aria-controls="statistik-data" aria-selected="false">
                    Statistik Data
                </button>
            </li>

        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="vaksin-pasien" role="tabpanel" aria-labelledby="home-tab" tabindex="0">

                <div class="table-responsive py-2">
                    <table class="table table-striped table-hover table-borderless border-0" id="tableVaksin">
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
                        <tbody class="border-0">
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

            <!-- tab statistik -->
            <div class="tab-pane fade" id="statistik-data" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                <div class="card">
                    <div class="card-body">
                        <nav>
                            <div class="nav nav-tabs border-0" id="nav-tab" role="tablist">
                                <button class="nav-link nav-statistik active border-0 text-primary border-bottom fw-bold" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#umur" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Umur</button>
                                <button class="nav-link nav-statistik text-muted border-0" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#pekerjaan" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Pekerjaan</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">

                            <!-- tab statistik Umur -->
                            <div class="tab-pane fade show active" id="umur" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                                <div class="mx-5 my-5">

                                    <div class="row mb-3">
                                        <div class="col-xl-11 col-md-9 col-sm-12">
                                            <div class="progress mt-1">
                                                <div class="progress-bar bg-info" role="progressbar" aria-label="Example with label" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><small class="d-sm-block d-md-none">25%</small></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-1 col-md-3 d-md-block d-none">
                                            <span><small>25%</small></span>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-xl-11 col-md-9 col-sm-12">
                                            <div class="progress mt-1">
                                                <div class="progress-bar" role="progressbar" aria-label="Example with label" style="width: 55%; background-color: #42A5AB;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"><small class="d-sm-block d-md-none">55%</small></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-1 col-md-3 d-md-block d-none">
                                            <span><small>55%</small></span>
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <div class="col-xl-11 col-md-9 col-sm-12">
                                            <div class="progress mt-1">
                                                <div class="progress-bar bg-info" role="progressbar" aria-label="Example with label" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"><small class="d-sm-block d-md-none">35%</small></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-1 col-md-3 d-md-block d-none">
                                            <span><small>35%</small></span>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-xl-11 col-md-9 col-sm-12">
                                            <div class="progress mt-1">
                                                <div class="progress-bar" role="progressbar" aria-label="Example with label" style="width: 75%; background-color: #42A5AB;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><small class="d-sm-block d-md-none">75%</small></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-1 col-md-3 d-md-block d-none">
                                            <span><small>75%</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- akhir tab statistik umur -->

                            <!-- tab statistik pekerjaan -->
                            <div class="tab-pane fade" id="pekerjaan" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">

                                <div class="mx-5 my-5">

                                    <div class="row mb-3">
                                        <div class="col-xl-11 col-md-9 col-sm-12">
                                            <div class="progress mt-1">
                                                <div class="progress-bar" role="progressbar" aria-label="Example with label" style="width: 75%; background-color: #42A5AB;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><small class="d-sm-block d-md-none">75%</small></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-1 col-md-3 d-md-block d-none">
                                            <span><small>75%</small></span>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-xl-11 col-md-9 col-sm-12">
                                            <div class="progress mt-1">
                                                <div class="progress-bar bg-info" role="progressbar" aria-label="Example with label" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><small class="d-sm-block d-md-none">25%</small></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-1 col-md-3 d-md-block d-none">
                                            <span><small>25%</small></span>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-xl-11 col-md-9 col-sm-12">
                                            <div class="progress mt-1">
                                                <div class="progress-bar" role="progressbar" aria-label="Example with label" style="width: 55%; background-color: #42A5AB;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"><small class="d-sm-block d-md-none">55%</small></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-1 col-md-3 d-md-block d-none">
                                            <span><small>55%</small></span>
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <div class="col-xl-11 col-md-9 col-sm-12">
                                            <div class="progress mt-1">
                                                <div class="progress-bar bg-info" role="progressbar" aria-label="Example with label" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"><small class="d-sm-block d-md-none">35%</small></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-1 col-md-3 d-md-block d-none">
                                            <span><small>35%</small></span>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-xl-11 col-md-9 col-sm-12">
                                            <div class="progress mt-1">
                                                <div class="progress-bar" role="progressbar" aria-label="Example with label" style="width: 85%; background-color: #42A5AB;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><small class="d-sm-block d-md-none">85%</small></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-1 col-md-3 d-md-block d-none">
                                            <span><small>85%</small></span>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <!-- akhir statistik pekerjaan -->

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php endif; ?>