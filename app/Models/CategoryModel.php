<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['user_id', 'nama', 'jumlah', 'sisa'];

    protected $createdField  = 'created_at';
    protected $deletedField  = 'deleted_at';
    protected $updatedField  = 'updated_at';

    public function getCategory($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        $builder = $this->builder();

        $result = $builder->where('user_id', $id)->get()->getResultObject();

        // $result = $this->where('user_id', $id)->findAll();

        // Jika tidak ada data, atau hasilnya null, kembalikan 0
        return $result;
    }

    public function insertSisa($id, $sisa)
    {
        $builder = $this->builder();

        $sisaCategory = $builder->where('id', $id)->get()->getRow()->sisa;
        $jumlah = $builder->where('id', $id)->get()->getRow()->jumlah;

        if ($sisaCategory >= $jumlah) {
            return 'Budget sudah terpenuhi';
        }

        return $builder->set('sisa', $sisaCategory + $sisa)->where('id', $id)->update();
    }
}
