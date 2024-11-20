<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\PemasukanModel;
use App\Models\PengeluaranModel;
use CodeIgniter\I18n\Time;
use Myth\Auth\Models\UserModel;

class TransaksiController extends BaseController
{

    protected $modelPemasukan;
    protected $modelPengeluaran;
    protected $user;
    protected $category;

    public function __construct()
    {
        $this->modelPemasukan = new PemasukanModel();
        $this->modelPengeluaran = new PengeluaranModel();
        $this->user = new UserModel();
        $this->category = new CategoryModel();
    }

    public function pemasukan()
    {


        $pemasukan =  $this->modelPemasukan->where('user_id', user()->id)->findAll();

        return view('transaksi/pemasukan', ['pemasukan' => $pemasukan]);
    }
    public function pengeluaran()
    {
        $category = $this->category->getCategory(user()->id);

        // dd($category);

        // $pengeluaran =  $this->modelPengeluaran->where('user_id', user()->id)->findAll();
        $pengeluaran = $this->modelPengeluaran->getPengeluaranWithCategory(user()->id);
        // dd($pengeluaran)
        return view('transaksi/pengeluaran', [
            'pengeluaran' => $pengeluaran,
            'category' => $category
        ]);
    }


    public function showEditPemasukan($id)
    {
        $pemasukan = $this->modelPemasukan->where('id', $id)->first();

        return view('transaksi/edit/pemasukan', ['pemasukan' => $pemasukan]);
    }


    public function showEditPengeluaran($id)
    {
        $category = $this->category->getCategory(user()->id);
        $pengeluaran = $this->modelPengeluaran->where('id', $id)->first();

        return view('transaksi/edit/pengeluaran', ['pengeluaran' => $pengeluaran, 'category' => $category]);
    }

    public function tambahPemasukan()
    {
        $this->modelPemasukan->insert([
            'user_id' => user()->id,
            'tanggal' => Time::now(),
            'desc' => $this->request->getPost('desc'),
            'jumlah' => $this->request->getPost('jumlah')
        ]);


        $this->user->update(user()->id, [
            'saldo' => user()->saldo + $this->request->getPost('jumlah')
        ]);

        return redirect()->back()->with('success', 'Pemasukan berhasil ditambahkan');
    }

    public function tambahPengeluaran()
    {

        if ($this->request->getPost('category_id') == null) {
            return redirect()->back()->withInput()->with('category_null', 'Kategori belum dipilih');
        }

        if (user()->saldo < $this->request->getPost('jumlah')) {
            return redirect()->back()->withInput()->with('saldo_kurang', 'Saldo tidak mencukupi');
        }

        if (user()->saldo == 0) {
            return redirect()->back()->withInput()->with('saldo_kosong', 'Saldo masih kosong');
        }

        if (user()->saldo < $this->request->getPost('jumlah')) {
            return redirect()->back()->withInput()->with('saldo_kurang', 'Saldo tidak mencukupi');
        }

        $sisa = $this->category->where('id', $this->request->getPost('category_id'))->first();

        // dd($this->request->getPost('jumlah'));
        // dd($sisa);

        $this->category->update($this->request->getPost('category_id'), ['sisa' => $sisa['sisa'] + $this->request->getPost('jumlah')]);

        $this->modelPengeluaran->insert([
            'user_id' => user()->id,
            'tanggal' => Time::now(),
            'category_id' => $this->request->getPost('category_id'),
            'desc' => $this->request->getPost('desc'),
            'jumlah' => $this->request->getPost('jumlah')
        ]);


        $this->user->update(user()->id, [
            'saldo' => user()->saldo - $this->request->getPost('jumlah')
        ]);

        return redirect()->back()->with('success', 'Pengeluaran berhasil ditambahkan');
    }

    public function hapusPemasukan()
    {
        $this->user->update(user()->id, [
            'saldo' => user()->saldo - $this->modelPemasukan->where('id', $this->request->getPost('id'))->first()['jumlah']
        ]);

        $this->modelPemasukan->delete($this->request->getPost('id'));
        return redirect()->back()->with('success-delete', 'Pengeluaran berhasil dihapus');
    }
    public function hapusPengeluaran()
    {

        $jumlah = $this->modelPengeluaran->where('id', $this->request->getPost('id'))->first()['jumlah'];

        $this->category->update($this->modelPengeluaran->where('id', $this->request->getPost('id'))->first()['category_id'], [
            'sisa' => $this->category->where('id', $this->modelPengeluaran->where('id', $this->request->getPost('id'))->first()['category_id'])->first()['sisa'] - $jumlah
        ]);

        $this->user->update(user()->id, [
            'saldo' => user()->saldo + $jumlah
        ]);

        $this->modelPengeluaran->delete($this->request->getPost('id'));
        return redirect()->back()->with('success-delete', 'Pengeluaran berhasil dihapus');
    }


