<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderProgress extends Model
{
    protected $table = 'order_progresses'; // Set table explicitly to ensure correct pluralization

    protected $fillable = [
        'order_id', 'staf_id', 'deskripsi_progress', 'status_pengerjaan', 'jadwal_tenggat_waktu'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function staf()
    {
        return $this->belongsTo(User::class, 'staf_id');
    }
}
