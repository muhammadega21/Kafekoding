<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showcase extends Model
{
    use HasFactory;
    protected $table = 'tb_showcase';

    protected $fillable = [
        'id_showcase',
        'deskripsi_showcase',
        'bidang_showcase',
        'link_showcase',
        'gambar_showcase',
    ];


    public static function GenerateID()
    {
        $prefix = 'showcase' . date('Ymd');
        $MaxID = Showcase::where('id_showcase', 'like', $prefix . '%')->max('id_showcase');

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