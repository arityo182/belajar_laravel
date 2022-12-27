<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class produkController extends Controller
{
    //
    public function index()
    {
        // $produk = 'Aqua 400ML';
        // return view('produk/index', compact('produk'));
        $produk = DB::table('produk')
            ->join('kategori_produk', 'produk.id_kategori', '=', 'kategori_produk.id')
            ->get();
        return view('produk/index', compact('produk'));
    }

    public function store()
    {
        DB::table('produk')
            ->insert([
                'nama' => 'Lampu',
                'id_kategori' => 1,
                'qty' => 14,
                'harga_beli' => 40000,
                'harga_jual' => 60000,
            ]);
        echo "Data Berhasil Ditambah";
    }

    public function update()
    {
        DB::table('produk')->where('id', 3)
            ->update([
                'nama' => 'Bola Lampu',
                'qty' => 20,
                'harga_beli' => 45000,
                'harga_jual' => 55000,
            ]);
        echo "Data Berhasil Diperbaharui";
    }

    public function delete()
    {
        DB::table('produk')->where('id', 3)->delete();
        echo "Data Berhasil Dihapus";
    }

    public function show()
    {
        $produk = ['Aqua 115 ML', 'Minuman Bersoda', 'Buku Sejarah', 'Mouse', 'CPU'];
        return view('produk/show', compact('produk'));
    }
}
