<?php

namespace App\Http\Controllers;

use App\BrandAmbassador;
use App\Exports\BAExport;
use Illuminate\Http\Request;
use App\Http\Requests\BARequest;
use Maatwebsite\Excel\Facades\Excel;

class BrandAmbassadorController extends Controller
{
    public function register()
    {
        return view('reg_ba');
    }

    public function save(BARequest $request)
    {
        $validated = $request->validated();
        BrandAmbassador::create($validated);
        flash('Data kamu berhasil dikirim!')->success();
        return redirect()->back();
    }

    public function toExcel()
    {
        return Excel::download(new BAExport, 'Brand Ambassador.xlsx');
    }
}
