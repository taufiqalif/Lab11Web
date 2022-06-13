<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/style1.css">
  <title><?= $title; ?></title>
</head>

<body>

  <div id="container">

    <header>
      <h1><?= $subtitle; ?></h1>
    </header>
    <nav>
      <a href="<?= base_url('admin/artikel'); ?>" class="active">Dashboard</a>
      <a href="<?= base_url('/'); ?>">Artikel</a>
      <a href="<?= base_url('index.php/admin/artikel/add'); ?>">Tambah Artikel</a>
      <a href="<?= base_url('user/logout'); ?>">Logout</a>
    </nav>