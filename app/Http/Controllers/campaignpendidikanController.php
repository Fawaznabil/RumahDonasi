<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\campaign;

class campaignpendidikanController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
          //Pencarian
          if($request ->search1){
            $data = campaign::where('kategori',$request->search1)->paginate(10);
            // $data = pemesanan::where('STATUS', 'NAMA_PEMESANAN', 'ASAL_INSTANSI'  .$request->search1)->paginate(5);
        }else if($request->status){
            $data = campaign::where('kategori','LIKE','%'.$request->status.'%')->paginate(10);
        }
        else if($request->search2){
            $data = campaign::where('kategori',$request->search2)->paginate(10);
            // $data = pemesanan::where('STATUS', 'NAMA_PEMESANAN', 'ASAL_INSTANSI'  .$request->search1)->paginate(5);
        }else{
            $data = campaign::where('kategori', 'pendidikan')->paginate(10);
        }

        //Banyak data
        $total = campaign::count();


        // $data = pemesanan::where('STATUS', 'dalam antrian')->orderBy('id', 'desc')->get();

        return view('campaign-pendidikan-login',[
            'data'=> $data,
            'total'=> $total,

        ]);

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
        return view('campaign-pendidikan-login')->with('data', $data);
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