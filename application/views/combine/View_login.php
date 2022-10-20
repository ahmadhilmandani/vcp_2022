<main class="container-fluid" style="height: 100vh;">
    <div class="row" style="height: 100vh;">
        <div class="col-lg-7 d-flex justify-content-center align-items-center position-relative" style="height: 100%;">
            <div class="container-lg row">
                <div class="col-md-8 m-auto ">
                    <div class="row">
                        <div class="col-lg-9">
                            <img src="<?= base_url("asset/img/logo_bg_hilang.png") ?>" alt="logo ayok vaksin" style="width: 100%;" class="mb-2">
                            <p class="mt-5 mb-3 mx-auto pb-1 h6 text-muted text-center">Pulih lebih cepat, Bangkit lebih kuat!</p>
                        </div>
                    </div>

                    <form action="" method="POST" class="">
                        <div class="row">
                            <div class="col-lg-9">
                                <input type="text" name="nik" id="nik" placeholder="NIK" class="form-control ">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mt-3 col-lg-9">
                                <input type="password" name="sandi" id="sandi" placeholder="Sandi" class="form-control ">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mt-3 col-lg-9">
                                <button type="submit" name="login" class="btn btn-info px-2 py-1 w-100">Login</button>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="mt-3 col-lg-9">
                            <p class="text-center">belum punya akun? <a href="<?= base_url('C_register') ?>" class="text-dark text-decoration-none" style="width: fit-content;  border-width:0px; border-bottom-width: 2px; border-image: linear-gradient(to right bottom, #76ECF4, #3392F4); border-style:solid;  border-image-slice: 1;">daftar disini!</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <img src="<?= base_url('asset/img/green-plus.png') ?>" class="position-absolute d-none d-lg-block" style="width: 20px; top:100px; left:150px;">
            <img src="<?= base_url('asset/img/green-plus.png') ?>" class="position-absolute d-none d-lg-block" style="width: 10px; top:240px; right:5px;">
            <img src="<?= base_url('asset/img/green-plus.png') ?>" class="position-absolute d-none d-lg-block" style="width: 20px; top:260px; right:30px;">
            <img src="<?= base_url('asset/img/green-plus.png') ?>" class="position-absolute d-none d-lg-block" style="width: 30px; top:300px; right:5px;">

            <img src="<?= base_url('asset/img/green-plus.png') ?>" class="position-absolute d-block d-lg-none" style="width: 30px; bottom:80px; right: 250px;">
            <img src="<?= base_url('asset/img/green-plus.png') ?>" class="position-absolute d-block d-lg-none" style="width: 20px; bottom:40px; right:100px;">
        </div>

        <div class="col-5 p-0">
            <div class="w-100 h-100 position-relative d-none d-lg-block" style="background-image: url(<?= base_url('asset/img/gradient-bg-miring.png') ?>); background-repeat:no-repeat;">
                <img src="<?= base_url('asset/img/orang-senyum.png') ?>" class="position-absolute d-none d-lg-block bottom-0 end-0" style="width: 490px;">
            </div>
        </div>
    </div>
