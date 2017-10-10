<?php

namespace frontend\models;

use Yii;
use creocoder\taggable\TaggableBehavior;

/**
 * This is the model class for table "verb".
 *
 * @property integer $id
 * @property string $infinitive
 * @property string $conjunction
 * @property string $others
 * @property string $meanings
 * @property string $examples
 * @property integer $related
 * @property integer $rating
 */
class Verb extends \yii\db\ActiveRecord
{
	public function behaviors()
	{
		return [
			'taggable' => [
				'class' => TaggableBehavior::className(),
				// 'tagValuesAsArray' => false,
				// 'tagRelation' => 'tags',
				// 'tagValueAttribute' => 'name',
				// 'tagFrequencyAttribute' => 'frequency',
			],
		];
	}

	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'verb';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['infinitive'], 'required'],
			[['infinitive', 'conjunction', 'others', 'meanings', 'examples', ], 'string'],
			[['rating'], 'integer'],
			[['mainword'], 'boolean'],
			[['tagValues', 'related'], 'safe'],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'id' => Yii::t('frontend', 'ID'),
			'infinitive' => Yii::t('frontend', 'Infinitive'),
			'conjunction' => Yii::t('frontend', 'Conjunction'),
			'others' => Yii::t('frontend', 'others'),
			'meanings' => Yii::t('frontend', 'Meanings'),
			'examples' => Yii::t('frontend', 'Examples'),
			'related' => Yii::t('frontend', 'Related'),
			'rating' => Yii::t('frontend', 'Rating'),
			'tagValues' => Yii::t('frontend', 'Tags1'),
		];
	}

	/**
	 * @inheritdoc
	 * @return VerbQuery the active query used by this AR class.
	 */
	public static function find()
	{
		return new VerbQuery(get_called_class());
	}

	//tagging
	public function transactions()
	{
		return [
			self::SCENARIO_DEFAULT => self::OP_ALL,
		];
	}

	public function getTags()
	{
		return $this->hasMany(Tag1::className(), ['id' => 'tag1_id'])
			->viaTable('{{%verb_tag1_assn}}', ['verb_id' => 'id']);
	}
}
