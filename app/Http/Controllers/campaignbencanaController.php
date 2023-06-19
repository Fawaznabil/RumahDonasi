<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use App\Models\campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class campaignbencanaController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        // Menentukan jumlah item per halaman
        $perPage = 8;

        $bencana = DB::table('campaigns')
        ->Leftjoin('donasis', 'campaigns.id', '=', 'donasis.id_campaign')
        ->select(
            'campaigns.id as id_campaign',
            'campaigns.judul',
            'gambar',
            'statusPengajuan',
            DB::raw('COALESCE(SUM(donasis.total_donasi), 0) AS total_donasi'),
            DB::raw('COUNT(donasis.total_donasi) AS jumlah_donatur'),
            'campaigns.target',
            'campaigns.namaLembaga',
            DB::raw('DATEDIFF( campaigns.batasWaktu,CURDATE()) AS sisa_hari'),
            DB::raw('COALESCE(SUM(donasis.total_donasi), 0) / campaigns.target * 100 AS presentasi'),
        )->where('campaigns.kategori', 'bencana')
        ->groupBy('campaigns.id')
        ->paginate($perPage);

        return view("campaign-bencana-login",[
            // "data" => $paginator,
            "bencana" => $bencana,

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

        campaign::create($data);
        $data = campaign::orderBy('id', 'desc')->get();
        return view('campaign-bencana-login', ['campaignBencana' => campaign::all(),])->with('data', $data);
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
