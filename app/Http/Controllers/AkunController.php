<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    //
    public function index()
    {
        $akun = User::all();
        return view('superadmin.akun.akun', compact('akun'));
    }
    public function tambah()
    {

        return view('superadmin.akun.akun-add');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',

        ]);

        $data['password'] = bcrypt($request->password);


        User::create($data);
        return redirect('superadmin/akun')
            ->with('success', 'User Baru Berhasil Ditambahkan');
    }
    public function edit($id)
    {
        $akun = User::where('id', $id)->first();

        return view('superadmin.akun.akun-edit', compact('akun', 'id'));
    }
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',

        ]);


        if ($request->has('password')) {

            $data['password'] = bcrypt($request->password);
         
        } 

        User::findOrFail($id)->update($data);

        return redirect('superadmin/akun')
            ->with('success', 'User Baru Berhasil Diupdate');
    }
    public function delete($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'User Berhasil DiHapus');
    }
}
