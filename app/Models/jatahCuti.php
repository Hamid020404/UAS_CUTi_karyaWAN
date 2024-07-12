<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jatahCuti extends Model
{
    use HasFactory;
    protected $table = 'jatahcuti';
    protected $fillable = ['tahun', 'jumlah', 'nip'];
}
