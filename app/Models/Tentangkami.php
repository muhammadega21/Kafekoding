<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tentangkami extends Model
{
    use HasFactory;


    protected $table = 'tb_tentangkami';
    // protected $primaryKey = 'id_tentangkami';

    protected $fillable = [
        'id_tentangkami',
        'deskripsi_tentangkami',
        'gambar1_tentangkami',
        'gambar2_tentangkami',
        'gambar3_tentangkami',
        'gambar4_tentangkami',
        'status_tentangkami',
    ];


    public static function GenerateID()
    {
        $prefix = 'tentangkami' . date('Ymd');
        $MaxID = Tentangkami::where('id_tentangkami', 'like', $prefix . '%')->max('id_tentangkami');

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