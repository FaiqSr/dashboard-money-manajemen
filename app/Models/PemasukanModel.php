<?php

namespace App\Models;

use CodeIgniter\Model;

class PemasukanModel extends Model
{
    protected $table = 'pemasukan';
    protected $primaryKey = 'id';


    protected $useTimestamps = true;
    protected $useAutoIncrement = true;

    protected $allowedFields = ['user_id', 'tanggal', 'jumlah', 'desc'];

    protected $createdField  = 'created_at';
    protected $deletedField  = 'deleted_at';
    protected $updatedField  = 'updated_at';


    public function deletePemasukan() {}

    public function getAllPemasukan($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        $builder = $this->builder();

        $builder->selectSum('jumlah')->where('user_id', $id);

        $query = $builder->get();

        return $query->getRow()->jumlah;
    }

    public function getPemasukanPerBulan($id = false, $bulan = false)
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
    public function getPemasukanPengeluaran($userId)
    {

        $query = $this->db->query("
           (SELECT 
                id AS id_pemasukan,
                tanggal AS tanggal_pemasukan,
                NULL AS tanggal_pengeluaran,
                `desc` AS desc_pemasukan, 
                NULL AS desc_pengeluaran,
                jumlah AS jumlah_pemasukan,
                NULL AS jumlah_pengeluaran,
                'pemasukan' AS type
            FROM pemasukan
            WHERE user_id = $userId)
            
            UNION ALL
            
            (SELECT 
                NULL AS id_pemasukan,
                NULL AS tanggal_pemasukan,
                tanggal AS tanggal_pengeluaran,
                NULL AS desc_pemasukan,
                `desc` AS desc_pengeluaran,
                NULL AS jumlah_pemasukan,
                jumlah AS jumlah_pengeluaran,
                'pengeluaran' AS type
            FROM pengeluaran
            WHERE user_id = $userId)
            
            ORDER BY COALESCE(tanggal_pemasukan, tanggal_pengeluaran) ASC
        ");

        return $query->getResult();  // Mengembalikan data sebagai array objek
    }
}
