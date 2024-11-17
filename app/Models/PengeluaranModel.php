<?php

namespace App\Models;

use CodeIgniter\Model;

class PengeluaranModel extends Model
{
    protected $table = 'pengeluaran';
    protected $primaryKey = 'id';


    protected $useAutoIncrement = true;

    protected $allowedFields = ['user_id', 'category_id', 'tanggal', 'jumlah', 'desc'];

    protected $createdField  = 'created_at';
    protected $deletedField  = 'deleted_at';
    protected $updatedField  = 'updated_at';

    public function getAllPengeluaran($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        $builder = $this->builder();

        $builder->selectSum('jumlah')->where('user_id', $id);

        $query = $builder->get();

        return $query->getRow()->jumlah;
    }

    public function getPengeluaranPerBulan($id = false, $bulan = false)
    {

        if ($id == false || $bulan == false) {
            return 0; // Jika parameter tidak valid, kembalikan 0
        }

        $builder = $this->builder();

        $builder->selectSum('jumlah')
            ->where('MONTH(tanggal)', $bulan)
            ->where('user_id', $id);

        $query = $builder->get();
        $result = $query->getRow();

        // Jika tidak ada data, atau hasilnya null, kembalikan 0
        return $result->jumlah ?? 0;
    }

    public function getPengeluaran($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        $builder = $this->builder();
    }


    // Method untuk mengambil data pengeluaran beserta kategori
    public function getPengeluaranWithCategory($userId)
    {
        // Join dengan tabel category berdasarkan category_id
        return $this->select('pengeluaran.*, category.nama as category_nama')
            ->join('category', 'category.id = pengeluaran.category_id', 'left')
            ->where('pengeluaran.user_id', $userId)
            ->findAll();
    }
}
