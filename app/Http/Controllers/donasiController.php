<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\donasi;
use Illuminate\Http\Request;

class donasiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('donate-not-login');
    }

    public function checkout(Request $request)
    {

        // $data = [
        //     'nama'=>$request->nama,
        //     'email' => $request->email,
        //     'harga' => $request->harga,
        //     'total_harga' => $request->harga+2000,
        //     'status' => 'Unpaid',
        // ];
                // $donasi = donasi::create($data);


        $request -> request->add(['total_harga' => $request->harga + 2000, 'status' => 'Unpaid']);
        $donasi = donasi::create($request->all());

        // $request->request->add(['total_harga' => $request->harga + 2000, 'status' => 'Unpaid']);


        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = config('midtrans.is_production');
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $donasi->id,
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
        return view('checkout', compact('snapToken','donasi'));

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
        $donasi = donasi::find($id);
        return view('invoice', compact('donasi'));
    }
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
