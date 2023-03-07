<?php

namespace App\Http\Controllers\User;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\schedule;

class TestpaymentController extends Controller
{
    public function payment()
    {
        return view('pages.user.payment.payment_index');
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
