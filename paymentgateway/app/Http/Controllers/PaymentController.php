<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Xendit\Configuration;
use Xendit\Invoice\InvoiceApi;
use Xendit\Invoice\CreateInvoiceRequest;

class PaymentController extends Controller
{
    public function __construct()
    {
        Configuration::setXenditKey(env('XENDIT_SECRET_KEY'));
    }

    public function createInvoice()
    {
        $apiInstance = new InvoiceApi();
        $invoiceData = new CreateInvoiceRequest([
            'external_id' => 'cetakpro-inv-' . time(),
            'amount' => 150000,
            'payer_email' => 'pelanggan@email.com',
            'description' => 'Pembayaran Cetak Banner & Poster',
            'success_redirect_url' => url('/payment-success'),
        ]);

        try {
            $response = $apiInstance->createInvoice($invoiceData);
            return redirect($response->getInvoiceUrl());
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
