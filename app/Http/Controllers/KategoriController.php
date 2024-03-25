<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class KategoriController extends Controller
{
    

    public function create(): View {
        return view('kategori.create');
    }

    public function store(Request $request): RedirectResponse {
        $validated = $request->validate([
            'kategori_kode' => 'required',
            'kategori_nama' => 'required',
        ]);
        //the post is valid..
        return redirect('/kategori');
    }
    // public function store(Request $request){
    //     KategoriModel::create([
    //         'kategori_kode' => $request->kodeKategori,
    //         'kategori_nama' => $request->namaKategori,
    //     ]);
    //     return redirect('/kategori');
    // }

    // public function index(KategoriDataTable $dataTable){
    //     return $dataTable->render('kategori.index');
    // }
    
    // public function edit($id){
    //     $data = KategoriModel::find($id);
    //     return view('kategori.edit', [
    //         'data' => $data
    //     ]);
    // }

    // public function update(Request $request, $id)
    // {
    //     KategoriModel::where('kategori_id', $id)->update([
    //         'kategori_kode' => $request->kodeKategori,
    //         'kategori_nama' => $request->namaKategori,
    //     ]);

    //     return redirect('/kategori');
    // }

    // public function hapus($id)
    // {
    //     KategoriModel::where('kategori_id', $id)->delete();
    //     return redirect('/kategori');
    // }
}