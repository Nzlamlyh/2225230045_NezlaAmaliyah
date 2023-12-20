<?php

namespace App\Http\Controllers;

use App\Models\Perpustakaan;
use Illuminate\Http\Request;

class PerpustakaanController extends Controller
{
   public function index(){
        $perpustakaan = Perpustakaan::all();
        return view('perpustakaan.index', compact(['perpustakaan']));
    }

    public function create()
    {
        return view('perpustakaan.create');
    }

    public function store(Request $request)
    {
        //dd($request->except(['_token', 'submit']));
        perpustakaan::create($request->except(['_token', 'submit']));
        return redirect('/perpustakaan');
    }

    public function edit($id)
    {
        $perpustakaan = perpustakaan::find($id);
        return view('perpustakaan.edit', compact(['perpustakaan']));
    }

    public function update($id, Request $request)
    {
        $perpustakaan = perpustakaan::find($id);
        $perpustakaan->update($request->except(['_token', 'submit']));
        return redirect('/perpustakaan');
    }

    public function destroy($id)
    {
        $perpustakaan = Perpustakaan::find($id);
        $perpustakaan->delete();
        return redirect('/perpustakaan');
    }
}
