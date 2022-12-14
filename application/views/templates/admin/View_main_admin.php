<?php if ($click_sidebar === 0) : ?>
    <div id="beranda-konten" data-click-sidebar="0">
        <h1 class="text-primary mb-4">Hai, <?= $this->session->userdata('nama') ?>!</h1>
    </div>

    <div class="col-lg-9">
        <?= $agenda_vaksin; ?>
        <div class="card mb-5">
            <div class="card-body p-5">
                <h3 class="text-primary mb-4">Agendakan Vaksin!</h3>
                <form action="<?= base_url('C_admin/vaksin_on_progress'); ?>" method="post">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <i><label for="vaksinDosis" class="form-label fs-5 text-muted">Vaksin dosis ke</label></i>
                                <select name="dosis-vaksin" required class="form-select border-0 border-bottom border-3 rounded-0" aria-label="Default select example" id="vaksinDosis" <?= $btn_disable; ?>>
                                    <option value="pertama">Pertama</option>
                                    <option value="kedua">Kedua</option>
                                    <option value="ketiga">Ketiga</option>
                                    <option value="keempat">Keempat</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <i><label for="tanggal-vaksin-mulai" class="form-label fs-5 text-muted">Mulainya Vaksin</label></i>
                                <input type="date" required name="tanggal-mulai" class="form-control border-0 border-bottom border-3 rounded-0" id="tanggal-vaksin-mulai" value="<?= date("Y-m-d"); ?>" <?= $btn_disable; ?>>
                            </div>
                            <div class="mb-3">
                                <i><label for="kuota" class="form-label fs-5 text-muted">Kuota</label></i>
                                <input type="number" required name="kuota" class="form-control border-0 border-bottom border-3 rounded-0" id="kuota" <?= $btn_disable; ?>>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <i><label for="namaVaksin" class="form-label fs-5 text-muted">Nama Vaksin</label></i>
                                <select name="nama-vaksin" required class="form-select border-0 border-bottom border-3 rounded-0" aria-label="Default select example" id="namaVaksin" <?= $btn_disable; ?>>
                                    <option value="sinopharm" selected>Sinopharm</option>
                                    <option value="astrazheneca">AstraZheneca</option>
                                    <option value="sinovac">Sinovac</option>
                                    <option value="moderna">Moderna</option>
                                    <option value="pfizer">Pfizer</option>
                                    <option value="novavax">Novavax</option>
                                    <option value="sputnik-V">Sputnik-V</option>
                                    <option value="janssen">Janssen</option>
                                    <option value="convidencia">Convidencia</option>
                                    <option value="zifivax">Zifivax</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <i><label for="tanggal-vaksin-akhir" class="form-label fs-5 text-muted">Berakhirnya Vaksin</label></i>
                                <input type="date" required name="tanggal-akhir" class="form-control border-0 border-bottom border-3 rounded-0" id="tanggal-vaksin-akhir" value="<?= date("Y-m-d"); ?>" <?= $btn_disable; ?>>
                            </div>
                            <div class="d-grid gap-2 my-5">
                                <button type="submit" class="btn bg-info py-2 fs-5" <?= $btn_disable; ?>>Agendakan</button>
                                <button type='button' class='btn btn-warning <?= $btn_none; ?> py-2 fs-5 mt-3' data-bs-toggle='modal' data-bs-target='#updateTanggal'>
                                    <i class='bi bi-pencil-square'></i> Ubah agenda
                                </button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!-- Modal update data tanggal agenda -->
    <div class="modal fade <?= $btn_none; ?>" id="updateTanggal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="<?= base_url('C_admin/ubah_agenda'); ?>" method="post">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Ubah Agenda vaksin</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="tanggal-vaksin-mulai" class="form-label">Tanggal Mulai Vaksin</label>
                            <input type="date" required name="tanggal-mulai" class="form-control" id="tanggal-vaksin-mulai" value="<?= $tanggal_vaksin['tanggal_vaksin_mulai']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="tanggal-vaksin-akhir" class="form-label">Tanggal Berakhir Vaksin</label>
                            <input type="date" required name="tanggal-akhir" class="form-control" id="tanggal-vaksin-akhir" value="<?= $tanggal_vaksin['tanggal_vaksin_akhir']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="kuota" class="form-label">Kuota</label>
                            <input type="number" required name="kuota" class="form-control" id="kuota" value="<?= $tanggal_vaksin['kuota']; ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger <?= $btn_none; ?>" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-info <?= $btn_none; ?>">Update data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php else : ?>
    <div id="beranda-konten" data-click-sidebar="<?= $click_sidebar ?>" onclick="clickSidebar(1)">
        <h1 class="text-primary">Vaksin <?= ucwords($vaksin_user_ke) ?></h1>


    </div>
    <div class="h-auto py-4 bg-white border-1 border-grey-custom pe-5 container-fluid">
        <form action="<?= base_url('C_admin/input_user_nik_tb_vaksin'); ?>" method="post">
            <div class="row">
                <div class="col-md-9">
                    <div class="mb-3">
                        <input class="form-control form-control-lg" autocomplete="off" name="nik-user" list="datalistOptions" id="exampleDataList" placeholder="Input NIK">
                        <input type="hidden" name="vaksin-user-ke" value="<?= $vaksin_user_ke ?>">
                        <datalist id="datalistOptions">
                            <?php foreach ($suggestion_nik_user_tb_vaksin_on_progress as $row) : ?>
                                <option value="<?= $row['nik_user']; ?>">
                                <?php endforeach; ?>
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
                                <td>Tgl vaksin</td>
                                <td>Nama vaksin</td>
                                <td>L/P</td>
                                <td>Pekerjaan</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody class="border-0">
                            <?php foreach ($getVaksinUser as $row) : ?>
                                <tr>
                                    <td class="text-primary"><?= $row['nik_id_admin']; ?></td>
                                    <td><?= ucwords($row['nama']); ?></td>
                                    <td><?= $row['tanggal_vaksin']; ?></td>
                                    <td><?= ucwords($row['nama_vaksin']); ?></td>
                                    <td><?= ucwords($row['jenis_kelamin']); ?></td>
                                    <td><?= ucwords($row['perkerjaan']); ?></td>
                                    <td>
                                        <form action="<?= base_url('C_admin/delete_uservaksin_by_nik/' . $row['id_vaksin']); ?>" method="post">
                                            <input type="hidden" name="vaksin-user-ke" value="<?= $vaksin_user_ke ?>">
                                            <button type="submit" class="btn btn-outline-danger btn-sm rounded-circle" onclick="return confirm('Yakin akan menghapus data ini?')"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

            </div>

            <!-- tab statistik -->
            <div class="tab-pane fade" id="statistik-data" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                <div class="row">
                    <div class="col-lg-7 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <nav>
                                    <div class="nav nav-tabs border-0" id="nav-tab" role="tablist">
                                        <button class="nav-link nav-statistik active border-0 text-primary fw-bold fs-5" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#pekerjaan" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Pekerjaan</button>
                                    </div>
                                </nav>

                                <div class="my-3">
                                    <?php $i = 0 ?>
                                    <?php foreach ($pertama as $row) : ?>
                                        <?php $i++ ?>
                                        <?php for ($i = 0; $i < sizeof($kedua); $i++) : ?>
                                            <?php $temp = 0 ?>
                                            <?php if ($kedua[$i]['perkerjaan'] == $row['perkerjaan']) : ?>
                                                <?php $tempt = $kedua[$i]["persen"] / $row["persen"] * 100; ?>
                                                <div class="row mb-3 ps-3">
                                                    <div class="col-xl-3 col-md-3">
                                                        <span><?= ucwords($kedua[$i]['perkerjaan']); ?></span>


                                                    </div>
                                                    <div class="col-xl-7 col-md-6 col-sm-12">
                                                        <div class="progress mt-1">
                                                            <div class="progress-bar <?= $i % 2 == 0 ? 'bg-primary' : 'bg-info' ?>" role="progressbar" aria-label="Example with label" style="width: <?= $tempt ?>%;" aria-valuenow="<?= $tempt ?>" aria-valuemin="0" aria-valuemax="100"><small class="d-sm-block d-md-none"><?= $tempt ?>%</small></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2 col-md-3 d-md-block d-none">
                                                        <span><?= $tempt ?>%</span>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        <?php endfor; ?>
                                    <?php endforeach; ?>

                                </div>
                            </div>
                        </div>
                    </div>

                    <article class="col-lg-5">
                        <h4 class="text-primary fw-bold">Data Penduduk Indonesia</h4>

                        <div id="total-penduduk" class="mb-3">
                            <span>Total Penduduk:</span>
                            <div class="d-flex align-items-center" style="color: #5CE6A4;">
                                <h1><i class="bi bi-people-fill me-5"></i></h1>
                                <h2 class="fw-bold">273,5 Juta</h2>
                            </div>
                        </div>

                        <div id="total-penduduk-tervaksin" class="mb-3">
                            <span>Total Penduduk Tervaksin:</span>
                            <div class="d-flex align-items-center text-primary">
                                <h1><i class="bi bi-people-fill me-5"></i></h1>
                                <h2 class="fw-bold">100,1 Juta</h2>
                            </div>
                        </div>

                        <div id="total-penduduk-tervaksin" class="mb-3">
                            <span>Penduduk Tervaksin di rumah sakit ini:</span>
                            <div class="d-flex align-items-center text-info">
                                <h1><i class="bi bi-people-fill me-5"></i></h1>
                                <h2 class="fw-bold"><?= $jumlah_tervaksin[0]['jumlah'] ?> Orang</h2>
                            </div>
                        </div>

                        <!-- card umur and chart js -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-primary fw-bold">Umur</h5>
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>

                    </article>
                </div>
            </div>
            <!-- akhir tab statistik -->

        </div>
    </div>




<?php endif; ?>