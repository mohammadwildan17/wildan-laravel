<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKategori;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $kategori = Category::all();

        return view('admin.kategoribuku', ['kat' => $kategori]);
    }

    public function store(StoreKategori $request)
    {
        try{
            $param = $request->validated();

            Category::create($param);

            return redirect()
            ->route('admin.inkategori')
            ->with('succes', 'Data Berhasil di Inputkan');
        }
        catch (\Exception $e) {
            return redirect()
            ->route('admin.inkategori')
            ->with('error' , $e->getMessage());
        }
    }
}
