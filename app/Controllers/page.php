<?php

namespace App\Controllers;

class page extends BaseController
{
  public function about()
  {
    return view('pages/about', [
      'title' => 'About',
    ]);
  }
  public function contact()
  {
    return view('pages/contact', [
      'title' => 'Contact',
    ]);
  }
  public function faqs()
  {
    echo "Ini halaman FAQ";
  }
}