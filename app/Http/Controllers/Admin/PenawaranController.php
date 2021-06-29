<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Penawaran;
use App\Kritik;
use App\Http\Requests\Admin\PenawaranRequest;

class PenawaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Penawaran::all();
        $kritik = Kritik::all();
        return view('page.admin.penawaran.index', compact('items', 'kritik'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.admin.penawaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PenawaranRequest $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store('assets/img', 'public');

        Penawaran::create($data);
        return redirect()->route('penawaran.index');
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
        $item = Penawaran::findOrFail($id);
        return view('page.admin.penawaran.update', compact('item'));
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
        $data = $request->all();
        $data['image'] = $request->file('image')->store('assets/img', 'public');

        $item = Penawaran::findOrFail($id);
        $item->update($data);

        return redirect()->route('penawaran.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Penawaran::findOrFail($id);
        $item->delete();
        return redirect()->route('penawaran.index');
    }
}
