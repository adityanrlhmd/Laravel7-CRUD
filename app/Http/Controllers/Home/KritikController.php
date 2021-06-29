<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Kritik;
use App\Artikel;
use App\Harga;
use App\Penawaran;
use App\Fitur;
use Illuminate\Http\Request;
use App\Http\Requests\Home\KritikRequest;

class KritikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Fitur::all();
        return view('page.home.dashboard', compact('items'));
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
    public function store(KritikRequest $request)
    {
        $data = $request->all();
        // $data['image'] = $request->file('image')->store('assets/img', 'public');

        Kritik::create($data);
        $artikel = Artikel::all();
        $penawaran = Penawaran::all();
        $harga = Harga::all();
        $fitur = Fitur::all();
        $kritik = Kritik::all();
        return view('page.home.dashboard', compact('artikel', 'penawaran', 'harga', 'fitur', 'kritik'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
