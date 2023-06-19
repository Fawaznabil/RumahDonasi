<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\donasi;
use App\Models\campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

$donasi = donasi::with('campaign')->get();
$campaign = campaign::all();
// $data = pemesanan::where('STATUS', 'dalam antrian')->orderBy('id', 'desc')->get();

return view('user.newprofile',[
    'data'=> $donasi,
    'campaign'=>$campaign,

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
    public function ubahPassword(Request $request)
    {
        $request->validate([
            'password' => 'required',
        ]);

        // Mengupdate password user
        $user = Auth::user();
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->back()->with('success', 'Password berhasil diubah.');
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
