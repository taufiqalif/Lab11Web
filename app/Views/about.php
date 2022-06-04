<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <title><?= $title; ?></title>
</head>

<body>

  <div class="container">



    <?= $this->include('template/header'); ?>

    <div class="about">
      <img src="img/taufiq-alif-r.jpg" alt="">
      <h2>Taufiq Alif Rahman</h2>
      <h4>312010289</h4>
      <hr class="divider" />
      <h3>Halloo...</h3>
      <div class="konten">
        <p>Nama saya Taufiq Alif Rahman, saya dari indonesia dan tempat tinggal saya berada di kota bandung. Saya
          mahasiswa Universitas Pelita Bangsa prodi Teknik Informatika. Saya memiliki ketertarikan besar dalam dunia IT,
          selalu termotivasi untuk mencoba hal baru.
        </p>

        <p>Dalam dunia IT mungkin saya bisa di bilang belum profesional atau masih pemula, masih banyak belajar tentang
          dunia IT. Dalam pemograman saya bisa menggunakan beberapa bahasa seperti PYTHON dan JAVA, untuk website saya
          bisa menggunakan HTML, CSS, dan JAVASCRIPT. dan untuk desain grafis saya juga bisa menggunakan PHOTO SHOP dan
          COREL DRAW.
        </p>
      </div>
    </div>

    <?= $this->include('template/footer1'); ?>

  </div>

</body>

</html>