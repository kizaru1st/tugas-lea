<?php

namespace App\Http\Controllers;
use App\Models\DataUangKeluar;
use Illuminate\Http\Request;

class AdminKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data1 = DataUangKeluar::all();
        return view('admin.datakeluar', compact('data1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create-datakeluar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DataUangKeluar::create([
            'bulan' => $request->bulan,
            'jumlah' => $request->jumlah,
        ]);
        return redirect(route("data-keluar.index"));
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
    public function edit(Request $request, DataUangKeluar $data_keluar)
    {
        $lists = [
            "Januari",
            "Februari",
            "Maret",
            "April",
            "May",
            "Juni",
            "Juli",
            "Agustus",
            "September",
            "Oktober",
            "November",
            "Desember",
        ];
        return view('admin.edit-datakeluar', compact('data_keluar'));
    }
   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataUangKeluar $data_keluar)
    {
        $data_keluar->update([
            'bulan' => $request->bulan,
            'jumlah' => $request->jumlah,
        ]);
        return redirect(route("data-keluar.index"));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataUangKeluar $data_keluar)
    {
        $data_keluar->delete();
        return redirect(route("data-keluar.index"));
    }
}
