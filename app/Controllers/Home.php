<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\PemasukanModel;
use App\Models\PengeluaranModel;
use Myth\Auth\Models\UserModel;

class Home extends BaseController
{
    protected $pemasukan;
    protected $pengeluaran;
    protected $category;
    protected $user;

    public function __construct()
    {
        $this->pemasukan = new PemasukanModel();
        $this->pengeluaran = new PengeluaranModel();
        $this->category = new CategoryModel();
        $this->user = new UserModel();
    }

    public function index()
    {
        $pemasukanPerBulan = [];
        $pengeluaranPerBulan = [];
        for ($i = 1; $i <= 12; $i++) {
            $pengeluaranPerBulan[] = $this->pengeluaran->getPengeluaranPerBulan(user()->id, $i);
            $pemasukanPerBulan[] = $this->pemasukan->getPemasukanPerBulan(user()->id, $i);
        }

        $pemasukan = $this->pemasukan->getAllPemasukan(user()->id);
        $pengeluaran = $this->pengeluaran->getAllPengeluaran(user()->id);

        return view('index', ['pemasukan' => $pemasukan, 'pengeluaran' => $pengeluaran, 'pemasukanPerBulan' => $pemasukanPerBulan, 'pengeluaranPerBulan' => $pengeluaranPerBulan]);
    }

    public function about()
    {
        return view('about');
    }

    public function setting()
    {
        return view('setting');
    }

    public function rekapitulasi()
    {
        $rekap = $this->pemasukan->getPemasukanPengeluaran(user()->id);
        return view('rekapitulasi', ['rekap' => $rekap]);
    }

    public function showBudgetingBulanan()
    {
        $category = $this->category->getCategory(user()->id);

        // dd($category);

        return view('budgeting/bulan', ['category' => $category]);
    }

    public function tambahCategory()
    {
        $this->category->insert([
            'user_id' => user()->id,
            'nama' => $this->request->getPost('nama'),
            'jumlah' => $this->request->getPost('jumlah')
        ]);

        return redirect()->back();
    }
    public function deleteCategory()
    {
        $this->user->update(user()->id, [
            'saldo' => user()->saldo + $this->category->where('id', $this->request->getPost('id'))->first()['sisa']
        ]);

        $this->category->delete($this->request->getPost('id'));
        return redirect()->back();
    }
}
