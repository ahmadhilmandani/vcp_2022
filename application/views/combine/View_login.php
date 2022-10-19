<main class="container-fluid" style="height: 100vh;">
    <div class="row" style="height: 100vh;">
        <div class="col-lg-7 d-flex justify-content-center align-items-center">
            <div class="container-lg row">
                <div class="col-md-8 m-auto">
                    <div class="">
                        <img src="<?= base_url("asset/img/logo_bg_hilang.png") ?>" alt="logo ayok vaksin" style="width: 310px;" class="mb-2">
                    </div>

                    <form action="" method="POST">
                        <div class="row">
                            <div class="mt-3 col-lg-9">
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
                            <p class="text-center">belum punya akun? <a href="<?= base_url('C_register') ?>" class="text-dark">daftar disini!</a></p>
                        </div>
                    </div>
                </div>

            </div>


            <!-- <img src="<?= base_url('asset/img/green-plus.png') ?>" class="position-absolute d-none d-lg-block" style="width: 20px; top:100px; left:150px;"> 
            <img src="<?= base_url('asset/img/green-plus.png') ?>" class="position-absolute d-none d-lg-block" style="width: 10px; top:240px; right:5px;">
            <img src="<?= base_url('asset/img/green-plus.png') ?>" class="position-absolute d-none d-lg-block" style="width: 20px; top:260px; right:30px;">
            <img src="<?= base_url('asset/img/green-plus.png') ?>" class="position-absolute d-none d-lg-block" style="width: 30px; top:300px; right:5px;"> -->
        </div>

        <div class="col-5 p-0">
            <div class="w-100 h-100 position-relative d-none d-lg-block" style="background-image: url(<?= base_url('asset/img/gradient-bg-miring.png') ?>); background-repeat:no-repeat;">
                <img src="<?= base_url('asset/img/orang-senyum.png') ?>" class="position-absolute d-none d-lg-block bottom-0 end-0" style="width: 490px;">
            </div>
        </div>
    </div>
</main>