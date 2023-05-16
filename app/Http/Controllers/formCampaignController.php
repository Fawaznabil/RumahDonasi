<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\campaign;
use App\Models\User;

class formCampaignController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function home()
     {
         return view("index-login",[
            "data" => campaign::all()
        ]);
     }

    public function index()
    {
        return view("index",[
            "data" => campaign::all(),
            "bencana" => campaign::where('kategori', 'bencana')->get(),
            "pendidikan" => campaign::where('kategori', 'pendidikan')->get(),
        ]);
    }

    public function formcampaign()
    {

        // dd(Auth::user()->id);
        // $user = User::findOrFail($id);
        // return view('form-campaign', ["user" => $user]);
        return view('form-campaign');
    }

    public function insertdata(Request $request)
    {
        // dd($request->all());
        $data = [
            'id_user' =>Auth::user()->id,
            'pekerjaan' => $request->pekerjaan,
            'namaLembaga' => $request->namaLembaga,
            'lokasi' => $request->lokasi,
            'deskripsiDiri' => $request->deskripsiDiri,
            'kategori' => $request->kategori,
            'judul' => $request->judul,
            'target' => $request->target,
            'batasWaktu' => $request->batasWaktu,
            'tujuan' => $request->tujuan,
            'manfaat' => $request->manfaat,
            'rincian' => $request->rincian,
            'gambar' => $request->gambar,
            'deskripsiPenggalangan' => $request->deskripsiPenggalangan,
            'ajakan' => $request->ajakan,
            'tujuanDana' => $request->tujuanDana
        ];

        $gambar = $request->file('gambar');
        $gambarFolder = 'gambar_folder';
        $gambarName = $gambar->getClientOriginalName();
        $gambar->move($gambarFolder, $gambarName);
        $data['gambar'] = $gambarName;

        campaign::create($data);
        $data = campaign::orderBy('id', 'desc')->get();
        return view('index-login', ['formcampaign' => campaign::all(),])->with('data', $data);




        // dd($request->all());
        // campaign::create($request->all());
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
