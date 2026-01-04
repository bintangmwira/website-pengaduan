<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Pengaduan extends Model
{
    use HasFactory;

    protected $table = 'pengaduan';

    protected $fillable = [
        'user_id',
        'kategori',
        'keluhan',
        'tingkat_kepentingan',
        'bukti',
        'status'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
