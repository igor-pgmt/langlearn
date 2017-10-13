<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `tag1`.
 */
class m171010_115907_create_tag1_table extends Migration
{
	/**
	 * @inheritdoc
	 */
	public function up()
	{
		$this->createTable('{{%tag1}}', [
			'id' => Schema::TYPE_PK,
			'name' => Schema::TYPE_STRING . ' NOT NULL',
			'frequency' => Schema::TYPE_INTEGER . ' NOT NULL DEFAULT 0',
		]);
	}

	/**
	 * @inheritdoc
	 */
	public function down()
	{
		$this->dropTable('tag1');
	}
}
