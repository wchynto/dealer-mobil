<?php

namespace App\Http\Controllers;

use App\Models\Postingan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PostinganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'judul' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'isi' => 'required',
            'kategori' => 'required',
        ];

        $messages = [
            'judul.required' => 'Judul tidak boleh kosong',
            'foto.required' => 'Foto tidak boleh kosong',
            'foto.image' => 'Foto harus berupa gambar',
            'foto.mimes' => 'Foto harus berupa gambar dengan format jpeg, png, jpg, gif, atau svg',
            'foto.max' => 'Ukuran foto maksimal 2 MB',
            'isi.required' => 'Isi tidak boleh kosong',
            'kategori.required' => 'Kategori tidak boleh kosong',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $fileName = time() . '.' . $request->foto->extension();
        $request->foto->storeAs('public/postingan', $fileName);

        Postingan::insert([
            'judul' => $request->judul,
            'foto' => $fileName,
            'isi' => $request->isi,
            'kategori_id' => $request->kategori,
        ]);

        return redirect()->back()->with('success', 'Postingan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'judul' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'isi' => 'required',
            'kategori' => 'required',
        ];

        $messages = [
            'judul.required' => 'Judul tidak boleh kosong',
            'foto.required' => 'Foto tidak boleh kosong',
            'foto.image' => 'Foto harus berupa gambar',
            'foto.mimes' => 'Foto harus berupa gambar dengan format jpeg, png, jpg, gif, atau svg',
            'foto.max' => 'Ukuran foto maksimal 2 MB',
            'isi.required' => 'Isi tidak boleh kosong',
            'kategori.required' => 'Kategori tidak boleh kosong',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $fileName = time() . '.' . $request->foto->extension();
        $request->foto->storeAs('public/postingan', $fileName);

        Postingan::find($id)->update([
            'judul' => $request->judul,
            'foto' => $fileName,
            'isi' => $request->isi,
            'kategori_id' => $request->kategori,
        ]);

        return redirect()->back()->with('success', 'Postingan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $postingan = Postingan::find($id);

        Storage::delete('public/postingan/' . $postingan->foto);

        $postingan->delete();

        return redirect()->back()->with('success', 'Postingan berhasil dihapus');
    }
}
