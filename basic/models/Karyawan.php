<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "karyawan".
 *
 * @property string $id_karyawan
 * @property string|null $nama_depan
 * @property string|null $nama_belakang
 * @property string|null $jenis_kelamin
 * @property string|null $alamat_karyawan
 *
 * @property Stok[] $stoks
 * @property Transaksi[] $transaksis
 */
class Karyawan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'karyawan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_karyawan'], 'required'],
            [['id_karyawan'], 'string', 'max' => 10],
            [['nama_depan', 'nama_belakang'], 'string', 'max' => 20],
            [['jenis_kelamin'], 'string', 'max' => 15],
            [['alamat_karyawan'], 'string', 'max' => 50],
            [['id_karyawan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_karyawan' => 'Id Karyawan',
            'nama_depan' => 'Nama Depan',
            'nama_belakang' => 'Nama Belakang',
            'jenis_kelamin' => 'Jenis Kelamin',
            'alamat_karyawan' => 'Alamat Karyawan',
        ];
    }

    /**
     * Gets query for [[Stoks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStoks()
    {
        return $this->hasMany(Stok::class, ['id_karyawan' => 'id_karyawan']);
    }

    /**
     * Gets query for [[Transaksis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksis()
    {
        return $this->hasMany(Transaksi::class, ['id_karyawan' => 'id_karyawan']);
    }
}
