<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "stok".
 *
 * @property string $id_stok
 * @property string|null $id_pemasok
 * @property int|null $id_produk
 * @property string|null $id_karyawan
 * @property string|null $tgl_kirim
 * @property int|null $jumlah_produk_masuk
 *
 * @property Karyawan $karyawan
 * @property Pemasok $pemasok
 * @property Produk $produk
 */
class Stok extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'stok';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_stok'], 'required'],
            [['id_produk', 'jumlah_produk_masuk'], 'integer'],
            [['tgl_kirim'], 'safe'],
            [['id_stok', 'id_pemasok', 'id_karyawan'], 'string', 'max' => 10],
            [['id_stok'], 'unique'],
            [['id_pemasok'], 'exist', 'skipOnError' => true, 'targetClass' => Pemasok::class, 'targetAttribute' => ['id_pemasok' => 'id_pemasok']],
            [['id_produk'], 'exist', 'skipOnError' => true, 'targetClass' => Produk::class, 'targetAttribute' => ['id_produk' => 'id_produk']],
            [['id_karyawan'], 'exist', 'skipOnError' => true, 'targetClass' => Karyawan::class, 'targetAttribute' => ['id_karyawan' => 'id_karyawan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_stok' => 'Id Stok',
            'id_pemasok' => 'Id Pemasok',
            'id_produk' => 'Id Produk',
            'id_karyawan' => 'Id Karyawan',
            'tgl_kirim' => 'Tgl Kirim',
            'jumlah_produk_masuk' => 'Jumlah Produk Masuk',
        ];
    }

    /**
     * Gets query for [[Karyawan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKaryawan()
    {
        return $this->hasOne(Karyawan::class, ['id_karyawan' => 'id_karyawan']);
    }

    /**
     * Gets query for [[Pemasok]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPemasok()
    {
        return $this->hasOne(Pemasok::class, ['id_pemasok' => 'id_pemasok']);
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
