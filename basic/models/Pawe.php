<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pawe".
 *
 * @property int $id_pawe
 * @property string|null $nama_pawe
 */
class Pawe extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pawe';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pawe'], 'required'],
            [['id_pawe'], 'integer'],
            [['nama_pawe'], 'string', 'max' => 30],
            [['id_pawe'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pawe' => 'Id Pawe',
            'nama_pawe' => 'Nama Pawe',
        ];
    }
}
