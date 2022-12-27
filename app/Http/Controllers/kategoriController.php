<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class kategoriController extends Controller
{
    //
    public function index()
    {
        $kategori_produk = kategori::all();
        return view('kategori/index', compact('kategori_produk'));
    }

    public function store()
    {
        // menambah data dengan Eloquent ORM biasa
        // $kategori = new kategori;
        // $kategori->kategori = 'Alat Dapur';
        // $kategori->keterangan = 'Alat Daput 1';
        // $kategori->save();
        // menambah data dengan Eloquent ORM Mass Assignment
        kategori::create([
            'kategori' => 'Bahan Bangunan',
            'keterangan' => 'Bahan Banguanan Atas',
        ]);
        echo "Menambah data dengan Eloquent berhasil !!";
    }

    public function update()
    {
        // update data dengan Eloquent ORM biasa
        // $kategori = kategori::where('id', 3)->first();
        // $kategori->kategori = 'Bahan bahan bangunan';
        // $kategori->keterangan = 'Bahan Bangunan Bagian Atas';
        // $kategori->save();
        // update data dengan Eloquent ORM Mass Assignment
        kategori::where('id', 2)
            ->update([
                'kategori' => 'Alat-alat dapur',
            ]);

        return redirect('/kategori');
    }

    public function delete()
    {
        // $kategori = kategori::where('id', 1)->first();
        // $kategori->delete();
        kategori::where('id', 2)->delete();

        return redirect('/kategori');
    }
}
