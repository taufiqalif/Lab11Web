<?php

namespace App\Controllers;

class page extends BaseController
{
  public function about()
  {
    return view('about', [
      'title' => 'About',
    ]);
  }
  public function contact()
  {
    return view('contact', [
      'title' => 'Contact',
    ]);
  }
  public function faqs()
  {
    echo "Ini halaman FAQ";
  }
}