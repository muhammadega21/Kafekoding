<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;


    protected $table = 'tb_blog';

    protected $fillable = [
        'id_blog',
        'judul_blog',
        'author_blog',
        'deskripsi_blog',
        'link_blog',
        'gambar_blog',
    ];


    public static function GenerateID()
    {
        $prefix = 'blog' . date('Ymd');
        $MaxID = Blog::where('id_blog', 'like', $prefix . '%')->max('id_blog');

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
