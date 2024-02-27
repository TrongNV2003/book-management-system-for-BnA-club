<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableRequest extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'requestID' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'book_id' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'user_phone' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'user_email' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'request_date' => [
                'type'       => 'DATETIME',
            ],
            'holding_time' => [
                'type'       => 'INT',
                'constraint' => 1,
                'unsigned'       => true,
            ],
            'type' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'session_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'       => true,
            ],
        ]);
        $this->forge->addKey('requestID', true);
        $this->forge->createTable('request');
    }

    public function down()
    {
        $this->forge->dropTable('request');
    }
}
