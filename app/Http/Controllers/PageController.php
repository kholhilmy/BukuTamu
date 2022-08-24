<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    bukutamu,
    Kategori,
    BukuTamuKategori
};

use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    //
    public function index (){
        $bukutamus = bukutamu::get();
        $kategoris = Kategori::get();
        return view('main', compact('bukutamus','kategoris'));
    }
    public function store(Request $request){
        $request->validate([
            'nama' => 'required|max:255|min:3',
            'email' => 'required|max:255',
            'komentar' => 'required|max:255',
            'waktu' => 'required|max:255',
            'foto'=>'required|file|image',
        ]);

        $path = Storage::disk('public')->putFile('foto', $request->file('foto'));

        $bukutamu = bukutamu::create([
            'nama' => $request['nama'],
            'email' => $request['email'],
            'komentar' => $request['komentar'],
            'waktu' => $request['waktu'],
            'foto' => $path,
        ]);

        if ($request->has('kategori')){
            foreach ($request['kategori'] as $kategoriId){
                BukuTamuKategori::create([
                    'bukutamus_id' => $bukutamu->id,
                    'kategoris_id' => (int) $kategoriId
                ]);
            }
        }
        return redirect('/')->with('status', 'Visitors Created!');
    }

    public function update(Request $request, bukutamu $bukutamu){
        $request->validate([
            'nama' => 'required|max:255|min:3',
            'email' => 'required|max:255',
            'komentar' => 'required|max:255',
            'waktu' => 'required|max:255',
            'foto'=>'file|image',
        ]);
        
        if($request->has('foto')){
            $path = Storage::disk('public')->putFile('foto', $request->file('foto'));
            $bukutamu->foto=$path;
        };

        $bukutamu->nama = $request['nama'];
        $bukutamu->email = $request['email'];
        $bukutamu->komentar = $request['komentar'];
        $bukutamu->waktu = $request['waktu'];
        $bukutamu->save();
        
        BukuTamuKategori::where('bukutamus_id', $bukutamu->id)->delete();

        if ($request->has('kategori')){
            foreach ($request['kategori'] as $kategoriId){
                BukuTamuKategori::create([
                    'bukutamus_id' => $bukutamu->id,
                    'kategoris_id' => (int) $kategoriId
                ]);
            }
        }
        return redirect('/')->with('status', 'Visitors updated!');
    }
    public function destroy(bukutamu $bukutamu){
        
        BukuTamuKategori::where('bukutamus_id', $bukutamu->id)->delete();
        $bukutamu->delete();
        return redirect('/')->with('status', 'Visitors deleted!');
    }
}
