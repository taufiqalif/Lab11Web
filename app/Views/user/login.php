<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="../login.css"> -->
  <title>Login</title>
  <style>
  * {
    padding: 0;
    margin: 0;
  }

  #login-wrapper {
    height: 450px;
    background: #f2f2f2;
    padding: 20px;
    display: grid;
    justify-content: center;
    align-items: center;
  }

  .kolom h1 {
    font-size: 2.5rem;
    font-weight: bold;
    color: #000;
    margin-bottom: 20px;
    text-align: center;
  }

  .alert {
    width: 100%;
    padding: 10px;
    background: #f2f2f2;
    border-radius: 5px;
    margin-bottom: 10px;
  }

  .kolom {
    width: 450px;
    padding: 10px;
    background-color: #ccc;
    border-radius: 5px;
    margin-bottom: 10px;
  }

  .kolom form {
    width: 100%;
    display: grid;
    justify-content: center;
    align-items: center;
  }

  .kolom form label {
    font-size: 1.2rem;
    font-weight: bold;
    color: #000;
    margin-bottom: 10px;
  }

  .kolom form input {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    margin-bottom: 10px;
  }

  .kolom form button {
    width: 50%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #242f9b;
    color: #fff;
    font-weight: bold;
    cursor: pointer;
    margin-bottom: 10px;
  }

  .kolom form button:hover {
    background-color: #646fd4;
    color: #fff;
  }

  .kolom form a {
    color: #000;
    text-decoration: none;
  }
  </style>
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
        <a href="<?= base_url('/'); ?>">Back to home</a>
      </form>
    </div>
  </div>
</body>

</html>