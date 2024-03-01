<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelaskafekoding extends Model
{
    use HasFactory;

    protected $table = 'tb_kelaskafekoding';

    protected $fillable = [
        'id_kelaskafekoding',
        'jam_awal_kelaskafekoding',
        'jam_akhir_kelaskafekoding',
        'ruangan_kelaskafekoding',
        'kelas_kelaskafekoding',
        'link_kelaskafekoding',
        'gambar_kelaskafekoding',
    ];


    public static function GenerateID()
    {
        $prefix = 'kelaskafekoding' . date('Ymd');
        $MaxID = Kelaskafekoding::where('id_kelaskafekoding', 'like', $prefix . '%')->max('id_kelaskafekoding');

        if ($MaxID == null) {

            $kode = $prefix . '000000001';
        } else {
            $kode = str_replace($prefix, '', $MaxID);
            $kode = (int)$kode + 1;
            $kode = $prefix . str_pad($kode, 9, '0', STR_PAD_LEFT);
        }

        return $kode;
    }
}