<?php

class m240704_070644_create_tbl_comment_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('tbl_comment', array(
			'id' => 'pk',
			'content' => 'text NOT NULL',
			'status' => 'integer NOT NULL',
			'create_time' => 'integer',
			'author' => 'string NOT NULL',
			'email' => 'string NOT NULL',
			'url' => 'string',
			'post_id' => 'integer NOT NULL'
		));

		$this->addForeignKey('comment_post_fk', 'tbl_comment', 'post_id', 'tbl_post', 'id', 'CASCADE', 'RESTRICT');
	}

	public function down()
	{
		$this->dropForeignKey('comment_post_fk', 'tbl_comment');
		$this->dropTable('tbl_comment');
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