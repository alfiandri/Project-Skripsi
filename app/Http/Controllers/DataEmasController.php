<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataEmas;

class DataEmasController extends Controller
{
    public function index()
    {
        return DataEmas::all();
    }

    public function show($id)
    {
        return DataEmas::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $DataEmas = DataEmas::findOrFail($id);
        $DataEmas->update($request->all());

        return $DataEmas;
    }

    public function store(Request $request)
    {
        $DataEmas = DataEmas::create($request->all());
        return $DataEmas;
    }

    public function destroy($id)
    {
        $DataEmas = DataEmas::findOrFail($id);
        $DataEmas->delete();
        return '';
    }
}
