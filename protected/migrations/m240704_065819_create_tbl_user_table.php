<?php

class m240704_065819_create_tbl_user_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('tbl_user', array(
			'id' => 'pk',
			'username' => 'string NOT NULL',
			'password' => 'string NOT NULL',
			'email' => 'string NOT NULL',
			'profile' => 'text'
		));
	}

	public function down()
	{
		$this->dropTable('tbl_user');
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