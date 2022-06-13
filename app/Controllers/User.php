<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
  public function index()
  {
    $title = 'Daftar User';
    $model = new UserModel();
    $users = $model->findAll();
    return view('login/login', compact('users', 'title'));
  }

  public function login()
  {
    helper(['form']);
    $email = $this->request->getPost('email');
    $password = $this->request->getPost('password');
    if (!$email) {
      return view('user/login');
    }
    $session = session();
    $model = new UserModel();
    $login = $model->where('useremail', $email)->first();
    if ($login) {
      $pass = $login['userpassword'];
      if (password_verify($password, $pass)) {
        $login_data = [
          'user_id' => $login['id'],
          'user_name' => $login['username'],
          'user_email' => $login['useremail'],
          'logged_in' => true
        ];
        $session->set($login_data);
        return redirect('admin/artikel');
      } else {
        $session->setFlashdata('failed', 'Password Salah');
        return redirect('user/login');
      }
    } else {
      $session->setFlashdata('failed', 'Email Tidak Terdaftar');
      return redirect('user/login');
    }
  }

  public function logout()
  {
    session()->destroy();
    return redirect()->to('user/login');
  }
}