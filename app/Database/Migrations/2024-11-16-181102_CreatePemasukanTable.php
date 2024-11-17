<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePemasukanTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'tanggal' => [
                'type' => 'DATE',
                'null' => false,
            ],
            'user_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'desc' => [
                'type'       => 'TEXT',
                'null'       => true, // Jika deskripsi opsional
            ],
            'jumlah' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2', // Maksimal 10 digit, 2 desimal
                'null'       => false,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        // Set Primary Key
        $this->forge->addKey('id', true);

        // Set Foreign Key user
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');

        // Create Table
        $this->forge->createTable('pemasukan');
    }

    public function down()
    {
        // Drop Table jika rollback
        $this->forge->dropTable('pemasukan');
    }
}
