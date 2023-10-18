<?php

namespace App\Http\Controllers;

use App\DataTables\CollectionDataTable;
use App\Models\Collection;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    // Pangeran Jonathan | 6706223030 | D3 RPLA 46-03
    // public function index()
    // {
    //     $collection = Collection::all();
    //     return view('collection.index', compact(['collection']));
    // }

    public function index(CollectionDataTable $dataTable)
    {
        return $dataTable->render('collection.index');
    }

    function create()
    {
        return view('collection.create');
    }

    function store(Request $request)
    {
        Collection::create($request->all());
        return redirect('/koleksi');
    }

    function findOne($id)
    {
        $collection = Collection::findOrFail($id);
        return view('collection.findOne', compact('collection'));
    }
}
