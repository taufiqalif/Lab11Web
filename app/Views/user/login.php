<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../login.css">
  <title>Document</title>
</head>

<body>
  <div id="login-wrapper">
    <div class="kolom">
      <h1>Sign In</h1>
      <?php if (session()->getFlashdata('flash_msg')) : ?>
      <div class="alert alert-danger">
        <?= session()->getFlashdata('flash_msg') ?>
      </div> <?php endif; ?>
      <form action="" method="post">
        <div class="mb-3">
          <label for="InputForEmail" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
        </div>
        <div class="mb-3">
          <label for="InputForPassword" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="InputForPassword">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
    </div>
  </div>
</body>

</html>