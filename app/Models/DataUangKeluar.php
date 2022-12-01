<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataUangKeluar extends Model
{
    use HasFactory;

    protected $table = 'data_uang_keluars';
    protected $fillable = ['bulan', 'jumlah'];
}
