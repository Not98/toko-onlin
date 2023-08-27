<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Detailtransaksi extends Migration
{
    public function up()
    {
    $this->forge->addField([
        'id' => [
            'type' => 'INT',
            'constraint' => 11,
            'unsigned' => true,
            'auto_increment' => true,
        ],
        'code_trx' => [
            'type' => 'VARCHAR',
            'constraint' => 255,
        ],
        'code_barang_trx' => [
            'type' => 'VARCHAR',
            'constraint' => 255,
            'null' => true,
        ],
        'code_gudang' => [
            'type' => 'VARCHAR',
            'constraint' => 255,
            'null' => true,
        ],
        'jenis_trx' => [
            'type' => 'ENUM("Penerimaan","Pengeluaran","Perpindahan")',
        ],
        'jumlah_trx' => [
            'type' => 'INT',
            'constraint' => 11,
            'null' => true,
        ],
        'id_satuan_trx' => [
            'type' => 'INT',
            'constraint' => 11,
            'null' => true,
        ],
        'tanggal_trx' => [
            'type' => 'DATE',
            'null' => true,
        ],
        'user' => [
            'type' => 'VARCHAR',
            'constraint' => 255,
            'null' => true,
        ],
        'created_at' => [
            'type' => 'DATETIME',
            'default' => new RawSql('CURRENT_TIMESTAMP'),
        ],
        'updated_at' => [
            'type' => 'DATETIME',
            'default' => new RawSql('CURRENT_TIMESTAMP'),
        ],
    ]);

    $this->forge->addKey('id', true);
    $this->forge->createTable('detailtransaksi');

}

public function down()
{
    $this->forge->dropTable('detailtransaksi');
}
}

