<?php defined('BASEPATH') OR exit('No direct script access allowed');

/* This basic migration has been auto-generated by the Gas ORM */

class Migration_komentar_imam extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'Kode_Rawi' => array(
				'type' => 'INT',
				'constraint' => 6,
			),
			'Ulama' => array(
				'type' => 'VARCHAR',
				'constraint' => 80,
			),
			'Koment' => array(
				'type' => 'TEXT',
				'constraint' => 0,
			),
		));

		$this->dbforge->create_table('komentar_imam', TRUE);
	}

	public function down()
	{
		$this->dbforge->drop_table('komentar_imam');
	}
}