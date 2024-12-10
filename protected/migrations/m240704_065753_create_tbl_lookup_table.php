<?php

class m240704_065753_create_tbl_lookup_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('tbl_lookup', array(
			'id' => 'pk',
			'name' => 'string NOT NULL',
			'code' => 'integer NOT NULL',
			'type' => 'string NOT NULL',
			'position' => 'integer NOT NULL'
		));
	}

	public function down()
	{
		$this->dropTable('tbl_lookup');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}