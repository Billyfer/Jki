<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataJamaah;


class DataJamaahController extends Controller
{
    public function index()
    {
        $data_jamaahs = DataJamaah::all();
        return view('data_jamaah.index');
    }

    public function create()
    {
        return view('data_jamaah.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Tanggal_Keberangkatan' => 'required|date',
            'Tanggal_Kepulangan' => 'required|date',
            'Paket' => 'required|string|max:255',
            'hotel_madinah' => 'required|string|max:255',
            'hotel_mekkah' => 'required|string|max:255',
            'program' => 'required|string|max:255',
            'harga' => 'required|integer',
            'pesawat' => 'required|string|max:255',
            'total_seat' => 'required|integer',
            'terisi' => 'required|integer',
            'sisa' => 'required|integer'
        ]);

        DataJamaah::create($validatedData);

        return redirect ()->route('data_jamaah.index')->with('success', 'Data Jamaah created successfully.');
    }

    public function show($id)
    {
        $data_jamaah = DataJamaah::findOrFail($id);
        return view('data_jamaah.show', compact('data_jamaah'));
    }

    public function edit($id)
    {
        $data_jamaah = DataJamaah::findOrFail($id);
        return view('data_jamaah.edit', compact('data_jamaah'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'Tanggal_Keberangkatan' => 'required|date',
            'Tanggal_Kepulangan' => 'required|date',
            'Paket' => 'required|string|max:255',
            'hotel_madinah' => 'required|string|max:255',
            'hotel_mekkah' => 'required|string|max:255',
            'program' => 'required|string|max:255',
            'harga' => 'required|integer',
            'pesawat' => 'required|string|max:255',
            'total_seat' => 'required|integer',
            'terisi' => 'required|integer',
            'sisa' => 'required|integer'
        ]);

        DataJamaah::whereId($id)->update($validatedData);

        return redirect()->route('data_jamaah.index')->with('success', 'Data Jamaah updated successfully.');
    }

    public function destroy($id)
    {
        DataJamaah::destroy($id);
        return redirect()->route('data_jamaah.index')->with('success', 'Data Jamaah deleted successfully.');
    }
}
