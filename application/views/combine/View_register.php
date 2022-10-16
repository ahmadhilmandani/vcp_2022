     <form action="" method="POST">
          <div class="nk">
               <label for="nik">NIK <span>*</span></label><br>
               <input type="text" placeholder="NIK" name="nik" required>
          </div>

          <div>
               <label for="lname">Nama Lengkap Sesuai KTP <span>*</span></label><br>
               <input type="text" placeholder="Nana lengkap" name="nama_user" required>
          </div>

          <div>
               <label for="tlahir">Tanggal Lahir <span>*</span></label><br>
               <input type="date" name="tlair" placeholder="Tanggal lahir" required>
          </div>

          <div>
               <label>Jenis Kelamin<span>*</span></label>
               <label for="">laki-laki</label>
               <input type="radio" name="jenis_kelamin" value="l" required>
               <label for="">female</label>
               <input type="radio" name="jenis_kelamin" value="p" required>
          </div>

          <div>
               <label for="text">Alamat</label><br>
               <input type="text" placeholder="Alamat" name="alamat" required>
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
               <button type="submit">DAFTAR</button>
          </div>
     </form>