</main>
<section class="W-100 d-flex align-items-center" style="height:80vh; background-image: linear-gradient(to bottom, #76ECF4, #3392F4);">
    <div class="row m-0">
        <div class="col-12 col-lg-4 d-block d-lg-flex align-items-lg-center justify-content-lg-center mt-5 mt-lg-0">
            <div class="m-3 ms-lg-5">
                <h1 class="text-white fw-normal">Daftar vaksin dengan mudah menggunakan <br><strong class="border-bottom border-1 pb-2 ">Ayo Vaksin</strong></h1>
            </div>
        </div>
        <div class="col-12 col-lg-8 d-block d-lg-flex align-items-lg-center justify-content-lg-center mt-lg-0">
            <div class="m-3 ms-lg-5">
                <h3 class="fw-light opacity-25 text-white">01 Seputar Ayo Vaksin</h3>
                <p class="text-white"><strong>Ayo Vaksin</strong> merupakan applikasi berbasis website yang dibagun untuk memudahkan masyarakat Indonesia melakukan vaksin. Selain itu, website ini dibagun untuk memudahkan tenaga medis dalam melakukan pencatatan masyarakat tervaksin.</p>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid p-5" style="height: 100vh;">
    <h1 class="mb-5 text-primary">Alur Pendaftaran Vaksin</h1>
    <div class="row">
        <div class="d-flex align-items-start col-12 col-lg-4 mb-4">
            <div class="d-inline-flex align-items-center justify-content-center fs-2 mb-3 px-3 py-2 card text-light fw-bold bg-info">01</div>
            <div class="ms-3">
                <h6>Belum punya akun? Registrasi dulu!</h6>
                <p>Bila anda pertama kali menggunakan Ayo Vaksin dan belum memiliki akun, silahkan buat akun terlebih dahulu dengan cara mengisi data deng diri yang valid. <a href="<?= base_url('C_register') ?>" class="text-dark text-decoration-none" style="border-width:0px; border-bottom-width: 2px; border-image: linear-gradient(to right bottom, #76ECF4, #3392F4); border-style:solid;  border-image-slice: 1;">daftar disini!</a></p>
            </div>
        </div>
        <div class="d-flex align-items-start col-12 col-lg-4 mb-4">
            <div class="d-inline-flex align-items-center justify-content-center fs-2 mb-3 px-3 py-2 card text-light fw-bold bg-info">02</div>
            <div class="ms-3">
                <h6>Login!</h6>
                <p>Setelah anda memiliki akun, silahkan masukkan menggunakan akun yang telah anda buat sebelumnya.</p>
            </div>
        </div>
        <div class="d-flex align-items-start col-12 col-lg-4 mb-4">
            <div class="d-inline-flex align-items-center justify-content-center fs-2 mb-3 px-3 py-2 card text-light fw-bold bg-info">03</div>
            <div class="ms-3">
                <h6>Daftar Vaksin Bila Tersedia!</h6>
                <p>Bila rumah sakit telah mengagendakan vaksin, maka anda dapat mendaftar di halaman beranda dengan memilih tanggal yang telah diatur oleh pihak rumah sakit</p>
            </div>
        </div>
        <div class="d-flex align-items-start col-12 col-lg-4 mb-4">
            <div class="d-inline-flex align-items-center justify-content-center fs-2 mb-3 px-3 py-2 card text-light fw-bold bg-info">04</div>
            <div class="ms-3">
                <h6>Download tiket vaksin!</h6>
                <p>Download tiket vaksin anda sebab tiket vaksin akan ditunjukkan kepada petugas vaksin bahwa anda telah benar-benar terdaftar vaksin</p>
            </div>
        </div>
        <div class="d-flex align-items-start col-12 col-lg-4 mb-4">
            <div class="d-inline-flex align-items-center justify-content-center fs-2 mb-3 px-3 py-2 card text-light fw-bold bg-info">05</div>
            <div class="ms-3">
                <h6>Datang ke Rumah Sakit Sesuai Jadwal Vaksin dan Jangan Sampai Telat</h6>
                <p>Silahkan datang ke rumah sakit sesuai jadwal vaksin yang telah anda pilih. Jadwal vaksin dapat anda lihat di vaksin yang telah anda download.</p>
            </div>
        </div>
        <div class="d-flex align-items-start col-12 col-lg-4 mb-4">
            <div class="d-inline-flex align-items-center justify-content-center fs-2 mb-3 px-3 py-2 card text-light fw-bold bg-info">06</div>
            <div class="ms-3">
                <h6>Selesai</h6>
                <p>Selamat! Sekali lagi jangan lupa untuk download tiket vaksin sebab akan ditunjukkan kepada petugas vaksin!</p>
            </div>
        </div>
    </div>
</section>