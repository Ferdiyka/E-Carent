<?php

namespace App\Http\Controllers\Front;

use Carbon\Carbon;
use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CheckoutController extends Controller
{
    public function index(Request $request, $slug) {
        $item = Item::with(['type', 'brand'])->where('slug', $slug)->firstOrFail();

        // Ambil JSON dari kolom 'photos' dan decode menjadi array
        $photosJson = json_decode($item->photos, true);

        // Ambil path foto pertama dari array
        $gambar_url = Storage::url($photosJson[0]); // Gunakan Storage untuk mengonversi path

        return view('checkout', [
            'item' => $item,
            'gambar_url' => $gambar_url, // Kirimkan variabel $gambar_url ke tampilan
        ]);
    }



    public function store(Request $request, $slug) {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:256',
            'start_date' => 'required',
            'end_date' => 'required',
            'address' => 'required|string|max:256',
            'city' => 'required|string|max:256',
            'zip' => 'required|string|max:5',
        ]);

        //Format start_date and end_date
        $start_date = Carbon::createFromFormat('d m Y', $request->start_date);
        $end_date = Carbon::createFromFormat('d m Y', $request->end_date);

        //Count the number of days between start_date and end_date
        $days = $start_date->diffInDays($end_date);

        //get the item
        $item = Item::whereSlug($slug)->firstOrFail();

        // Calculate the total price
        $total_price = $days * $item->price;

        // add tax 10%
        $total_price = $total_price + ($total_price * 0.10);

        //create the booking
        $booking = $item->bookings()->create([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'address' => $request->address,
            'city' => $request->city,
            'zip' => $request->zip,
            'total_price' => $total_price,
        ]);

        return redirect()->route('front.payment', $booking->id);
    }
}
