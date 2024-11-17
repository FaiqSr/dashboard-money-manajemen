<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCategoryTabel extends Migration
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
            'user_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'nama' => [
                'type'       => 'TEXT',
                'null'       => true, // Jika deskripsi opsional
            ],
            'jumlah' => [
                'type'       => 'INT',
                'constraint' => 11, // Maksimal 10 digit, 2 desimal
                'null'       => false,
            ],
            'sisa' => [
                'type'       => 'INT',
                'constraint' => 11, // Maksimal 10 digit, 2 desimal
                'null'       => false,
                'default'  => 0
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
        $this->forge->createTable('category');
    }

    public function down()
    {
        // Drop Table jika rollback
        $this->forge->dropTable('category');
    }
}
