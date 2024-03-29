<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devisi extends Model
{
    use HasFactory;

    protected $table = 'devisi';
    protected $fillable = [
        'nama_devisi',
        'email_devisi', // Tambahkan kolom email sebagai fillable
    ];
}
