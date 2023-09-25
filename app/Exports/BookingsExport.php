<?php

namespace App\Exports;

use App\Models\Booking;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class BookingsExport implements FromCollection, WithHeadings
{
    use Exportable;

    public function collection()
    {
        // Query data yang ingin diekspor
        $bookings = Booking::with(['item.brand', 'user'])->get();

        // Format data sesuai kebutuhan
        $data = $bookings->map(function ($booking) {
            return [
                'ID' => $booking->id,
                'User' => $booking->user->name,
                'Item' => $booking->item->name,
                'Mulai' => $booking->start_date,
                'Selesai' => $booking->end_date,
                'Status Booking' => $booking->status,
                'Status Pembayaran' => $booking->payment_status,
                'Total Dibayar' => $booking->total_price,
            ];
        });

        return $data;
    }

    public function headings(): array
    {
        return [
            'ID',
            'User',
            'Item',
            'Mulai',
            'Selesai',
            'Status Booking',
            'Status Pembayaran',
            'Total Dibayar',
        ];
    }
}

