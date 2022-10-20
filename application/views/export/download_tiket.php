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
            color: #fefe;
            font-weight: 100;
        }
    </style>

</head>

<body>
    <div class="card">
        <div class="card-body">
            <h1 style="font-size: 34px; color:#1746A2;">Tiket Vaksin <?= $this->session->userdata('dosis') ?></h1>
            <div class="container-fluid">
                <div>
                    <h4 class="fw-light">NIK</h4>
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