<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Donwload Tiket</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../../asset/img/logo_bg_hilang.png" type="image/icon type">

    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: sans-serif;
        }

        .card {
            padding: 30px;
            border-radius: 10px;
        }

        .text-primary {

            color: #3392F4;
        }

        .fst-italic {
            color: #B2B2B2;
            font-weight: 100;
            font-style: italic;
        }

        .nama_user {
            max-height: 60px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>

</head>

<body>
    <div class="card">
        <div class="card-body">
            <h1 class="text-primary" style="font-size: 34px; margin-bottom: 24px;">Tiket Vaksin <?= $this->session->userdata('dosis') ?></h1>
            <div class="container-fluid">
                <div style="margin-bottom: 24px;">
                    <h4 class="fst-italic" style="margin-bottom: 8px;">NIK</h4>
                    <p class=""><?= $this->session->userdata('nik_id_admin') ?></p>
                </div>
                <div style="margin-bottom: 24px; position:relative;">
                    <div style="width: 150px;">
                        <h4 class="h6 fst-italic text-grey-custom fw-light" style="margin-bottom: 8px;">Nama</h4>
                        <p class="nama_user"><?= $this->session->userdata('nama') ?></p>
                    </div>

                    <div style="position:absolute; top:0; right:0;">
                        <h4 class="fst-italic" style="text-align: right; margin-bottom: 8px;">Nomor Antrian</h4>
                        <p class="text-primary" style="font-size: 60px;">
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
                <div style="margin-bottom: 24px;">
                    <h4 class="h6 fst-italic text-grey-custom fw-light" style="margin-bottom: 8px;">Tanggal</h4>
                    <p class=""><?= $this->session->userdata('tanggal_vaksin') ?></p>
                </div>
                <div style="margin-bottom: 24px;">
                    <h4 class="h6 fst-italic text-grey-custom fw-light" style="margin-bottom: 8px;">Tempat</h4>
                    <p class=""><?= $this->session->userdata('tempat_vaksin') ?></p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>