    public function editPengeluaran()
    {

        $jumlah = $this->modelPengeluaran->where('id', $this->request->getPost('id'))->first()['jumlah'];
        $jumlahPost = $this->request->getPost('jumlah');

        $categoryPost = $this->request->getPost('kategori');


        if ($jumlahPost < $jumlah) {



            $this->user->update(user()->id, [
                'saldo' => user()->saldo + ($jumlah - $jumlahPost)
            ]);


            if ($categoryPost != $this->modelPengeluaran->where('id', $this->request->getPost('id'))->first()['category_id']) {
                $this->category->update($this->modelPengeluaran->where('id', $this->request->getPost('id'))->first()['category_id'], [
                    'sisa' => $this->category->where('id', $this->modelPengeluaran->where('id', $this->request->getPost('id'))->first()['category_id'])->first()['sisa'] - $jumlah
                ]);
                $this->category->update($categoryPost, [
                    'sisa' => $this->category->where('id', $this->request->getPost('kategori'))->first()['sisa'] + $jumlahPost
                ]);
            }

            $this->category->update($this->modelPengeluaran->where('id', $this->request->getPost('id'))->first()['category_id'], [
                'sisa' => $this->category->where('id', $this->modelPengeluaran->where('id', $this->request->getPost('id'))->first()['category_id'])->first()['sisa'] - $jumlahPost
            ]);
            $this->modelPengeluaran->update($this->request->getPost('id'), [
                'desc' => $this->request->getPost('deskripsi'),
                'jumlah' => $jumlah - ($jumlah - $this->request->getPost('jumlah')),
                'category_id' => $this->request->getPost('kategori')
            ]);

            return redirect()->route('transaksi/pengeluaran')->with('success', 'Pengeluaran berhasil diubah');
        }


        $this->user->update(user()->id, [
            'saldo' => user()->saldo - ($jumlahPost - $jumlah)
        ]);


        if ($categoryPost != $this->modelPengeluaran->where('id', $this->request->getPost('id'))->first()['category_id']) {
            $this->category->update($this->modelPengeluaran->where('id', $this->request->getPost('id'))->first()['category_id'], [
                'sisa' => $this->category->where('id', $this->modelPengeluaran->where('id', $this->request->getPost('id'))->first()['category_id'])->first()['sisa'] - $jumlah
            ]);
            $this->category->update($categoryPost, [
                'sisa' => $this->category->where('id', $this->request->getPost('kategori'))->first()['sisa'] + $jumlahPost
            ]);
        }

        $this->category->update($this->modelPengeluaran->where('id', $this->request->getPost('id'))->first()['category_id'], [
            'sisa' => $this->category->where('id', $this->modelPengeluaran->where('id', $this->request->getPost('id'))->first()['category_id'])->first()['sisa'] + $jumlahPost - $jumlah
        ]);
        $this->modelPengeluaran->update($this->request->getPost('id'), [
            'desc' => $this->request->getPost('deskripsi'),
            'jumlah' => $jumlah + ($this->request->getPost('jumlah') - $jumlah),
            'category_id' => $this->request->getPost('kategori')
        ]);


        return redirect()->route('transaksi/pengeluaran')->with('success', 'Pengeluaran berhasil diubah');
    }

    public function editPemasukan()
    {
        $desc = $this->request->getPost('deskripsi');
        $jumlahPost = $this->request->getPost('jumlah');
        $jumlahAwal = $this->modelPemasukan->where('id', $this->request->getPost('id'))->first()['jumlah'];

        if ($jumlahPost < $jumlahAwal) {
            $this->user->update(user()->id, [
                'saldo' => user()->saldo - ($jumlahAwal - $jumlahPost)
            ]);

            $this->modelPemasukan->update($this->request->getPost('id'), [
                'desc' => $this->request->getPost('deskripsi'),
                'jumlah' => $jumlahAwal - ($jumlahAwal - $jumlahPost)
            ]);
            return redirect()->route('transaksi/pemasukan')->with('success', 'Pemasukan berhasil diubah');
        }

        $this->user->update(user()->id, [
            'saldo' => user()->saldo + ($jumlahPost - $jumlahAwal)
        ]);

        $this->modelPemasukan->update($this->request->getPost('id'), [
            'desc' => $this->request->getPost('deskripsi'),
            'jumlah' => $jumlahAwal + ($jumlahPost - $jumlahAwal)
        ]);

        return redirect()->route('transaksi/pemasukan')->with('success', 'Pemasukan berhasil diubah');
    }
}
