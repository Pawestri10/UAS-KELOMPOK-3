<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detail".
 *
 * @property string $id_detail
 * @property int|null $id_produk
 * @property int|null $jumlah_produk
 * @property int|null $total_produk
 *
 * @property Produk $produk
 */
class Detail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_detail'], 'required'],
            [['id_produk', 'jumlah_produk', 'total_produk'], 'integer'],
            [['id_detail'], 'string', 'max' => 10],
            [['id_detail'], 'unique'],
            [['id_produk'], 'exist', 'skipOnError' => true, 'targetClass' => Produk::class, 'targetAttribute' => ['id_produk' => 'id_produk']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_detail' => 'Id Detail',
            'id_produk' => 'Id Produk',
            'jumlah_produk' => 'Jumlah Produk',
            'total_produk' => 'Total Produk',
        ];
    }

    /**
     * Gets query for [[Produk]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduk()
    {
        return $this->hasOne(Produk::class, ['id_produk' => 'id_produk']);
    }
}
