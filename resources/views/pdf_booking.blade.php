<!DOCTYPE html>
<html>
<head>
    <title>Invoice Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header img {
            max-width: 150px;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="{{ public_path('images/Logo.png') }}" class="w-1/2 mx-auto rounded-full" alt="">
    </div>
    <h1>Booking Details</h1>
    <table>
        <tr>
            <td><strong>Booking ID:</strong></td>
            <td>{{ $booking->id }}</td>
        </tr>
        <tr>
            <td><strong>User Name:</strong></td>
            <td>{{ $booking->user->name }}</td>
        </tr>
        <tr>
            <td><strong>Item Name:</strong></td>
            <td>{{ $booking->item->name }}</td>
        </tr>
        <tr>
            <td><strong>Start Date:</strong></td>
            <td>{{ $booking->start_date }}</td>
        </tr>
        <tr>
            <td><strong>End Date:</strong></td>
            <td>{{ $booking->end_date }}</td>
        </tr>
        <tr>
            <td><strong>Durasi Sewa:</strong></td>
            <td>{{ $duration }} hari</td>
        </tr>
        <tr>
            <td><strong>Status:</strong></td>
            <td>{{ $booking->status }}</td>
        </tr>
        <tr>
            <td><strong>Payment Status:</strong></td>
            <td>{{ $booking->payment_status }}</td>
        </tr>
        <tr>
            <td><strong>Total Price:</strong></td>
            <td>Rp {{ number_format($booking->total_price, 0, ',', '.') }}</td>
        </tr>
    </table>


    <!-- Tambahkan info lainnya sesuai kebutuhan -->

    <div class="footer">
        &copy; {{ date('Y') }} Ferdyra. E-Carent
    </div>
</body>
</html>
