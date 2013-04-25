<?php defined('BASEPATH') OR exit('No direct script access allowed');

/* This basic migration has been auto-generated by the Gas ORM */

class Migration_penguat_tirmidzi extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'NoUrut' => array(
				'type' => 'INT',
				'constraint' => 6,
			),
			'NoHdt' => array(
				'type' => 'INT',
				'constraint' => 6,
			),
			'Nama' => array(
				'type' => 'VARCHAR',
				'constraint' => 40,
			),
			'NoBanding' => array(
				'type' => 'INT',
				'constraint' => 6,
			),
		));

		$this->dbforge->create_table('penguat_tirmidzi', TRUE);
	}

	public function down()
	{
		$this->dbforge->drop_table('penguat_tirmidzi');
	}
}