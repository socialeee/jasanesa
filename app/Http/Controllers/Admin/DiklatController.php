<?php

namespace App\Http\Controllers\Admin;

use App\Models\Diklat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DiklatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diklat = Diklat::orderBy('id', 'desc')->paginate(10);
        // return view('pages.admin.fasilitasolahraga.index',compact('sports'));
        return view('pages.admin.diklat.index', compact('diklat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            // "Maksimal foto 2MB."
            "masukkan informasi"
        ];
        $validated = $request->validate([
            // 'pakarFoto' => 'required|image|mimes:jpg,png,jpeg|max:3000',
            'diklatName' => 'required|min:3|max:255',
            'diklatInfo' => 'required|min:1',
            'diklatBahas' => 'required|min:1|max:255',
            'diklatDate' => 'required|min:1|max:255',
            'diklatTime' => 'required',
            'diklatHarga' => 'required',
            // 'pakarHari' => 'required',
            // 'pakarLokasi' => 'required',
            // 'pakarSertif' => 'required',
            // 'pakarLuar' => 'required',
        ], $messages);

        // $image_path = Storage::putFile('pakarImage', $request->pakarFoto);
        Diklat::create([
            // 'foto_profil' => $image_path,
            'judul' => $request->diklatName,
            'informasi_diklat' => $request->diklatInfo,
            'pembahasan_diklat' => $request->diklatBahas,
            'date_start' => $request->diklatDate,
            'time_start' => $request->diklatTime,
            'harga' => $request->diklatHarga,
            // 'hari_pakar' => $request->pakarHari,
            // 'lokasi' => $request->pakarLokasi,
            // 'sertifikat' => $request->pakarSertif,
            // 'pengalaman_luar' => $request->pakarLuar,
            // 'harga_jasa' => $request->pakarHarga,
        ]);


        return redirect()->route('diklat.index')->with('status', 'berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Diklat  $diklat
     * @return \Illuminate\Http\Response
     */
    public function show(Diklat $diklat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Diklat  $diklat
     * @return \Illuminate\Http\Response
     */
    public function edit(Diklat $diklat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Diklat  $diklat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diklat $diklat)
    {
        $this->validate($request, [
            'diklatName' => 'required|min:3|max:255',
            'diklatInfo' => 'required|min:1',
            'diklatBahas' => 'required|min:1',
            'diklatDate' => 'required|min:1|max:255',
            'diklatTime' => 'required',
            'diklatHarga' => 'required',
        ]);
        $diklat = Diklat::findOrFail($diklat->id);
        $diklat->update([
            'judul' => $request->diklatName,
            'informasi_diklat' => $request->diklatInfo,
            'pembahasan_diklat' => $request->diklatBahas,
            'date_start' => $request->diklatDate,
            'time_start' => $request->diklatTime,
            'harga' => $request->diklatHarga,
        ]);
        if ($diklat) {
            //redirect dengan pesan sukses
            return redirect()->route('diklat.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('diklat.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Diklat  $diklat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diklat $diklat)
    {
        //
    }
}
