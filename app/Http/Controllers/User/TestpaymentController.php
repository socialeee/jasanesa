<?php

namespace App\Http\Controllers\User;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bidang;
use App\Models\Consultant;
use App\Models\payment;
use App\Models\schedule;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
// use Alert;

class TestpaymentController extends Controller
{
    public function generateRandomString($length = 5)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function payment($id)
    {
        $user = auth()->user();
        // $consultant = Consultant::where('id', '=', $id)->get();
        $consultant = Consultant::find($id);
        return view('pages.user.payment.payment_index', compact('consultant', 'user'));
    }

    public function show(User $user, Consultant $consultant, $id)
    {
        // dd($user);
        $user = auth()->user();
        $consultant = Consultant::find($id);
        return view('pages.user.payment.show', compact('user', 'consultant'));
    }

    public function store(Request $request)
    {
        $messages = [
            "Maksimal foto 2MB."
        ];
        $validatedData = $request->validate([
            'bukti_pembayaran' => 'required|image|mimes:jpeg,png,jpg,heic,svg|max:2048',
            // 'total_pembayaran' => 'required',
        ], $messages);

        // Generate unique booking code
        $booking_code = $this->generateRandomString(5) . time();
        do {
            $booking_code = $this->generateRandomString(5) . time();
        } while (Payment::where('kode_booking', $booking_code)->exists());

        $invoice_code = 'INV-' . $booking_code;

        // ambil data consultant berdasarkan id
        $consultant = Consultant::find($request->input('consultant_id'));
        // simpan harga konsultasi ke dalam variabel $harga
        $harga = $consultant->harga_jasa;
        $total_pembayaran = $harga;

        $image_path = Storage::putFile('bayarImage', $request->bukti_pembayaran);
        $payment = new Payment();
        $payment->bukti_pembayaran = $image_path;
        $payment->kode_booking = $booking_code;
        $payment->invoice = $invoice_code;
        $payment->total_pembayaran = $harga;
        $payment->user_id = auth()->user()->id;
        $payment->consultant_id = $request->input('consultant_id');
        $payment->save();

        // dd($booking_code, $invoice_code);
        Alert::success('Pembayaran berhasil', 'Silahkan menunggu konfirmasi admin');
        return redirect()->back();
        // return redirect()->back()->alert('Title', 'Lorem Lorem Lorem', 'success');
    }

    public function booking(Request $request)
    {
        // dd($request->all());
        $event = Event::create([
            'title' => $request->title,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,

        ]);
        // dd($event);
        if ($event) {
            return redirect()->back()->with('success', 'berhasil');
        }
        return redirect()->back()->with('error', 'gagal masuk');
    }
    public function event()
    {
        $events = Event::all();
        return response()->json($events);
    }

    public function schedule()
    {
        $schedule = schedule::all();
        dd($schedule);
        return view('/', compact('schedule'));
    }
}
