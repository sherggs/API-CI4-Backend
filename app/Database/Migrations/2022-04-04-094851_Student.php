<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Student extends Migration
{
    public function up()
    {
        //Table datas : Name, Course and about  
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'auto_increment' => true
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 200
            ],
            'course' => [
                'type' => 'VARCHAR',
                'constraint' => 30
            ],
            'about' => [
                'type' => 'VARCHAR',
                'constraint' => 256
            ]
        ]);
        $this->forge->addKey('id', true); //id is identified as the primary key 
        $this->forge->createTable('students'); //name of the table created 
    }

    public function down()
    {
        //
    }
}
