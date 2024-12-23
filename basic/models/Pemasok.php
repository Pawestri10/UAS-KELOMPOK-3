<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pemasok".
 *
 * @property string $id_pemasok
 * @property string|null $nama_pemasok
 * @property string|null $asal_pemasok
 * @property int|null $tlp_pemasok
 *
 * @property Stok[] $stoks
 */
class Pemasok extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pemasok';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pemasok'], 'required'],
            [['tlp_pemasok'], 'integer'],
            [['id_pemasok'], 'string', 'max' => 10],
            [['nama_pemasok', 'asal_pemasok'], 'string', 'max' => 50],
            [['id_pemasok'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pemasok' => 'Id Pemasok',
            'nama_pemasok' => 'Nama Pemasok',
            'asal_pemasok' => 'Asal Pemasok',
            'tlp_pemasok' => 'Tlp Pemasok',
        ];
    }

    /**
     * Gets query for [[Stoks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStoks()
    {
        return $this->hasMany(Stok::class, ['id_pemasok' => 'id_pemasok']);
    }
}
