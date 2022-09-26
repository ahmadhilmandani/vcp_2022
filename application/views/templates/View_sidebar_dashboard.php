<section class="container-fluid">

  <button class="btn btn-primary d-inline-block d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
    Toggle static offcanvas
  </button>



  <div class="row vh-100 bg-white-custom">

    <div class="offcanvas-start p-0 col-2 border-1 border-end border-grey-light-custom" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">

      <section class="offcanvas-header">
        <button type="button" class="btn-close d-inline-block d-md-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </section>

      <div class="mt-5 ps-5 py-3 border-5 border-start border-primary" onclick="clickSidebar(0)">
        <a href="#beranda" class="text-secondary fw-bold text-decoration-none">Beranda</a>
      </div>

      <div class="my-1 ps-5 py-3" onclick="clickSidebar(1)">
        <a href="#vaksin-pertama" class="text-grey-custom text-decoration-none">Vaksin pertama</a>
      </div>

      <div class="my-1 ps-5 py-3" onclick="clickSidebar(2)">
        <a href="#vaksin-kedua" class="text-grey-custom text-decoration-none">Vaksin kedua</a>
      </div>

      <div class="my-1 ps-5 py-3" onclick="clickSidebar(3)">
        <a href="#vaksin-ketiga" class="text-grey-custom text-decoration-none">Vaksin ketiga</a>
      </div>

      <div class="my-1 ps-5 py-3" onclick="clickSidebar(4)">
        <a href="#vaksin-keempat" class="text-grey-custom text-decoration-none">Vaksin keempat</a>
      </div>

      <button class="btn my-1 ps-5 py-3 text-grey-custom text-decoration-none" onclick="exit()">exit</button>
    </div>

    <div class="container-lg col-12 col-md-10 d-sm-block mt-5 ps-4">
      <h1 class="text-primary">Hai, Ahmad Hilman Dani</h1>
    </div>
  </div>


</section>
<script src="<?= base_url("asset/js/sidebarToggle.js") ?>"></script>