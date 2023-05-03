<?php

namespace App\Http\Controllers;

use App\Models\donasi;
use Illuminate\Http\Request;

class indexController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //             // dd($request->search1);
    //     //Pencarian
    //     if($request ->search1){
    //         $data = donasi::where('NAMA_PEMESANAN',$request->search1)->paginate(10);
    //         // $data = pemesanan::where('STATUS', 'NAMA_PEMESANAN', 'ASAL_INSTANSI'  .$request->search1)->paginate(5);
    //     }else if($request->status){
    //         $data = donasi::where('STATUS','LIKE','%'.$request->status.'%')->paginate(10);
    //     }
    //     else if($request->search2){
    //         $data = donasi::where('ASAL_INSTANSI',$request->search2)->paginate(10);
    //         // $data = pemesanan::where('STATUS', 'NAMA_PEMESANAN', 'ASAL_INSTANSI'  .$request->search1)->paginate(5);
    //     }else{
    //         $data = donasi::paginate(10);
    //     }

    //     //Banyak data
    //     $total = donasi::count('TOTAL_HARGA');

    //     return view('index-login',[
    //         'data'=> $data,
    //         'total'=> $total
    //     ]);
    // }

        return view('index-login');
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
