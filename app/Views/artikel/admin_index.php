<?= $this->include('layout/admin_header'); ?>

<table class="table">
  <div class="box">
    <form method="get" class="form-search">
      <input type="text" class="search" name="q" value="<?= $q; ?>" placeholder="Cari data">
      <!-- <input type="submit" value="cari" class="btn btn-primary"> -->
      <button type="submit">cari</button>
    </form>
  </div>
  <thead>
    <tr>
      <th>ID</th>
      <th>Judul</th>
      <th>Status</th>
      <th>AKsi</th>
    </tr>
  </thead>
  <tbody>
    <?php if ($artikel) : foreach ($artikel as $row) : ?>
    <tr>
      <td><?= $row['id']; ?></td>
      <td>
        <b><?= $row['judul']; ?></b>
        <p>
          <small><?= substr($row['isi'], 0, 50); ?></small>
        </p>
      </td>
      <td><?= $row['status']; ?></td>
      <td>
        <a class="btn" href="<?= base_url('/admin/artikel/edit/' . $row['id']); ?>">Ubah</a>
        <a class="btn btn-danger" onclick="return confirm('Yakin Menghapus Data ?');"
          href="<?= base_url('/admin/artikel/delet' . $row['id']); ?>">Hapus</a>
      </td>
    </tr>
    <?php endforeach;
    else : ?>
    <tr>
      <td colspan="4">Belum Ada Data</td>
    </tr>
    <?php endif; ?>
  </tbody>
</table>

<div class="page">
  <?= $pager->only(['q'])->links(); ?>
</div>

<?= $this->include('layout/admin_footer'); ?>