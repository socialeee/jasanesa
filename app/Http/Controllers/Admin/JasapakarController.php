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
        $pakars = Consultant::orderBy('id','desc')->paginate(10);
        return view('pages.admin.pakar.index',compact('pakars'));
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
    public function edit($id)
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
    public function update(Request $request, consultant $pakar)
    {
        // $this->validate($request, [
        //     'pakarFoto' => 'required|image|mimes:jpg,png,jpeg|max:3000',
        //     'pakarName' => 'required|min:3|max:255',
        //     'pakarBidang' => 'required|min:3|max:255',
        //     'pakarHarga'  => 'required',
        //     'pakarDeskripsi' => 'required',
        // ]);
        // $pakar->update($request->all());
        // return redirect()->route('pakar.index')->with('success','Data Has Been Update');
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
