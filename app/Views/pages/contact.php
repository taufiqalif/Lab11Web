<?= $this->include('layout/header'); ?>

<div class="kontak">
  <div class="contact">
    <form action="">
      <h2>Kontak</h2>
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Masukkan Email">
      </div>
      <div class="form-group">
        <label for="pesan">Pesan</label>
        <textarea class="form-control" id="pesan" rows="3" placeholder="Masukkan Pesan..."></textarea>
      </div>
      <button type="submit" class="btn">Kirim</button>
    </form>
  </div>

  <div class="kartu">
    <h2>Alamat</h2>
    <p>
      <span>Bandung, Jawa Barat 40286</span>
    </p>
    <p>
      <span>+62 812-345-6789</span>
    </p>
  </div>
</div>

<?= $this->include('layout/footer1'); ?>