<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `verb_tag1_assn`.
 */
class m171010_120129_create_verb_tag1_assn_table extends Migration
{
	/**
	 * @inheritdoc
	 */
	public function up()
	{

		$this->createTable('{{%verb_tag1_assn}}', [
			'verb_id' => Schema::TYPE_INTEGER . ' NOT NULL',
			'tag_id' => Schema::TYPE_INTEGER . ' NOT NULL',
		]);

		$this->addPrimaryKey('', '{{%verb_tag1_assn}}', ['verb_id', 'tag_id']);
	}

	/**
	 * @inheritdoc
	 */
	public function down()
	{
		$this->dropTable('verb_tag1_assn');
	}
}
