<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bidang;
use App\Models\Consultant;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Image;

class JasapakarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pakars = Consultant::with('bidangs')->orderBy('id', 'desc')->paginate(10);
        $bidangs = Bidang::pluck('id', 'name');

        //dd($pakars);
        return view('pages.admin.pakar.index', compact('pakars', 'bidangs'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.pakar.create');
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
            "Maksimal foto 2MB."
        ];
        $validated = $request->validate([
            'pakarFoto' => 'required|image|mimes:jpg,png,jpeg|max:3000',
            'pakarName' => 'required|min:3|max:255',
            'pakarNIP' => 'required|min:1',
            'pakarEmail' => 'required|email|min:1|max:255',
            'pakarBidang' => 'required|min:1|max:255',
            'pakarHarga'  => 'required',
            'pakarDeskripsi' => 'required',
            'pakarPengalaman' => 'required',
            'pakarHari' => 'required',
            'pakarLokasi' => 'required',
            'pakarSertif' => 'required',
            'pakarLuar' => 'required',
        ], $messages);

        $image_path = Storage::putFile('pakarImage', $request->pakarFoto);
        Consultant::create([
            'foto_profil' => $image_path,
            'nama_pakar' => $request->pakarName,
            'NIP' => $request->pakarNIP,
            'email_pakar' => $request->pakarEmail,
            'bidang_id' => $request->pakarBidang,
            'deskripsi' => $request->pakarDeskripsi,
            'pengalaman' => $request->pakarPengalaman,
            'hari_pakar' => $request->pakarHari,
            'lokasi' => $request->pakarLokasi,
            'sertifikat' => $request->pakarSertif,
            'pengalaman_luar' => $request->pakarLuar,
            'harga_jasa' => $request->pakarHarga,
        ]);


        return redirect()->route('pakar.index')->with('status', 'berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($pakar)
    {
        // dd($pakars);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Consultant $pakar)
    {
        // return view('pages.admin.pakar.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consultant $pakar)
    {

        $this->validate($request, [
            'pakarFoto' => 'required|image|mimes:jpg,png,jpeg|max:3000',
            'pakarName' => 'required|min:3|max:255',
            'pakarNIP' => 'required',
            'pakarEmail' => 'required|email',
            'pakarBidang' => 'required|min:1|max:255',
            'pakarHarga'  => 'required',
            'pakarDeskripsi' => 'required',
            'pakarPengalaman' => 'required',
            'pakarHari' => 'required',
            'pakarLokasi' => 'required',
            'pakarSertif' => 'required',
            'pakarLuar' => 'required',
        ]);

        $pakar = Consultant::findOrFail($pakar->id);
        if ($request->hasFile('foto_profil') == "") {
            $image_path = Storage::putFile('pakarImage', $request->pakarFoto);
            $pakar->update([
                'foto_profil' => $image_path,
                'nama_pakar' => $request->pakarName,
                'NIP' => $request->pakarNIP,
                'email_pakar' => $request->pakarEmail,
                'bidang_id' => $request->pakarBidang,
                'deskripsi' => $request->pakarDeskripsi,
                'pengalaman' => $request->pakarPengalaman,
                'hari_pakar' => $request->pakarHari,
                'lokasi' => $request->pakarLokasi,
                'sertifikat' => $request->pakarSertif,
                'pengalaman_luar' => $request->pakarLuar,
                'harga_jasa' => $request->pakarHarga,
            ]);
        } else {

            //hapus old image
            Storage::delete($image_path);
            Storage::disk('hosting')->delete('pakarImage' . $pakar->foto_profil);

            //upload new image
            $foto_profil = $request->file('foto_profil');
            $foto_profil->storeAs('pakarImage', $foto_profil->hashName());

            $pakar->update([
                'foto_profil' => $foto_profil->hashName(),
                'nama_pakar' => $request->pakarName,
                'NIP' => $request->pakarNIP,
                'email_pakar' => $request->pakarEmail,
                'bidang_id' => $request->pakarBidang,
                'deskripsi' => $request->pakarDeskripsi,
                'pengalaman' => $request->pakarPengalaman,
                'hari_pakar' => $request->pakarHari,
                'lokasi' => $request->pakarLokasi,
                'sertifikat' => $request->pakarSertif,
                'pengalaman_luar' => $request->pakarLuar,
                'harga_jasa' => $request->pakarHarga,
            ]);
        }

        if ($pakar) {
            //redirect dengan pesan sukses
            return redirect()->route('pakar.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('pakar.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(consultant $pakar)
    {
        // var_dump($pakar->foto_profil);
        if (storage::exists($pakar->foto_profil)) {
            storage::delete($pakar->foto_profil);
            // dd('text');
        }
        $pakar->delete();
        ## Read file path
        //  $image_path = $request->post('pakarImage');
        if ($pakar) {
            return redirect()
                ->route('pakar.index')
                ->with([
                    'success' => 'Post has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('pakar.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
