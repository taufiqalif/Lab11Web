<?= $this->include('layout/admin_header'); ?>
<div class="add">
  <div class="title">
    <h2><?= $title; ?></h2>
  </div>
  <form action="" method="POST" enctype="multipart/form-data">
    <p>
      <input type="text" name="judul" placeholder="Judul Artikel....">
    </p>
    <p>
      <textarea name="isi" id="isi" cols="50" rows="10" placeholder="Isi Artikel...."></textarea>
    </p>
    <p>
      <input type="file" name="gambar" style="width: 50px;">
    </p>
    <br>
    <br>
    <p><input type="submit" value="kirim" class="btn btn-large"></p>
  </form>
</div>

<?= $this->include('layout/admin_footer'); ?>