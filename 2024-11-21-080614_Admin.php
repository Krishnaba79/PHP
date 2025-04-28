<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admin extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '40'
            ],
            'phone' => [
                'type' => 'VARCHAR',
                'constraint' => '15'
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '30'
            ],
            'user_type' => [
                'type' => 'ENUM("admin","user")',
                'default' => "user",
                'null' => false,

            ],
        ]);

        $this->forge->addKey('id');
        $this->forge->createTable("Admin");
    }


    public function down()
    {
        $this->forge->dropTable("Admin");
    }
}
