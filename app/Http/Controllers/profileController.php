<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\donasi;

class profileController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::orderBy('id', 'desc')->get();
        return view('user.newprofile', ['profiles' => User::all(),])->with('data', $data);
}

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */

public function create()
{
    return view('user.newprofile', ['profiles' => User::all(),]);
}

public function invoice($id)
{

$donasi = donasi::all();

// $data = pemesanan::where('STATUS', 'dalam antrian')->orderBy('id', 'desc')->get();

return view('user.newprofile',[
    'data'=> $donasi

]);
    // $donasi = donasi::find($id);
    // return view('user.newprofile', compact('donasi'));
}


/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{
    $data = [
        'name' => $request->name,
        'email' => $request->email,
        'notelepon' => $request->notelepon,
        'alamat' => $request->alamat,
        'nik' => $request->nik,
    ];

    $gambar = $request->file('gambar');
    $gambarFolder = 'gambar_folder';
    $gambarName = $gambar->getClientOriginalName();
    $gambar->move($gambarFolder, $gambarName);
    $data['gambar'] = $gambarName;

    User::create($data);
    $data = User::orderBy('id', 'desc')->get();
    return view('user.newprofile', ['profiles' => User::all(), ])->with('data', $data);

}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = USer::where('id', $id)->first();
        return view('ProfileUserEdit')->with('data', $data);
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
        $data = [
            'NamaLengkap' => $request->username,
            'NamaDepan' => $request->first_name,
            'NamaBelakang' => $request->last_name,
            'Status' => $request->status,
            'keterangan' => $request->keterangan,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'Gambar' => $request->file
        ];

        Profile::where('id', $id)->update($data);
        return redirect()->to('ProfileUser')->with('succes', 'Berhasil melakukan update data');
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
