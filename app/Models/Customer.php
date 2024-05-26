<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'm_customer'; // sesuaikan dengan nama tabel yang benar

    protected $fillable = [
        'user_id', 'namaCustomer', 'nomorTelepon', 'alamat',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
