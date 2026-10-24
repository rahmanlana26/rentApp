<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'order_id_unik', 'tipe_pesanan', 'jumlah_pesanan',
        'harga_dasar', 'opsi_kerah_kancing', 'ongkir', 'total_harga',
        'status_pembayaran', 'status_pengiriman', 'invoice_url'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function progresses()
    {
        return $this->hasMany(OrderProgress::class);
    }
}
