<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Artikel extends BaseController
{
  public function index()
  {
    $model = new ArtikelModel();
    $data = [
      'title' => 'Daftar Artikel',
      'subtitle' => 'Daftar Artikel',
      'artikel' => $model->findAll(),
    ];
    return view('artikel/index', $data);
  }

  public function view($slug)
  {
    $model = new ArtikelModel();
    $artikel = $model->where(['slug' => $slug])->first();
    // Menampilkan error apabila data tidak ada. 
    if (!$artikel) {
      throw PageNotFoundException::forPageNotFound();
    }
    $title = $artikel['judul'];
    $subtitle = $artikel['judul'];
    return view('artikel/detail', compact('artikel', 'title', 'subtitle'));
  }

  public function admin_index()
  {
    $model = new ArtikelModel();
    $q = $this->request->getVar('q') ?? '';
    $data = [
      'title' => 'Daftar Artikel',
      'subtitle' => 'Daftar Artikel',
      'q' => $q,
      'artikel' => $model->like('judul', $q)->paginate(3),
      'pager' => $model->pager,
    ];
    return view('artikel/admin_index', $data);
  }

  // ADD
  public function add()
  {
    // Validasi data
    $validation = \Config\Services::validation();
    $validation->setRules(['judul' => 'required']);
    $isDataValid = $validation->withRequest($this->request)->run();

    if ($isDataValid) {
      $file = $this->request->getFile('gambar');
      $file->move(ROOTPATH . 'public/gambar');
      $artikel = new ArtikelModel();
      $artikel->insert([
        'judul' => $this->request->getPost('judul'),
        'isi' => $this->request->getPost('isi'),
        'slug' => url_title($this->request->getPost('judul')),
        'gambar' => $file->getName(),
      ]);
      return redirect('admin/artikel');
    }
    $title = "Tambah Artikel";
    $subtitle = "Tambah Artikel";
    return view('artikel/form_add', compact('title', 'subtitle'));
  }

  // Edit
  public function edit($id)
  {
    $artikel = new ArtikelModel();

    $validation = \Config\Services::validation();
    $validation->setRules(['judul' => 'required']);
    $isDataValid = $validation->withRequest($this->request)->run();

    if ($isDataValid) {
      $artikel->update(
        $id,
        [
          'judul' => $this->request->getPost('judul'),
          'isi' => $this->request->getPost('isi'),
        ]
      );
      return redirect('admin/artikel');
    }
    $data = $artikel->where('id', $id)->first();
    $title = "Edit artikel";
    $subtitle = "Edit artikel";
    return view('artikel/form_edit', compact('title', 'data', 'subtitle'));
  }

  // Delete
  public function delete($id)
  {
    $artikel = new ArtikelModel();
    $artikel->delete($id);
    return redirect('admin/artikel');
  }
}