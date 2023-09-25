<?php

namespace App\Http\Controllers\Front;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function index(Request $request, $bookingId)
    {
        $booking = Booking::with('item.brand', 'item.type')->findOrFail($bookingId);

        return view('payment',[
            'booking' => $booking
        ]);
    }

    public function update(Request $request, $bookingId)
    {
        //load booking data
        $booking = Booking::findOrFail($bookingId);

        //set payment method
        $booking->payment_method = $request->payment_method;


        //handle midtrans payment method
        if ($request->payment_method == 'midtrans')
        {
            //call midtrans API
            \Midtrans\Config::$serverKey = config('services.midtrans.serverKey');
            \Midtrans\Config::$isProduction = config('services.midtrans.isProduction');
            \Midtrans\Config::$isSanitized = config('services.midtrans.isSanitized');
            \Midtrans\Config::$is3ds = config('services.midtrans.is3ds');

            $totalPrice = $booking->total_price;

            // create Midtrans parameters
            // Docs: http://api-docs.midtrans.com/#charge-a-credit-card
            $midtransParams = [
                'transaction_details' => [
                    'order_id' => $booking->id,
                    'gross_amount' => (int) $totalPrice,
                ],
                'customer_details' => [
                    'first_name' => $booking->name,
                    'email' => $booking->user->email,
                ],
                'enabled_payments' => [
                    "bca_klikbca", "bca_klikpay", "bri_epay", "echannel", "permata_va",
                    "bca_va", "bni_va", "bri_va","cimb_va", "other_va", "gopay", "indomaret",
                    "danamon_online", "akulaku", "shopeepay", "kredivo"
                ],
            ];

            // Get Snap Payment Page URL
            $paymentUrl = \Midtrans\Snap::createTransaction($midtransParams)->redirect_url;

            // Save payment URL to booking database
            $booking->payment_url = $paymentUrl;

            // Save Booking
            $booking->save();

            // Redirect to Snap Payment Page
            return redirect($paymentUrl);
        }
        return redirect()->route('front.index');
    }

    public function success(Request $request)
    {
        return view('success');
    }
}
