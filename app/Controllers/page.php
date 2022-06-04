<?php

namespace App\Controllers;

class page extends BaseController
{

  public function index()
  {
    // return view('welcome_message');
    return view('pages/home', [
      'title' => 'Home',
      'subtitle' => 'Layout Sederhana',
    ]);
  }

  public function about()
  {
    return view('pages/about', [
      'title' => 'About Me',
      'subtitle' => 'Tentang Saya',
    ]);
  }
  public function contact()
  {
    return view('pages/contact', [
      'title' => 'kontak Me',
      'subtitle' => 'Kontak Saya',
    ]);
  }
  public function faqs()
  {
    echo "Ini halaman FAQ";
  }
}