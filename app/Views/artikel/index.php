<?= $this->include('layout/header'); ?>

<section id="wrapper">

  <section id="main">

    <?php if ($artikel) : foreach ($artikel as $row) : ?>
    <article class="entry">
      <h2 class="judul_artikel">
        <a href="<?= base_url('/artikel/' . $row['slug']); ?>">
          <?= $row['judul']; ?>
        </a>
      </h2>
      <img src="<?= base_url('/gambar/' . $row['gambar']); ?>" alt="<?= $row['judul']; ?>">
      <p><?= substr($row['isi'], 0, 200); ?></p>
    </article>
    <hr class="divider" />
    <?php endforeach;
    else : ?>
    <article class="entry">
      <h2>Belum ada data.</h2>
    </article> <?php endif; ?>
  </section>

  <?= $this->include('layout/footer'); ?>