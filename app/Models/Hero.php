<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;


    protected $table = 'tb_hero';

    protected $fillable = [
        'id_hero',
        'judul_hero',
        'deskripsi_hero',
        'link_hero',
        'status_hero',
        'gambar_hero',
    ];


    public static function GenerateID()
    {
        $prefix = 'HERO' . date('Ymd');
        $MaxID = Hero::where('id_hero', 'like', $prefix . '%')->max('id_hero');

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
