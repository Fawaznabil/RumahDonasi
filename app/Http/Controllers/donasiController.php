<?php

namespace App\Http\Controllers;

use Midtrans\Config;
use Midtrans\CoreApi;

use App\Http\Controllers\Controller;
use App\Models\donasi;
use App\Models\campaign;
use Illuminate\Http\Request;
use Illuminate\Auth\AuthManager;

class donasiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $campaign = campaign::findOrFail($id);
        return view('donate', ["campaign" => $campaign]);
    }

    public function checkout(Request $request)
    {

     // Mengambil nilai input dari request
    $inputString = $request->input('total_donasi');

    // Menghapus tanda koma dari string
    $cleanString = str_replace(',', '', $inputString);

    // Mengkonversi string yang telah dibersihkan menjadi integer menggunakan intval()
    $nominal = intval($cleanString);
//  dd($request->input('radio'));

        if($request->hide == true) {
            $request -> request->add(['total_harga' => $nominal + 2000,'total_donasi' => $nominal, 'status' => 'Paid', 'id_user' => $request->id_user, 'id_campaign' => $request->id_campaign, 'nama'=>'anonim' ]);
        }else{
            $request -> request->add(['total_harga' => $nominal + 2000,'total_donasi' => $nominal, 'status' => 'Paid', 'id_user' => $request->id_user, 'id_campaign' => $request->id_campaign, ]);
        }
            $donasi = donasi::create($request->all());

        // $request->request->add(['total_harga' => $request->harga + 2000, 'status' => 'Unpaid']);


        // Set your Merchant Server Key

        Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        Config::$isProduction = config('midtrans.is_production');
        // Set sanitization on (default)
        Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $donasi->total_harga,
                // 'order_id' => $donasi['id'],
                // 'gross_amount' => $donasi['total_harga']
            ),
            'customer_details' => array(
                'first_name' => $request->nama,
                'last_name' => '',
                'email' => $request->email,

            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return view('pembayaran', compact('snapToken','donasi'));

    }

    public function callback(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id.$request->status_code.$request->gross_amount.$serverKey);
        if($hashed == $request->signature_key){
            if($request->transaction_status == 'capture' or $request->transaction_status == 'settlement'){
                $donasi = donasi::find($request->order_id);
                $donasi->update(['status' => 'paid']);
            }
        }
    }

    public function invoice($id)
    {

    $total = donasi::count();
    $selesai = donasi::where('STATUS','selesai')->count();
    $dalamAntrian = donasi::where('STATUS','dalam antrian')->count();
    $donasi = donasi::with('campaign')->get();
    $campaign = campaign::all();

    // $data = pemesanan::where('STATUS', 'dalam antrian')->orderBy('id', 'desc')->get();

    return view('user.newprofile',[
        'data'=> $donasi,
        'dalamAntrian'=>$dalamAntrian,
        'campaign'=>$campaign
    ]);
        // $donasi = donasi::find($id);
        // return view('user.newprofile', compact('donasi'));
    }

    public function create()
    {
        return view('admin.create-campaign');
    }

    public function createDonasi()
    {
        $campaign = campaign::all();
        return view('admin.create-donasi', compact(['campaign']));
    }

    public function storeDonasi(Request $request)
    {
        $validatedData = $request->validate([
            'namaCampaign'=> 'required',
            'jumlahDonasi'=> 'required',
            'doaDonasi'=> 'required'
        ]);

        $validatedData['ID_User'] = Auth::user()->id;
        donasi::create($validatedData);
        $request->session()->flash('success', 'Data user berhasil ditambahkan!');
        return redirect('/admin/master-donasi');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul'=> 'required',
            'target'=> 'required',
            'batasWaktu'=> 'required',
            'tujuan'=> 'required',
            'manfaat'=> 'required',
            'rincian'=> 'required',
            'gambar'=> 'required',
            'deskripsiPenggalangan'=> 'required',
            'ajakan'=> 'required',
            'tujuanDana'=> 'required'
        ]);

        $gambar = $request->file('gambar');
        $gambarFolder = 'gambar_folder';
        $gambarName = $gambar->getClientOriginalName();
        $gambar->move($gambarFolder, $gambarName);
        $validatedData['gambar'] = $gambarName;

        $validatedData['ID_User'] = Auth::user()->id;
        User::create($validatedData);
        $request->session()->flash('success', 'Data user berhasil ditambahkan!');
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
