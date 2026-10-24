<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('order_id_unik')->nullable()->unique();
            $table->enum('tipe_pesanan', ['Jersey', 'Digital Printing']);
            $table->integer('jumlah_pesanan')->default(1);
            $table->integer('harga_dasar')->default(90000);
            $table->boolean('opsi_kerah_kancing')->default(false);
            $table->integer('ongkir')->default(0);
            $table->integer('total_harga');
            $table->string('status_pembayaran')->default('Unpaid');
            $table->string('status_pengiriman')->default('Pending');
            $table->string('invoice_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
