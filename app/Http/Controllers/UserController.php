<?php

namespace App\Http\Controllers;

use App\DataTables\UsersDataTable;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Pangeran Jonathan | 6706223030 | D3 RPLA 46-03

    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('user.index');
    }

    public function registration() {
        return view('user.register');
    }

    function store(Request $request) {
        User::create($request->all());
        return redirect('/dashboard');
    }

    function findOne($id) {
        $user = User::findOrFail($id);
        return view('user.findOne', compact('user'));
    }
}
