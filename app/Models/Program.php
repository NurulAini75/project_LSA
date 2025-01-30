<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $table = 'program';
    // protected $fillable = ['judul','sub_judul','gambar','status']; -> menampilkan properti tertentu
    protected $guarded = [];

}
