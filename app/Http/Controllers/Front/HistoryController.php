<?php

namespace App\Http\Controllers\Front;

use App\Models\Booking;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;



class HistoryController extends Controller
{
    public function downloadPDF($id)
    {
        $booking = Booking::findOrFail($id);
        // Membuat instance objek PDF
         $pdf = app('dompdf.wrapper');
         $startDate = \Carbon\Carbon::parse($booking->start_date);
         $endDate = \Carbon\Carbon::parse($booking->end_date);
         $duration = $startDate->diffInDays($endDate);

        // Menggunakan metode instance objek PDF untuk menghasilkan PDF
        $pdf = PDF::loadView('pdf_booking', compact('booking', 'duration'));

        // Set nama file PDF
        $fileName = 'booking_' . $booking->id . '.pdf';

        // Mengirim file PDF ke browser untuk di-download
        return $pdf->download($fileName);
    }

public function index()
{
    if (request()->ajax()) {
        $user = Auth::user();
        $query = Booking::with(['item.brand', 'user'])
            ->where('user_id', $user->id);

        $data = DataTables::of($query)
            ->addColumn('durasi_sewa', function ($booking) {
                // Hitung durasi sewa di sini (misalnya, selisih antara start_date dan end_date)
                $start_date = \Carbon\Carbon::parse($booking->start_date);
                $end_date = \Carbon\Carbon::parse($booking->end_date);
                $durasi = $start_date->diffInDays($end_date); // Menghitung selisih dalam hari

                // Tampilkan durasi sewa
                return $durasi . ' hari';
            })

            ->addColumn('action', function ($booking) {
                // Periksa jika payment_status tidak sama dengan "pending"
                if ($booking->payment_status !== 'pending') {
                    return '<a href="' . route('booking.downloadPDF', $booking->id) . '" class="block w-full px-2 py-2 mb-1 text-xs text-center text-white transition duration-500 bg-blue-700 border border-blue-700 rounded-md select-none ease hover:bg-blue-800 focus:outline-none focus:shadow-outline">Download PDF</a>';
                } else {
                    // Jika payment_status adalah "pending", tidak tampilkan tombol
                        return '<a href="#" class="block w-full px-2 py-2 mb-1 text-xs text-center text-black transition duration-500 bg-white border border-blue-700 rounded-md cursor-default select-none ease">Download PDF</a>';
                }
            })
            ->rawColumns(['action'])
            ->make();

        return $data;
    }

    return view('history');
}

}
