<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Posts extends Migration
{
    public function up()
    {
            $this->forge->addField([
                    'post_id' => [
                            'type'           => 'INT',
                            'constraint'     => 11,
                            'unsigned'       => true,
                            'auto_increment' => true
                    ],
                    'judul' => [
                            'type'       => 'VARCHAR',
                            'constraint' => 100
                    ],
                    'deskripsi' => [
                            'type' => 'TEXT',
                            'null' => true
                    ],
                    'gambar'   => [
                        'type'  => 'VARCHAR',
                        'constraint' => 50,
                        'null' => true
                    ],
                    'author' => [
                        'type' => 'VARCHAR',
                        'constraint' => 100
                    ],
                    'kategori' => [
                        'type' => 'VARCHAR',
                        'constraint' => 100
                    ],
                    'slug' => [
                        'type' => 'VARCHAR',
                        'constraint' => 100,
                        'unique' => true
                    ],
                    'created_at' => [
                        'type' => 'DATETIME',
                        'null' => true
                    ],
                    'updated_at' => [
                        'type' => 'DATETIME',
                        'null' => true
                    ],

            ]);
            $this->forge->addKey('post_id', true);
            $this->forge->createTable('Posts');
    }

    public function down()
    {
            $this->forge->dropTable('Posts');
    }
}