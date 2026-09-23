<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateNasiBekeporTable extends Migration
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
            'nama_makanan' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'kategori' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'asal_daerah' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'default'    => 'Kalimantan Timur',
            ],
            'harga' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'stok' => [
                'type'       => 'INT',
                'constraint' => 11,
                'default'    => 0,
            ],
            'rating' => [
                'type'       => 'DECIMAL',
                'constraint' => '3,1',
                'default'    => 4.8,
            ],
            'deskripsi' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'gambar' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('nasi_bekepor');
    }

    public function down()
    {
        $this->forge->dropTable('nasi_bekepor', true);
    }
}
