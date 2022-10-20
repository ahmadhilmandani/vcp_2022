<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $judul ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous" defer></script>

    <style>

        .card{
            border: 1px solid #98A8F8;
            font-family: Arial, Helvetica, sans-serif;
            padding: 10px;
            border-radius: 10px;
        }
        .text-primary{
            color: #1746A2;
        }
        .fst-italic{
            font-style: italic;
        }
    </style>

</head>

<body>
    <div class="card">
        <div class="card-body">
            <h3 class="text-primary mb-4">Tiket Vaksin <?= $this->session->userdata('dosis') ?></h3>
            <div class="container-fluid">
                <div>
                    <h4 class="h6 fst-italic text-grey-custom fw-light">NIK</h4>
                    <p class=""><?= $this->session->userdata('nik_id_admin') ?></p>
                </div>
                <div class="row position-relative">
                    <div class="col">
                        <h4 class="h6 fst-italic text-grey-custom fw-light">Nama</h4>
                        <p class=""><?= $this->session->userdata('nama') ?></p>
                    </div>

                    <div class="col position-absolute top-0 end-0">
                        <h4 class="h6 fst-italic text-grey-custom fw-light text-end">Nomor Antrian</h4>
                        <p class="text-end" style="font-size: 50px; color: #1746A2;">
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
                    <h4 class="h6 fst-italic text-grey-custom fw-light">Tanggal</h4>
                    <p class=""><?= $this->session->userdata('tanggal_vaksin') ?></p>
                </div>
                <div>
                    <h4 class="h6 fst-italic text-grey-custom fw-light">Tempat</h4>
                    <p class=""><?= $this->session->userdata('tempat_vaksin') ?></p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>