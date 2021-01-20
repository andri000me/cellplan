<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Kecamatan;

class KecamatanController extends Controller
{
    public function __construct() {}

    public function index()
    {
        $kec = Kecamatan::all();
        return response()->json($kec);
    }

    public function show($id)
    {
        $kec = Kecamatan::find($id);
        return response()->json($kec);
    }

    public function create(Request $request)
    {
        $kec = new Kecamatan();
        $kec->kec_nama      = $request->input('kec_nama');
        $kec->save();
        return response()->json("Successfully Created");
    }

    public function update(Request $request, $id)
    {
        $kec = Kecamatan::find($id);
        $kec->kec_nama      = $request->input('kec_nama');
        $kec->save();
        return response()->json($kec);
    }

    public function delete($id)
    {
        $kec = Kecamatan::find($id);
        $kec->delete();
        return response()->json("Successfully Deleted");
    }
}
