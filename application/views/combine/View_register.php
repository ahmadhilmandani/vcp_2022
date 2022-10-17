<div class="container-fluid mt-5">
     <div class="row d-flex justify-content-center position-relative">
          <div class="col-2 alert alert-danger position-sticky top-0 start-0" style="height:fit-content;">
               <h4 class="h4">Penting!</h4>
               <p>tanda (*) harus diisi data sesuai KTP dengan benar!</p>
          </div>
          <form action="<?= base_url('C_register/register_user') ?>" method="POST" class="col-6">
               <h1 class="h1">Register</h1>
               <div class="row">
                    <div class="my-3 mx-2 col-sm-12">
                         <label for="nik">NIK sesuai KTP<span>*</span></label><br>
                         <input type="text" placeholder="NIK" name="nik" id="nik" required class="mt-2">
                    </div>

                    <div class="my-3 mx-2 col-sm-12">
                         <label for="sandi">Sandi<span>*</span></label><br>
                         <input type="password" placeholder="Sandi" name="sandi" id="sandi" required class="mt-2">
                    </div>

                    <div class="my-3 mx-2 col-sm-12">
                         <label for="nama">Nama Lengkap Sesuai KTP <span>*</span></label><br>
                         <input type="text" placeholder="Nana lengkap" name="nama" id="nama" required class="mt-2">
                    </div>

                    <div class="my-3 mx-2 col-sm-12">
                         <label for="tanggal_lahir">Tanggal Lahir sesuai KTP<span>*</span></label><br>
                         <input type="date" placeholder="Tanggal lahir" name="tanggal_lahir" id="tanggal_lahir" required class="mt-2">
                    </div>
               </div>


               <div class="my-3 mx-2">
                    <div>
                         <label>Jenis Kelamin sesuai KTP<span>*</span></label>
                    </div>
                    <div>
                         <input type="radio" name="jenis_kelamin" value="l" required>
                         <label>laki-laki</label>

                         <input type="radio" name="jenis_kelamin" value="p" required>
                         <label>female</label>
                    </div>
               </div>

               <div class="my-3 mx-2">
                    <label for="alamat">Alamat</label><br>
                    <input type="text" placeholder="Alamat" name="alamat" id="alamat" required class="mt-2">
               </div>

               <div class="my-3 mx-2">
                    <label for="perkerjaan">Pekerjaan</label><br>
                    <select id="perkerjaan" name="perkerjaan" class="mt-2">
                         <option value="pns">PNS</option>
                         <option value="tenaga medis">Tenaga medis</option>
                         <option value="mahasiswa">Mahasiswa</option>
                    </select>
               </div>

               <div class="my-3 mx-2">
                    <a href="<?= base_url('C_dashboard') ?>" class="text-dark btn btn-outline-info">kembali</a>
                    <button type="submit" class="btn btn-info">DAFTAR</button>
               </div>
          </form>
     </div>
</div>