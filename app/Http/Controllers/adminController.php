<?php

namespace App\Http\Controllers;

use App\Models\news;
use App\Models\User;
use App\Models\donasi;
use App\Models\campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\adminController;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class adminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $totalDana = Donasi::sum('total_donasi');
    $totalUser = User::where('role', 'customer')->count();
    $totalProgram = Campaign::count();

    // $nominalTerbanyak = Donasi::join('users', 'donasis.id_user', '=', 'users.id')
    // ->select(
    // 'donasis.nama',
    // DB::raw('SUM(donasis.total_donasi) as total'),
    // )->where('donasis.status', 'Paid')
    // ->groupBy('donasis.id_user')
    // ->orderBy('total', 'desc')
    // ->limit(5)
    // ->get();

    // $nominalTerbanyak = Donasi::join('users', 'donasis.id_user', '=', 'users.id')
    // ->select('donasis.id_user', 'donasis.nama', DB::raw('SUM(donasis.total_donasi) as total'))
    // ->where('donasis.status', 'Paid')
    // ->groupBy('donasis.id_user', 'donasis.nama')
    // ->orderBy('total', 'desc')
    // ->limit(5)
    // ->get();
    $nominalTerbanyak = Donasi::join('users', 'donasis.id_user', '=', 'users.id')
    ->select('users.name', DB::raw('SUM(donasis.total_donasi) as total'))
    ->where('donasis.status', 'Paid')
    ->groupBy('donasis.id_user', 'users.name')
    ->orderBy('total', 'desc')
    ->limit(5)
    ->get();

    $donasiTerbanyak = Donasi::join('users', 'donasis.id_user', '=', 'users.id')
    ->select('users.name', DB::raw('SUM(donasis.total_donasi) as total'), DB::raw('COUNT(donasis.id) as jumlah_donasi'))
    ->where('donasis.status', 'Paid')
    ->groupBy('donasis.id_user', 'users.name')
    ->orderBy('total', 'desc')
    ->limit(5)
    ->get();

    // $donasiTerbanyak = Donasi::join('users', 'donasis.id_user', '=', 'users.id')
    // ->select('donasis.id_user', 'donasis.nama', DB::raw('SUM(donasis.total_donasi) as total'), DB::raw('COUNT(donasis.id) as jumlah_donasi'))
    // ->where('donasis.status', 'Paid')
    // ->groupBy('donasis.id_user', 'donasis.nama')
    // ->orderBy('total', 'desc')
    // ->limit(5)
    // ->get();


    // $donasiTerbanyak = Donasi::with('user')
    //     ->select('id_user', 'donasis.nama', DB::raw('SUM(total_donasi) as total'))
    //     ->where('status', 'Paid')
    //     ->groupBy('id_user')
    //     ->orderBy('total', 'desc')
    //     ->limit(5)
    //     ->get();

    return view('admin.index-admin', compact(['totalDana', 'totalUser', 'totalProgram', 'nominalTerbanyak', 'donasiTerbanyak']));
}


    public function masterUser()
    {
        $dataUser = User::all() ;
        return view('admin.master-user', compact(['dataUser']));
    }

    public function updateUser(Request $request)
    {

        // User::find(request('ID_User'))->update([
        //     'nik'=>request('nik'),
        //     'name'=>request('name'),
        //     'alamat'=>request('alamat'),
        //     'notelepon'=>request('notelepon'),
        //     'email'=>request('email'),
        //     'password'=>request('password'),
        //     'role'=>request('role')
        //     //'photo'=>request('photo')
        //     //'email_verified_at'=>request('statusUser')
        // ]);

        // return back()->withSuccess('success');

        $data = [
            'nik' => $request->input('nik'),
            'name' => $request->input('name'),
            'alamat' => $request->input('alamat'),
            'email' => $request->input('email'),
            'email_verified_at' => $request->input('email_verified_at')
        ];

        $request['password']= bcrypt( $request['password']);
        $idUser = $request->input('ID_User');
        $user = User::find($idUser);

        if ($user) {
            $user->update($data);
            return back()->with('success', 'Data updated successfully.');
        } else {
            return back()->with('error', 'Failed to update data. News not found.');
        }
    }

    public function deleteUser()
    {
        User::find(request('ID_User'))->delete();
        return back()->withSuccess('User berhasil dihapus');
    }

    public function masterProgram()
    {

        $dataProgram = DB::table('campaigns')
    ->leftJoin('donasis', 'campaigns.id', '=', 'donasis.id_campaign')
    ->select(
        'campaigns.id',
        'campaigns.id_user',
        'campaigns.namaLembaga',
        'campaigns.kategori',
        'campaigns.target',
        'campaigns.batasWaktu',
        'campaigns.tujuan',
        'campaigns.manfaat',
        'campaigns.rincian',
        'campaigns.deskripsiPenggalangan',
        'campaigns.ajakan',
        'campaigns.tujuanDana',
        'campaigns.judul',
        'campaigns.gambar',
        'campaigns.statusPengajuan',
        'campaigns.statusCampaign',
        'campaigns.created_at',
        DB::raw('COALESCE(SUM(donasis.total_donasi), 0) AS total_donasi'),
        DB::raw('COUNT(donasis.total_donasi) AS jumlah_donatur'),
        DB::raw('DATEDIFF(campaigns.batasWaktu,CURDATE()) AS sisa_hari'),
        DB::raw('COALESCE(SUM(donasis.total_donasi), 0) / campaigns.target * 100 AS presentasi'),
    )

    ->groupBy('campaigns.id')
    ->get();

        $status1 = campaign::where('statusPengajuan','belum-verifikasi')->get();
        $status2 = campaign::where('statusPengajuan','terverifikasi')->get();
        // $dataProgram = campaign::all();

        return view('admin.master-program', compact(['status1','status2','dataProgram']));
    }

    public function updateProgram()
    {
        campaign::find(request('ID_Program'))->update([
            'judul'=>request('judul'),
            'namaLembaga'=>request('namaLembaga'),
            'tujuan'=>request('tujuan'),
            'manfaat'=>request('manfaat'),
            'tujuanDana'=>request('tujuanDana'),
            'rincian'=>request('rincian'),
            'ajakan'=>request('ajakan'),
            'deskripsiPenggalangan'=>request('deskripsiPenggalangan'),
            'statusPengajuan'=>request('status1'),
        ]);
        return back()->withSuccess('success');
    }

    public function deleteProgram()
    {
        campaign::find(request('ID_Program'))->delete();
        return back()->withSuccess('Program berhasil dihapus');
    }

    public function masterDonasi()
    {
        $dataDonasi = donasi::all();
        $campaign = campaign::all();
        return view('admin.master-donasi', compact(['dataDonasi','campaign']));
    }

    public function updateDonasi()
    {
        donasi::find(request('ID_Donasi'))->update([
            'judul'=>request('judul'),
            'kategori'=>request('kategori'),
            'tujuan'=>request('tujuan'),
            'manfaat'=>request('manfaat'),
            'tujuanDana'=>request('tujuanDana'),
            'rincian'=>request('rincian'),
            'ajakan'=>request('ajakan'),
            'deskripsiPenggalangan'=>request('deskripsiPenggalangan'),
            'statusPengajuan'=>request('status1'),
            'statusCampaign'=>request('status2')
        ]);
        return back()->withSuccess('success');
    }

    public function deleteDonasi()
    {
        donasi::find(request('ID_Program'))->delete();
        return back()->withSuccess('Program berhasil dihapus');
    }

    public function masterNews()
    {
        $campaigner = campaign::all();
        $dataNews = news::all() ;
        return view('admin.master-news', compact(['dataNews','campaigner']));
    }

    public function updateNews(Request $request)
    {
        $data = [
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'slug' => $request->input('slug'),
            'category' => $request->input('category'),
            'namaCampaigner' => $request->input('namaCampaigner')
        ];

        if ($request->hasFile('gambar1')) {
            $gambar = $request->file('gambar1');
            $gambarFolder = 'gambar_folder';
            $gambarName = $gambar->getClientOriginalName();
            $gambar->move($gambarFolder, $gambarName);
            $data['gambar1'] = $gambarName;
        }

        $idNews = $request->input('ID_News');
        $news = news::find($idNews);

        if ($news) {
            $news->update($data);
            return back()->with('success', 'Data updated successfully.');
        } else {
            return back()->with('error', 'Failed to update data. News not found.');
        }


        // news::find(request('ID_News'))->update([
        //     'title'=>request('title'),
        //     'body'=>request('body'),
        //     'slug'=>request('slug'),
        //     'category'=>request('category'),
        //     'namaCampaigner'=>request('namaCampaigner'),
        //     'gambar1'=>$request->file
        // ]);
        // return back()->withSuccess('success');
    }

    public function deleteNews()
    {
        news::find(request('ID_News'))->delete();
        return back()->withSuccess('News berhasil dihapus');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(news::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
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
