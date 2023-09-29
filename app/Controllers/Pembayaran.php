<?php

namespace App\Controllers;

class Pembayaran extends Admin
{
    public function form_pembayaran($id_penyewaan)
    {
        $data = [
            'title' => 'Pembayaran',
            'sewa' => $this->sewaModel->where(['id_penyewaan' => $id_penyewaan])->first(),
            'lahans' => $this->lahanModel->orderBy('id_lahan', 'DESC')->findAll(4),
        ];
        return view('user/pembayaran/form_pembayaran', $data);
    }

    public function proses_tambah_pembayaran()
    {
        $bukti = $this->request->getFile('bukti_pembayaran');
        if ($bukti->getError() == 4 || $bukti->getSize() == 0) {
            $gambar_bukti = 'default.png';
        } else {
            $bukti->move('self-assets/bukti-pembayaran');
            $gambar_bukti = $bukti->getName();
        }
        $inputData = [
            'id_user' => $this->request->getPost('id_user'),
            'id_penyewaan' => $this->request->getPost('id_penyewaan'),
            'an_pembayaran' => $this->request->getPost('an_pembayaran'),
            'norek_pembayaran' => $this->request->getPost('norek_pembayaran'),
            'total_harga' => $this->request->getPost('total_harga'),
            'tanggal_pembayaran' => $this->request->getPost('tanggal_pembayaran'),
            'bukti_pembayaran' => $gambar_bukti,
        ];
        $this->bayarModel->save($inputData);

        $id_sewa =  $this->request->getPost('id_penyewaan');
        $builder = $this->sewaModel;
        $builder->set('status_penyewaan', 'Sudah Bayar');
        $builder->where('id_penyewaan', $id_sewa);
        $builder->update();

        $builder = $this->sewaModel->where('id_penyewaan', $id_sewa);
        $id_lahan_result = $builder->get()->getRow();
        $id_lahan = $id_lahan_result->id_lahan;
        $builder_lahan = $this->lahanModel;
        $builder_lahan->set('status_lahan', '0');
        $builder_lahan->where('id_lahan', $id_lahan);
        $builder_lahan->update();

        return redirect()->to('/Penyewaan/riwayat_sewa')->with('', '');
    }

    // pembayaran admin-site
    public function tampil_pembayaran()
    {
        $data = [
            'title' => 'Daftar Pembayaran',
            'bayar' => $this->bayarModel->orderBy('id_pembayaran', 'DESC')->findAll(),
        ];
        return view('admin/pembayaran/tampil_pembayaran', $data);
    }
}
