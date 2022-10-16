<main class="container-fluid" style="height: 100vh;">
    <div class="row" style="height: 100vh;">
        <div class="col-7 d-flex justify-content-center align-items-center flex-column position-relative">
            <div>
                <div class="mb-5">
                    <h1>Pulih lebih cepat <br>bangkit lebih kuat!</h1>
                </div>
                <form action="" method="POST">
                    <div class="my-4">
                        <input type="text" name="nik" id="nik" placeholder="NIK" class="px-2 py-1 w-75">
                    </div>
                    <div class="my-4">
                        <input type="password" name="sandi" id="sandi" placeholder="Sandi" class="px-2 py-1 w-75">
                    </div>
                    <button type="submit" name="login" class="btn btn-info px-2 py-1 w-75">Login</button>
                </form>
                <p class="my-4 w-75 text-center">belum punya akun? <a href="<?= base_url('C_register') ?>" class="text-dark">daftar disini!</a></p>
            </div>
            <img src="<?= base_url('asset/img/green-plus.png') ?>" class="position-absolute" style="width: 20px; top:100px; left:150px;">
            <img src="<?= base_url('asset/img/green-plus.png') ?>" class="position-absolute" style="width: 10px; top:240px; right:5px;">
            <img src="<?= base_url('asset/img/green-plus.png') ?>" class="position-absolute" style="width: 20px; top:260px; right:30px;">
            <img src="<?= base_url('asset/img/green-plus.png') ?>" class="position-absolute" style="width: 30px; top:300px; right:5px;">
        </div>

        <div class="col-5 p-0">
            <div class="w-100 h-100 position-relative" style="background-image: url(<?= base_url('asset/img/gradient-bg-miring.png') ?>);">
                <img src="<?= base_url('asset/img/orang-senyum.png') ?>" class="position-absolute bottom-0 end-0" style="width: 490px;">
            </div>
        </div>
    </div>
</main>