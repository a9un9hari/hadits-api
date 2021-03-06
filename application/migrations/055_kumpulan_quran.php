<?php defined('BASEPATH') OR exit('No direct script access allowed');

/* This basic migration has been auto-generated by the Gas ORM */

class Migration_kumpulan_quran extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'NoUrut' => array(
				'type' => 'INT',
				'constraint' => 8,
			),
			'Urut_Q' => array(
				'type' => 'INT',
				'constraint' => 8,
			),
			'Sumber' => array(
				'type' => 'VARCHAR',
				'constraint' => 20,
			),
			'NoHdt' => array(
				'type' => 'INT',
				'constraint' => 6,
			),
			'Nama_Surat' => array(
				'type' => 'VARCHAR',
				'constraint' => 30,
			),
			'Ayat' => array(
				'type' => 'VARCHAR',
				'constraint' => 20,
			),
			'Isi' => array(
				'type' => 'TEXT',
				'constraint' => 0,
			),
		));

		$this->dbforge->create_table('kumpulan_quran', TRUE);
	}

	public function down()
	{
		$this->dbforge->drop_table('kumpulan_quran');
	}
}