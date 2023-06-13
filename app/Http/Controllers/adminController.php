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

class adminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalDana = donasi::sum('total_donasi');
        $totalUser = User::where('role','customer')->count();
        $totalProgram = campaign::count();
        // $donasiTertinggi = DB::table('users')
        //                 ->select('donasi', DB::raw('MAX(total_donasi)'))
        //                 ->groupBy('donasi')
        //                 ->havingRaw('MAX(total_donasi)', [1,5])
        //                 ->get();
        return view('admin.index-admin', compact(['totalDana','totalUser','totalProgram']));
    }

    public function masterUser()
    {
        $dataUser = User::all() ;
        return view('admin.master-user', compact(['dataUser']));
    }

    public function updateUser()
    {
        User::find(request('ID_User'))->update([
            'nik'=>request('nik'),
            'name'=>request('name'),
            'alamat'=>request('alamat'),
            'notelepon'=>request('notelepon'),
            'email'=>request('email'),
            'password'=>request('password'),
            'role'=>request('roles')
            //'email_verified_at'=>request('statusUser')
        ]);
        return back()->withSuccess('success');
    }

    public function deleteUser()
    {
        User::find(request('ID_User'))->delete();
        return back()->withSuccess('User berhasil dihapus');
    }

    public function masterProgram()
    {
        $status1 = campaign::where('statusPengajuan','belum-verifikasi')->get();
        $status2 = campaign::where('statusPengajuan','terverifikasi')->get();
        $dataProgram = campaign::all() ;
        return view('admin.master-program', compact(['status1','status2','dataProgram']));
    }

    public function updateProgram()
    {
        campaign::find(request('ID_Program'))->update([
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
        $dataNews = news::all() ;
        return view('admin.master-news', compact(['dataNews']));
    }

    public function updateNews()
    {
        news::find(request('ID_Program'))->update([
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

    public function deleteNews()
    {
        news::find(request('ID_Program'))->delete();
        return back()->withSuccess('Program berhasil dihapus');
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
