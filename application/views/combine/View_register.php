     <form action="<?= base_url('C_register/register_user') ?>" method="POST">
          <div>
               <label for="nik">NIK <span>*</span></label><br>
               <input type="text" placeholder="NIK" name="nik" id="nik" required>
          </div>

          <div>
               <label for="sandi">Sandi <span>*</span></label><br>
               <input type="password" placeholder="Sandi" name="sandi" id="sandi" required>
          </div>

          <div>
               <label for="nama">Nama Lengkap Sesuai KTP <span>*</span></label><br>
               <input type="text" placeholder="Nana lengkap" name="nama" id="nama" required>
          </div>

          <div>
               <label for="tanggal_lahir">Tanggal Lahir <span>*</span></label><br>
               <input type="date" placeholder="Tanggal lahir" name="tanggal_lahir" id="tanggal_lahir" required>
          </div>

          <div>
               <label>Jenis Kelamin<span>*</span></label>
               <label>laki-laki</label>
               <input type="radio" name="jenis_kelamin" value="l" required>
               <label>female</label>
               <input type="radio" name="jenis_kelamin" value="p" required>
          </div>

          <div>
               <label for="alamat">Alamat</label><br>
               <input type="text" placeholder="Alamat" name="alamat" id="alamat" required>
          </div>

          <div>
               <label for="perkerjaan">Pekerjaan</label><br>
               <select id="perkerjaan" name="perkerjaan">
                    <option value="pns">PNS</option>
                    <option value="tenaga medis">Tenaga medis</option>
                    <option value="mahasiswa">Mahasiswa</option>
               </select>
          </div>

          <div>
               <a href="<?= base_url('C_dashboard') ?>" class="text-dark">kembali</a>
               <button type="submit" >DAFTAR</button>
          </div>
     </form>