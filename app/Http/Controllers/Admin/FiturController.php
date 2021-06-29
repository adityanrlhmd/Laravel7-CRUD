<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Fitur;
use App\Kritik;
use App\Http\Requests\Admin\FiturRequest;

class FiturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Fitur::all();
        $kritik = Kritik::all();
        return view('page.admin.fitur.index', compact('items', 'kritik'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.admin.fitur.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FiturRequest $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store('assets/img', 'public');

        Fitur::create($data);
        return redirect()->route('fitur.index');
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
        $item = Fitur::findOrFail($id);
        return view('page.admin.fitur.update', compact('item'));
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

        $item = Fitur::findOrFail($id);
        $item->update($data);

        return redirect()->route('fitur.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Fitur::findOrFail($id);
        $item->delete();
        return redirect()->route('fitur.index');
    }
}
