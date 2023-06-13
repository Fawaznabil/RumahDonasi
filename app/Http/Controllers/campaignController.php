<?php

namespace App\Http\Controllers;
use App\Models\campaign;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class campaignController extends Controller
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
        return view('admin.create-campaign');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = [
            //'id_user' =>Auth::user()->id,
            'kategori' => $request->kategori,
            'judul' => $request->judul,
            'target' => $request->target,
            'batasWaktu' => $request->batasWaktu,
            'tujuan' => $request->tujuan,
            'manfaat' => $request->manfaat,
            'gambar' => $request->gambar,
            'deskripsiPenggalangan' => $request->deskripsiPenggalangan,
            'tujuanDana' => $request->tujuanDana
        ];

        $gambar = $request->file('gambar');
        $gambarFolder = 'gambar_folder';
        $gambarName = $gambar->getClientOriginalName();
        $gambar->move($gambarFolder, $gambarName);
        $data['gambar'] = $gambarName;

        campaign::create($data);
        return redirect('/admin/master-campaign');
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
