<div class="container d-flex justify-content-center">
     <div class="row my-lg-5">
          <div class="col-lg-3 col-sm-2 alert alert-danger position-sticky top-0 start-0 mt-lg-5" style="height:fit-content;">
               <h4 class="">Penting!</h4>
               <p>tanda (*) harus diisi data sesuai KTP dengan benar!</p>
          </div>
          <div class="col-lg-9 ps-lg-4">
               <form action="<?= base_url('C_register/register_user') ?>" method="POST">
                    <h1 class="mb-3">Register</h1>
                    <div class="mb-3">
                         <label for="NIK" class="form-label fs-5">NIK <span class="text-danger fs-6">*</span></label>
                         <input type="text" name="NIK" class="form-control ps-4" id="NIK" placeholder="NIK" required>
                    </div>
                    <div class="mb-3">
                         <label for="Sandi" class="form-label fs-5">Sandi <span class="text-danger fs-6">*</span></label>
                         <input type="text" name="sandi" class="form-control ps-4" id="Sandi" placeholder="Sandi" required>
                    </div>
                    <div class="mb-3">
                         <label for="nama" class="form-label fs-5">Nama Lengkap <span class="text-danger fs-6">*</span></label>
                         <input type="text" name="nama" class="form-control ps-4" id="nama" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="mb-3">
                         <label for="tanggal_lahir" class="form-label fs-5">Tanggal Lahir <span class="text-danger fs-6">*</span></label>
                         <input type="date" name="tanggal_lahir" class="form-control ps-4" id="tanggal_lahir" placeholder="Tanggal Lahir" value="<?= date('Y-m-d'); ?>" required>
                    </div>


                    <label class="form-label fs-5">Jenis Kelamin <span class="text-danger fs-6">*</span></label>
                    <div class="mb-3">
                         <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_l" value="l">
                              <label class="form-check-label" for="jenis_kelamin_l">Laki-laki</label>
                         </div>
                         <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_p" value="p">
                              <label class="form-check-label" for="jenis_kelamin_p">Perempuan</label>
                         </div>
                    </div>

                    <div class="mb-3">
                         <label for="alamat" class="form-label fs-5">Alamat Lengkap <span class="text-danger fs-6">*</span></label>
                         <input type="text" name="alamat" class="form-control ps-4" id="alamat" placeholder="Alamat Lengkap" required>
                    </div>

                    <div class="mb-3">
                         <label for="perkerjaan" class="form-label fs-5">Pekerjaan <span class="text-danger fs-6">*</span></label>
                         <select class="form-select" name="perkerjaan" id="perkerjaan" aria-label="Default select example">
                              <option value="tenaga medis" selected>Tenaga medis</option>
                              <option value="pns">PNS</option>
                              <option value="mahasiswa/pelajar">Mahasiswa/pelajar</option>
                              <option value="wiraswasta">Wiraswasta</option>
                              <option value="wirausaha">Wirausaha</option>
                              <option value="guru">Guru</option>
                              <option value="pengacara">Pengacara</option>
                              <option value="freelance">Freelance</option>
                              <option value="lainnya">Lainnya ...</option>
                         </select>
                    </div>


                    <div class="d-grid gap-2">
                         <button class="btn btn-info" type="submit">DAFTAR</button>
                         <a href="<?= base_url('C_dashboard') ?>" class="text-dark btn btn-outline-info" type="button">Kembali</a>
                    </div>

               </form>
          </div>
     </div>
</div>