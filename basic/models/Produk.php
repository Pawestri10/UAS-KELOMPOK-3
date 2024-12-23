<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produk".
 *
 * @property int $id_produk
 * @property string|null $nama_produk
 * @property string|null $jenis_produk
 * @property int|null $harga_produk
 *
 * @property DetailTransaksi[] $detailTransaksis
 * @property Stok[] $stoks
 */
class Produk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_produk'], 'required'],
            [['id_produk', 'harga_produk'], 'integer'],
            [['nama_produk', 'jenis_produk'], 'string', 'max' => 50],
            [['id_produk'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_produk' => 'Id Produk',
            'nama_produk' => 'Nama Produk',
            'jenis_produk' => 'Jenis Produk',
            'harga_produk' => 'Harga Produk',
        ];
    }

    /**
     * Gets query for [[DetailTransaksis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailTransaksis()
    {
        return $this->hasMany(DetailTransaksi::class, ['id_produk' => 'id_produk']);
    }

    /**
     * Gets query for [[Stoks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStoks()
    {
        return $this->hasMany(Stok::class, ['id_produk' => 'id_produk']);
    }
}
