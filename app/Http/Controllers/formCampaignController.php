<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\campaign;
use App\Models\donasi;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class formCampaignController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function home()
     {
        $bencana = DB::table('campaigns')
    ->Leftjoin('donasis', 'campaigns.id', '=', 'donasis.id_campaign')
    ->select(
        'campaigns.id as id_campaign',
        'campaigns.judul',
        'gambar',
        DB::raw('COALESCE(SUM(donasis.total_donasi), 0) AS total_donasi'),
        DB::raw('COUNT(donasis.total_donasi) AS jumlah_donatur'),
        'campaigns.target',
        'campaigns.namaLembaga',
        DB::raw('DATEDIFF(campaigns.batasWaktu,CURDATE()) AS sisa_hari'),
        DB::raw('COALESCE(SUM(donasis.total_donasi), 0) / campaigns.target * 100 AS presentasi'),
    )->where('campaigns.kategori', 'bencana')
    ->groupBy('campaigns.id')
    ->get();
    // dd($bencana);

    $pendidikan = DB::table('campaigns')
    ->leftJoin('donasis', 'campaigns.id', '=', 'donasis.id_campaign')
    ->select(
        'campaigns.id as id_campaign',
        'campaigns.judul',
        'gambar',
        DB::raw('COALESCE(SUM(donasis.total_donasi), 0) AS total_donasi'),
        DB::raw('COUNT(donasis.total_donasi) AS jumlah_donatur'),
        'campaigns.target',
        'campaigns.namaLembaga',
        DB::raw('DATEDIFF(campaigns.batasWaktu,CURDATE()) AS sisa_hari'),
        DB::raw('COALESCE(SUM(donasis.total_donasi), 0) / campaigns.target * 100 AS presentasi'),
    )
    ->where('campaigns.kategori', 'pendidikan')
    ->groupBy('campaigns.id')
    ->get();
// dd($campaigns);

    $totalDonasi = donasi::count();
    $totalCampaign = campaign::count();

         return view("index-login",[
            "totalCampaign" => $totalCampaign,
            "totalDonasi" => $totalDonasi,
            "bencana" => $bencana ,
            "pendidikan" => $pendidikan,
        ]);
     }

    public function index()
    {
        $bencana = DB::table('campaigns')
    ->Leftjoin('donasis', 'campaigns.id', '=', 'donasis.id_campaign')
    ->select(
        'campaigns.id as id_campaign',
        'campaigns.judul',
        'gambar',
        DB::raw('COALESCE(SUM(donasis.total_donasi), 0) AS total_donasi'),
        DB::raw('COUNT(donasis.total_donasi) AS jumlah_donatur'),
        'campaigns.target',
        'campaigns.namaLembaga',
        DB::raw('DATEDIFF(campaigns.batasWaktu,CURDATE()) AS sisa_hari'),
        DB::raw('COALESCE(SUM(donasis.total_donasi), 0) / campaigns.target * 100 AS presentasi'),
    )->where('campaigns.kategori', 'bencana')
    ->groupBy('campaigns.id')
    ->get();
    // dd($bencana);

    $pendidikan = DB::table('campaigns')
    ->leftJoin('donasis', 'campaigns.id', '=', 'donasis.id_campaign')
    ->select(
        'campaigns.id as id_campaign',
        'campaigns.judul',
        'gambar',
        DB::raw('COALESCE(SUM(donasis.total_donasi), 0) AS total_donasi'),
        DB::raw('COUNT(donasis.total_donasi) AS jumlah_donatur'),
        'campaigns.target',
        'campaigns.namaLembaga',
        DB::raw('DATEDIFF(campaigns.batasWaktu,CURDATE()) AS sisa_hari'),
        DB::raw('COALESCE(SUM(donasis.total_donasi), 0) / campaigns.target * 100 AS presentasi'),
    )
    ->where('campaigns.kategori', 'pendidikan')
    ->groupBy('campaigns.id')
    ->get();

    // dd($pendidikan);

    $totalDonasi = donasi::count();
    $totalCampaign = campaign::count();

        return view("index",[
            "totalDonasi" => $totalDonasi,
            "totalCampaign" => $totalCampaign,
            "bencana" => $bencana ,
            "pendidikan" => $pendidikan,
            // "data" => campaign::all(),
            // "bencana" => campaign::where('kategori', 'bencana')->get(),
            // "pendidikan" => campaign::where('kategori', 'pendidikan')->get(),

        ]);
    }

    public function detail($id, Request $request)
    {
        $detail = DB::table('campaigns')
    ->Leftjoin('donasis', 'campaigns.id', '=', 'donasis.id_campaign')
    ->select(
        'campaigns.id as id_campaign',
        'campaigns.judul',
        'gambar',
        'deskripsiPenggalangan',
        DB::raw('COALESCE(SUM(donasis.total_donasi), 0) AS total_donasi'),
        DB::raw('COUNT(donasis.total_donasi) AS jumlah_donatur'),
        'campaigns.target',
        'campaigns.namaLembaga',
        DB::raw('DATEDIFF(campaigns.batasWaktu, CURDATE()) AS sisa_hari'),
        DB::raw('COALESCE(SUM(donasis.total_donasi), 0) / campaigns.target * 100 AS presentasi'),
    )->where('campaigns.id', $id)
    ->groupBy('campaigns.id')
    ->get();

        $detailProgram =campaign::find($id);
        $donatur = donasi::all();

        return view('detailDonasi', [
            // "paragraphs" => $paragraphs,
            "detail" => $detail ,
            "detailDonasi" => $detailProgram,
            "donatur" =>$donatur,
            "id_campaign"=>$id,
            // "deskripsiPenggalangan" => $deskripsiPenggalangan,
        ]);
    }

    public function detaillogin($id, Request $request)
    {
        $detail = DB::table('campaigns')
    ->Leftjoin('donasis', 'campaigns.id', '=', 'donasis.id_campaign')
    ->select(
        'campaigns.id as id_campaign',
        'campaigns.judul',
        'gambar',
        'deskripsiPenggalangan',
        DB::raw('COALESCE(SUM(donasis.total_donasi), 0) AS total_donasi'),
        DB::raw('COUNT(donasis.total_donasi) AS jumlah_donatur'),
        'campaigns.target',
        'campaigns.namaLembaga',
        DB::raw('DATEDIFF(campaigns.batasWaktu, CURDATE()) AS sisa_hari'),
        DB::raw('COALESCE(SUM(donasis.total_donasi), 0) / campaigns.target * 100 AS presentasi'),
    )->where('campaigns.id', $id)
    ->groupBy('campaigns.id')
    ->get();

        $detailProgram =campaign::find($id);
        $donatur = donasi::all();

        return view('detailDonasi', [
            // "paragraphs" => $paragraphs,
            "detail" => $detail ,
            "detailDonasi" => $detailProgram,
            "donatur" =>$donatur,
            "id_campaign"=>$id,
            // "deskripsiPenggalangan" => $deskripsiPenggalangan,
        ]);
    }

    public function formcampaign(Request $request)
    {
        // dd(Auth::user()->id);
        // $user = User::findOrFail($id);
        // return view('form-campaign', ["user" => $user]);
        return view('form-campaign');
    }

    public function insertdata(Request $request)
    {
        $inputString = $request->input('target');

        // Menghapus tanda koma dari string
        $cleanString = str_replace(',', '', $inputString);

        // Mengkonversi string yang telah dibersihkan menjadi integer menggunakan intval()
        $target = intval($cleanString);

        // dd($request->all());
        $data = [
            'id_user' =>Auth::user()->id,
            'pekerjaan' => $request->pekerjaan,
            'namaLembaga' => $request->namaLembaga,
            'lokasi' => $request->lokasi,
            'deskripsiDiri' => $request->deskripsiDiri,
            'kategori' => $request->kategori,
            'judul' => $request->judul,
            // 'target' => intval($request->target),
            'target' => $target,
            'batasWaktu' => $request->batasWaktu,
            'tujuan' => $request->tujuan,
            'manfaat' => $request->manfaat,
            'rincian' => $request->rincian,
            'gambar' => $request->gambar,
            'deskripsiPenggalangan' => $request->deskripsiPenggalangan,
            'ajakan' => $request->ajakan,
            'tujuanDana' => $request->tujuanDana,
        ];

        $gambar = $request->file('gambar');
        $gambarFolder = 'gambar_folder';
        $gambarName = $gambar->getClientOriginalName();
        $gambar->move($gambarFolder, $gambarName);
        $data['gambar'] = $gambarName;

        campaign::create($data);
        campaign::where('kategori', 'bencana')->get();
        campaign::where('kategori', 'pendidikan')->get();


        $bencana = campaign::where('kategori', 'bencana')->get();
        $pendidikan = campaign::where('kategori', 'pendidikan')->get();

        $data = campaign::orderBy('id', 'desc')->get();
        return redirect()->intended('/Home');
        return view('index-login', ['formcampaign' => campaign::all(),])->with('data', $data, 'bencana', $bencana, 'pendidikan', $pendidikan );

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
