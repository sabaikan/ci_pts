<?php

namespace App\Controllers;

use App\Models\NasiBekeporModel;

class NasiBekepor extends BaseController
{
    protected $nasiBekeporModel;

    public function __construct()
    {
        $this->nasiBekeporModel = new NasiBekeporModel();
    }

    public function index()
    {
        $kategori = $this->request->getGet('kategori') ?? 'Semua';
        $sort     = $this->request->getGet('sort') ?? '';
        $search   = $this->request->getGet('search') ?? '';

        $menuList = $this->nasiBekeporModel->getFilteredSorted($kategori, $sort, $search);

        // Ambil daftar kategori unik untuk filter
        $allCategories = $this->nasiBekeporModel->distinct()->findColumn('kategori') ?? [];

        // Hitung statistik ringkas
        $totalMenu = count($menuList);
        $avgPrice  = !empty($menuList) ? array_sum(array_column($menuList, 'harga')) / $totalMenu : 0;

        $data = [
            'title'         => 'BEKEPOR THEORY - Kuliner Tradisional Kalimantan Timur',
            'provinsi'      => 'Kalimantan Timur',
            'makanan_utama' => 'Nasi Bekepor',
            'menuList'      => $menuList,
            'categories'    => $allCategories,
            'selectedKat'   => $kategori,
            'selectedSort'  => $sort,
            'searchQuery'   => $search,
            'totalMenu'     => $totalMenu,
            'avgPrice'      => $avgPrice,
        ];

        return view('nasi_bekepor/index', $data);
    }

    /**
     * CREATE - Tambah Menu Nasi Bekepor Baru
     */
    public function store()
    {
        $rules = [
            'nama_makanan' => 'required|min_length[3]|max_length[255]',
            'kategori'     => 'required',
            'harga'        => 'required|numeric|greater_than[0]',
            'stok'         => 'required|integer|greater_than_equal_to[0]',
            'deskripsi'    => 'required|min_length[5]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', 'Gagal menambahkan menu! Mohon periksa isian formulir.');
        }

        $gambar = $this->request->getPost('gambar');
        if (empty($gambar)) {
            // Default gambar makanan lezat jika kosong
            $gambar = 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=600&q=80';
        }

        $this->nasiBekeporModel->insert([
            'nama_makanan' => $this->request->getPost('nama_makanan'),
            'kategori'     => $this->request->getPost('kategori'),
            'asal_daerah'  => 'Kalimantan Timur',
            'harga'        => (int) $this->request->getPost('harga'),
            'stok'         => (int) $this->request->getPost('stok'),
            'rating'       => (float) ($this->request->getPost('rating') ?: 4.8),
            'deskripsi'    => $this->request->getPost('deskripsi'),
            'gambar'       => $gambar,
        ]);

        return redirect()->to(base_url())->with('success', 'Menu Nasi Bekepor berhasil ditambahkan ke katalog!');
    }

    /**
     * UPDATE - Perbarui Data Menu Nasi Bekepor
     */
    public function update($id = null)
    {
        $menu = $this->nasiBekeporModel->find($id);
        if (!$menu) {
            return redirect()->back()->with('error', 'Menu tidak ditemukan!');
        }

        $rules = [
            'nama_makanan' => 'required|min_length[3]|max_length[255]',
            'kategori'     => 'required',
            'harga'        => 'required|numeric|greater_than[0]',
            'stok'         => 'required|integer|greater_than_equal_to[0]',
            'deskripsi'    => 'required|min_length[5]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', 'Gagal memperbarui menu! Mohon cek isian data.');
        }

        $gambar = $this->request->getPost('gambar');
        if (empty($gambar)) {
            $gambar = $menu['gambar'];
        }

        $this->nasiBekeporModel->update($id, [
            'nama_makanan' => $this->request->getPost('nama_makanan'),
            'kategori'     => $this->request->getPost('kategori'),
            'harga'        => (int) $this->request->getPost('harga'),
            'stok'         => (int) $this->request->getPost('stok'),
            'rating'       => (float) ($this->request->getPost('rating') ?: $menu['rating']),
            'deskripsi'    => $this->request->getPost('deskripsi'),
            'gambar'       => $gambar,
        ]);

        return redirect()->to(base_url())->with('success', 'Menu Nasi Bekepor berhasil diperbarui!');
    }

    /**
     * DELETE - Hapus Data Menu Nasi Bekepor
     */
    public function delete($id = null)
    {
        $menu = $this->nasiBekeporModel->find($id);
        if (!$menu) {
            return redirect()->back()->with('error', 'Menu tidak ditemukan!');
        }

        $this->nasiBekeporModel->delete($id);

        return redirect()->to(base_url())->with('success', 'Menu berhasil dihapus dari katalog!');
    }
}
