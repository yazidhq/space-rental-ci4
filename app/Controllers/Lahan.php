<?php

namespace App\Controllers;

class Lahan extends Admin
{
    // lahan user-site
    public function katalog_lahan()
    {
        $data = [
            'title' => 'Katalog Lahan',
            'lahan' => $this->lahanModel->orderBy('id_lahan', 'DESC')->findAll(),
        ];
        return view('user/lahan/katalog_lahan', $data);
    }
    public function single_lahan($id_lahan)
    {
        $data = [
            'title' => 'Detail Lahan',
            'lahan' => $this->lahanModel->where(['id_lahan' => $id_lahan])->first(),
            'lahans' => $this->lahanModel->orderBy('id_lahan', 'DESC')->findAll(4),
        ];
        return view('user/lahan/single_lahan', $data);
    }

    // lahan admin-site
    public function daftar_lahan()
    {
        $data = [
            'title' => 'Daftar Lahan',
            'lahan' => $this->lahanModel->orderBy('id_lahan', 'DESC')->findAll(),
        ];
        return view('admin/lahan/daftar_lahan', $data);
    }
    public function tambah_lahan()
    {
        $data = [
            'title' => 'Tambah Lahan',
        ];
        return view('admin/lahan/tambah_lahan', $data);
    }
    public function proses_tambah_lahan()
    {
        $gambar = $this->request->getFile('gambar_lahan');
        if ($gambar->getError() == 4 && $gambar == NULL) {
            $namagambar = 'default.png';
        } else {
            $gambar->move('self-assets/gambar-lahan');
            $namagambar = $gambar->getName();
        }
        $this->lahanModel->save([
            'fasilitas_lahan' => $this->request->getVar('fasilitas_lahan'),
            'luas_lahan' => $this->request->getVar('luas_lahan'),
            'kategori_lahan' => $this->request->getVar('kategori_lahan'),
            'harga_lahan' => $this->request->getVar('harga_lahan'),
            'status_lahan' => 1,
            'gambar_lahan' => $namagambar,
        ]);
        return redirect()->to('/Lahan/daftar_lahan')->with('tambah_produk', 'Berhasil menambah produk baru');
    }
    public function edit_lahan($id_lahan)
    {
        $data = [
            'title' => 'Edit Lahan',
            'lahan' => $this->lahanModel->where(['id_lahan' => $id_lahan])->first(),
        ];
        return view('admin/lahan/edit_lahan', $data);
    }
    public function proses_edit_lahan($id_lahan)
    {
        $gambar = $this->request->getFile('gambar_lahan');
        if ($gambar->getError() == 4) {
            $namagambar  = $this->request->getVar('gambarlama');
        } else {
            $gambar->move('self-assets/gambar-lahan');
            $namagambar = $gambar->getName();
            unlink('self-assets/gambar-lahan/' . $this->request->getVar('gambarlama'));
        }
        $data = [
            'fasilitas_lahan' => $this->request->getVar('fasilitas_lahan'),
            'luas_lahan' => $this->request->getVar('luas_lahan'),
            'kategori_lahan' => $this->request->getVar('kategori_lahan'),
            'harga_lahan' => $this->request->getVar('harga_lahan'),
            'status_lahan' => $this->request->getVar('status_lahan'),
            'gambar_lahan' => $namagambar,
        ];
        $db = \Config\Database::connect();
        $db->table('lahan')->where('id_lahan', $id_lahan)->update($data);
        return redirect()->to('/Lahan/daftar_lahan')->with('', '');
    }
    public function hapus_lahan($id_lahan)
    {
        $lahan = $this->lahanModel->find($id_lahan);
        $gambar_lahan = $lahan['gambar_lahan'];
        $this->lahanModel->where('id_lahan', $id_lahan)->delete();
        if ($gambar_lahan && file_exists('self-assets/gambar-lahan/' . $gambar_lahan)) {
            unlink('self-assets/gambar-lahan/' . $gambar_lahan);
        }
        return redirect()->to('/Lahan/daftar_lahan')->with('', '');
    }
}
