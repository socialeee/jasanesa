<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        $pakars = Consultant::orderBy('id', 'desc')->paginate(10);
        return view('pages.admin.pakar.index', compact('pakars'));
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
        // $image_path = $request->file('pakarFoto')->store('image', 'public');
        // dd($request->pakarFoto);

        $messages = [
            "Maksimal foto 2MB."
        ];
        $validated = $request->validate([
            'pakarFoto' => 'required|image|mimes:jpg,png,jpeg|max:3000',
            'pakarName' => 'required|min:3|max:255',
            'pakarBidang' => 'required|min:3|max:255',
            'pakarHarga'  => 'required',
            'pakarDeskripsi' => 'required',
        ], $messages);
        // dd($request);
        // $img->resize(100, 100, function ($constraint) {
        //     $constraint->aspectRatio()});
        $image_path = Storage::putFile('pakarImage', $request->pakarFoto);
        Consultant::create([
            'foto_profil' => $image_path,
            'nama_pakar' => $request->pakarName,
            'bidang' => $request->pakarBidang,
            'deskripsi' => $request->pakarDeskripsi,
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
        // if (Consultant::where('id', $id)->exists()) {

        //     $request->validate([
        //         // 'pakarFoto' => 'required|image|mimes:jpg,png,jpeg|max:3000' . $id->foto_profil,
        //         'pakarName' => 'required|min:3|max:255' . $id->nama_pakar,
        //         'pakarBidang' => 'required|min:3|max:255' . $id->bidang,
        //         'pakarHarga'  => 'required' . $id->harga_jasa,
        //         'pakarDeskripsi' => 'required' . $id->deskripsi,
        //         // 'email' => 'required|email|unique:users,email,' . $user->id,
        //     ]);

        //     if ($request->hasFile('foto_profil') && $request->foto_profil != '') {

        //         $pakar = Consultant::where('id', $id)->first();
        //         // dd($pakar);
        //         $image_path = storage_path() . 'pakarImage' . $pakar['foto_profil'];
        //         //You can also check existance of the file in storage.
        //         if (Storage::exists($image_path)) {
        //             unlink($image_path); //delete from storage
        //             // Storage::delete($file_path); //Or you can do it as well
        //         }

        //         $image_path = $request->file('foto_profil')->store('pakarImage'); //new file path

        //         $pakar->update([
        //             'foto_profil' => $image_path,
        //             'nama_pakar' => $request->pakarName,
        //             'bidang' => $request->pakarBidang,
        //             'deskripsi' => $request->pakarDeskripsi,
        //             'harga_jasa' => $request->pakarHarga,
        //             // 'title' => $request->title,
        //             // 'doc_file' => $file //new file path updated
        //         ]);

        //         session()->flash('success', 'Document updated successfully!');
        //         return redirect()->route('pakar.index');
        //     }

        //     session()->flash('error', 'Empty file can not be updated!');
        //     return redirect()->back();
        // }
        // session()->flash('error', 'Record not found!');
        // return redirect()->back();
        $this->validate($request, [
            'pakarFoto' => 'image|mimes:jpg,png,jpeg|max:3000',
            'pakarName' => 'required|min:3|max:255',
            'pakarBidang' => 'required|min:3|max:255',
            'pakarHarga'  => 'required',
            'pakarDeskripsi' => 'required',
        ]);

        $pakar = Consultant::findOrFail($pakar->id);
        if ($request->hasFile('foto_profil') == "") {
            $image_path = Storage::putFile('pakarImage', $request->pakarFoto);
            $pakar->update([
                'foto_profil' => $image_path,
                'nama_pakar' => $request->pakarName,
                'bidang' => $request->pakarBidang,
                'deskripsi' => $request->pakarDeskripsi,
                'harga_jasa' => $request->pakarHarga,
            ]);
            // if ($pakar->file != ''  && $pakar->file != null){
            //    $file_old = $_image_path.$pakar->file;
            //    unlink($file_old);
            // }
            // if (isset($_FILES['file'])) {
            //     $file = $request->file('file');
            //     $name = $file->getClientOriginalName();
            //     $file->move('uploads/images', $name);

            //     if (file_exists(public_path($name =  $file->getClientOriginalName()))) {
            //         unlink(public_path($name));
            //     };
            //     //Update Image
            //     $employee->file = $name;
            // }
        } else {

            //hapus old image
            Storage::delete($image_path);
            Storage::disk('hosting')->delete('pakarImage' . $pakar->foto_profil);

            //upload new image
            $foto_profil = $request->file('foto_profil');
            $foto_profil->storeAs('pakarImage', $foto_profil->hashName());

            $pakar->update([
                'foto_profil' => $foto_profil->hashName(),
                'nama_pakar'  => $request->pakarName,
                'bidang'      => $request->pakarBidang,
                'deskripsi'   => $request->pakarDeskripsi,
                'harga_jasa'  => $request->pakarHarga,
            ]);
        }

        if ($pakar) {
            //redirect dengan pesan sukses
            return redirect()->route('pakar.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('pakar.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
        // $pakar->update($request->all());
        // $image_path = Storage::putFile('pakarImage', $request->pakarFoto);
        // Consultant::table('consultants')->where('id', $request->id)->update([
        //     'foto_profil' => $image_path,
        //     'nama_pakar' => $request->pakarName,
        //     'bidang' => $request->pakarBidang,
        //     'deskripsi' => $request->pakarDeskripsi,
        //     'harga_jasa' => $request->pakarHarga,
        // ]);
        // dd($pakar);
        // return redirect()->route('pakar.index')->with('success', 'Data Has Been Update');
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

    // public function displayImage($pakar)
    // {
    //     $path = storage_public('images/pakarImage' . $filename);
    //         if (!File::exists($path)) {
    //         abort(404);
    //         }
    //     $file = File::get($path);
    //     $type = File::mimeType($path);
    //     $response = Response::make($file, 200);
    //     $response->header("Content-Type", $type);
    //     return $response;

}
