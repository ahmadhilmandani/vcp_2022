<section class="container-fluid">

  <button class="btn btn-primary d-inline-block d-md-none mt-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
    <i class="bi bi-list text-white"></i>
  </button>



  <div class="row vh-100 bg-white-custom">

    <div class="offcanvas-start p-0 col-2 border-1 border-end border-grey-light-custom" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">

      <section class="offcanvas-header">
        <button type="button" class="btn-close d-inline-block d-md-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </section>
      <?= $sidebar_user ?>

    </div>

    <div class="container-lg col-12 col-md-10 d-sm-block mt-5 ps-lg-5">
      <?= $vaksin_user ?>


    </div>


</section>
<script src="<?= base_url("asset/js/sidebarToggle.js") ?>" ?></script>