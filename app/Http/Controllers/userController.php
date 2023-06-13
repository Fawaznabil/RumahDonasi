<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create-user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeUser(Request $request)
    {
        //dd($request->all());
        // $validatedData = $request->validate([
        //     'gambar' => 'required',
        //     'nik'=> 'required',
        //     'name'=> 'required',
        //     'alamat'=> 'required',
        //     'notelepon'=> 'required',
        //     'email'=> 'required|email:dns',
        //     'password'=> 'required|min:8|max:100'
        // ]);
        $data = [
            'id_user' =>Auth::user()->id,
            'gambar' => $request->gambar,
            'nik' => $request->nik,
            'name' => $request->name,
            'alamat' => $request->alamat,
            'notelepon' => $request->notelepon,
            'email' => $request->email,
            'password' => $request->password,
            'photo' => $request->photo,

        ];

        $gambar = $request->file('photo');
        $gambarFolder = 'gambar_folder';
        $gambarName = $gambar->getClientOriginalName();
        $gambar->move($gambarFolder, $gambarName);
        $data['photo'] = $gambarName;
        $data['password'] = bcrypt($data['password']);
        
        User::create($data);
        $request->session()->flash('success', 'Data user berhasil ditambahkan!');
        return redirect('/admin/master-user');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
