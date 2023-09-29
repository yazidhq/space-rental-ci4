<?php

namespace App\Controllers;

class Penyewaan extends Admin
{

    // penyewaan user-site
    public function riwayat_sewa()
    {
        $data = [
            'title' => 'Form Pemesanan',
            'sewa' => $this->sewaModel->where(['id_user' => session()->get('id_user')])->orderBy('id_penyewaan', 'DESC')->findAll(),
            'lahans' => $this->lahanModel->orderBy('id_lahan', 'DESC')->findAll(4),
        ];
        return view('user/pemesanan/riwayat_sewa', $data);
    }
    public function form_penyewaan($id_lahan = null)
    {
        $data = [
            'title' => 'Form Pemesanan',
            'lahan' => $this->lahanModel->where(['id_lahan' => $id_lahan])->first(),
            'lahans' => $this->lahanModel->orderBy('id_lahan', 'DESC')->findAll(4),
        ];
        return view('user/pemesanan/form_penyewaan', $data);
    }
    public function proses_tambah_penyewaan()
    {
        $npwp = $this->request->getFile('npwp');
        $ktp = $this->request->getFile('ktp');
        if ($npwp->getError() == 4 || $npwp->getSize() == 0) {
            $gambar_npwp = 'default.png';
        } else {
            $npwp->move('self-assets/lampiran-sewa');
            $gambar_npwp = $npwp->getName();
        }
        if ($ktp->getError() == 4 || $ktp->getSize() == 0) {
            $gambar_ktp = 'default.png';
        } else {
            $ktp->move('self-assets/lampiran-sewa');
            $gambar_ktp = $ktp->getName();
        }
        $inputData = [
            'id_user' => $this->request->getPost('id_user'),
            'id_lahan' => $this->request->getPost('id_lahan'),
            'kategori_lahan' => $this->request->getPost('kategori_lahan'),
            'tanggal_penyewaan' => $this->request->getPost('tanggal_penyewaan'),
            'lama_penyewaan' => $this->request->getPost('lama_penyewaan'),
            'npwp' => $gambar_npwp,
            'ktp' => $gambar_ktp,
            'status_penyewaan' => 'Belum Bayar',
        ];
        $this->sewaModel->save($inputData);
        return redirect()->to('/Penyewaan/riwayat_sewa')->with('', '');
    }
    public function hapus_penyewaan($id_sewa)
    {
        $builder = $this->sewaModel->where('id_penyewaan', $id_sewa);
        $id_lahan_result = $builder->get()->getRow();
        $id_lahan = $id_lahan_result->id_lahan;
        $builder_lahan = $this->lahanModel;
        $builder_lahan->set('status_lahan', '1');
        $builder_lahan->where('id_lahan', $id_lahan);
        $builder_lahan->update();
        $this->sewaModel->where('id_penyewaan', $id_sewa)->delete();
        return redirect()->back()->with('', '');
    }
    public function hapus_penyewaan_tanpa_ubah_status_rumah($id_sewa)
    {
        $this->sewaModel->where('id_penyewaan', $id_sewa)->delete();
        return redirect()->back()->with('', '');
    }

    // penyewaan admin-site
    public function tampil_penyewaan()
    {
        $data = [
            'title' => 'Daftar Penyewaan',
            'sewa' => $this->sewaModel->orderBy('id_penyewaan', 'DESC')->findAll(),
        ];
        return view('admin/penyewaan/tampil_penyewaan', $data);
    }
    public function terima_sewa($id_sewa)
    {
        $builder = $this->sewaModel;
        $builder->set('status_penyewaan', 'Pesanan Diterima');
        $builder->where('id_penyewaan', $id_sewa);
        $builder->update();
        return redirect()->back()->with('', '');
    }
    public function tolak_sewa($id_sewa)
    {
        $builder = $this->sewaModel;
        $builder->set('status_penyewaan', 'Pesanan Ditolak');
        $builder->where('id_penyewaan', $id_sewa);
        $builder->update();
        return redirect()->back()->with('', '');
    }
}
