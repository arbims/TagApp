<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TagsTable extends Migration
{
    public function up()
    {
        $this->forge->addField('id');
        $this->forge->addField([
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ]
        ]);
        $this->forge->createTable('tags');
    }

    public function down()
    {
        $this->forge->dropTable('tags');
    }
}
