<span class="d-lg-block d-none d-flex align-items-center mt-5 ps-4" style="width: 150px;">
  <img src="<?= base_url("asset/img/logo_bg_hilang.png") ?>" alt="logo Ayo Vaksin" class="w-100 d-lg-block d-none">
</span>

<div class="d-flex align-items-center mt-4 ps-4 py-2 border-5 border-start border-primary">
    <i class="bi bi-person-circle fs-4 text-secondary"></i>
    <a href="<?= base_url("C_admin/admin") ?>" class="text-secondary fw-bold text-decoration-none ms-3">Admin</a>
</div>


<div class="d-flex align-items-center mt-4 ps-4 py-2">
    <i class="bi bi-1-circle text-grey-custom"></i>
    <a href="<?= base_url("C_admin/admin/pertama") ?>" class="text-grey-custom text-decoration-none ms-3">Vaksin pertama</a>
</div>

<div class="d-flex align-items-center my-2 ps-4 py-2">
    <i class="bi bi-2-circle text-grey-custom"></i>
    <a href="<?= base_url("C_admin/admin/kedua") ?>" class="text-grey-custom text-decoration-none ms-3">Vaksin kedua</a>
</div>

<div class="d-flex align-items-center my-2 ps-4 py-2">
    <i class="bi bi-3-circle text-grey-custom"></i>
    <a href="<?= base_url("C_admin/admin/ketiga") ?>" class="text-grey-custom text-decoration-none ms-3">Vaksin ketiga</a>
</div>

<div class="d-flex align-items-center my-2 ps-4 py-2">
    <i class="bi bi-4-circle text-grey-custom"></i>
    <a href="<?= base_url("C_admin/admin/keempat") ?>" class="text-grey-custom text-decoration-none ms-3">Vaksin keempat</a>
</div>

<a href="<?= base_url('C_dashboard/logout'); ?>" class="btn px-4 py-2 mt-4 text-grey-custom text-decoration-none" onclick="exit()">exit</a>