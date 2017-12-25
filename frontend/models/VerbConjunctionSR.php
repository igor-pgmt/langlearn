<?php

namespace frontend\models;

use yii\base\Model;

/**
 * This is the model class for property "conjunction" of table "verb".
 *
 * @property string $rgp
 * @property string $present
 * @property string $aorist
 * @property string $perfekat
 * @property string $imperfekat1
 * @property string $imperfekat2
 * @property string $pluskvamperfekat1
 * @property string $pluskvamperfekat2
 * @property string $pluskvamperfekat3
 * @property string $potencijal
 * @property string $potencijalprosli
 * @property string $imperativ
 * @property string $futur11
 * @property string $futur12
 * @property string $futur13
 * @property string $futur2
 * @property string $gpt
 */
class VerbConjunctionSR extends Model
{
    public $rgp;
    public $present;
    public $aorist;
    public $perfekat;
    public $imperfekat1;
    public $imperfekat2;
    public $pluskvamperfekat1;
    public $pluskvamperfekat2;
    public $pluskvamperfekat3;
    public $potencijal;
    public $potencijalprosli;
    public $imperativ;
    public $futur11;
    public $futur12;
    public $futur13;
    public $futur2;
    public $gpt;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rgp', 'present', 'aorist', 'perfekat', 'imperfekat1', 'imperfekat2', 'pluskvamperfekat1', 'pluskvamperfekat2', 'pluskvamperfekat3', 'potencijal', 'potencijalprosli', 'imperativ', 'futur11', 'futur12', 'futur13', 'futur2', 'gpt'], 'safe'],
        ];
    }

    public function save()
    {
        $this->removeRedundant();
        return json_encode($this);
    }

    public function fill($data)
    {
        $a = json_decode($data);
        foreach ($a as $key => $value) {
            $this->$key = $value;
        }
        $this->removeRedundant();
    }

    private function removeRedundant()
    {
        foreach ($this as $key => $value) {
            if (empty($value)) {
                unset($this->$key);
            }
        }
    }

}
