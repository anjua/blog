<?php

class m240704_070654_create_tbl_tag_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('tbl_tag', array(
			'id' => 'pk',
			'name' => 'string NOT NULL',
			'frequency' => 'integer DEFAULT 1'
		));
	}

	public function down()
	{
		$this->dropTable('tbl_tag');
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