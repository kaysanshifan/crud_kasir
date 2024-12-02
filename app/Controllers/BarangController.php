<?php

namespace App\Controllers;

use App\Models\BarangModel;

class BarangController extends BaseController
{
    protected $barangModel;

    public function __construct()
    {
        $this->barangModel = new BarangModel();
    }

    public function index()
    {
        $data['barang'] = $this->barangModel->findAll();
        return view('barang/index', $data);
    }

    public function create()
    {
        return view('barang/create');
    }

    public function store()
    {
        $this->barangModel->save([
            'nama' => $this->request->getPost('nama'),
            'harga' => $this->request->getPost('harga'),
            'stok' => $this->request->getPost('stok')
        ]);
        return redirect()->to('/barang');
    }

    public function edit($id)
    {
        $data['barang'] = $this->barangModel->find($id);
        return view('barang/edit', $data);
    }

    public function update($id)
    {
        $this->barangModel->update($id, [
            'nama' => $this->request->getPost('nama'),
            'harga' => $this->request->getPost('harga'),
            'stok' => $this->request->getPost('stok')
        ]);
        return redirect()->to('/barang');
    }

    public function delete($id)
    {
        $this->barangModel->delete($id);
        return redirect()->to('/barang');
    }
}
