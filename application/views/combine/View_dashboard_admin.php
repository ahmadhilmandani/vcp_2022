<section class="container-fluid">

    <button class="btn btn-primary d-inline-block d-md-none mt-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
        <i class="bi bi-list text-white"></i>
    </button>

    <div class="row vh-100 bg-white-custom">

        <div class="offcanvas-start p-0 col-xl-2 col-md-3 border-1 border-end border-grey-light-custom" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">

            <section class="offcanvas-header">
                <button type="button" class="btn-close d-inline-block d-md-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </section>
            <!-- JANGAN LUPA KASIH PENGECAKAN SESSION YANG DI SET BERNILAI ADMIN ATAU USER -->
            <?= $sidebar_admin ?>

        </div>

        <div class="container-lg col-xl-10 col-md-9 d-sm-block mt-5 ps-5">
            <!-- JANGAN LUPA KASIH PENGECAKAN SESSION YANG DI SET BERNILAI ADMIN ATAU USER -->
            <?= $main_admin ?>

        </div>


</section>
<script src="<?= base_url("asset/js/sidebarToggle.js?v.2") ?>" ?></script>

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#tableVaksin').DataTable({
            responsive: true,
            processing: true,


        });
    });
</script>