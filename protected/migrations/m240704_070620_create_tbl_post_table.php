<?php

class m240704_070620_create_tbl_post_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('tbl_post', array(
			'id' => 'pk',
			'title' => 'string NOT NULL',
			'content' => 'text NOT NULL',
			'tags' => 'text',
			'status' => 'integer NOT NULL',
			'create_time' => 'integer',
			'update_time' => 'integer',
			'author_id' => 'integer NOT NULL'
		));

		$this->addForeignKey('fk_post_user', 'tbl_post', 'author_id', 'tbl_user', 'id', 'CASCADE', 'RESTRICT');
	}

	public function down()
	{
		$this->dropForeignKey('post_user_fk', 'tbl_post');
		$this->dropTable('tbl_post');
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