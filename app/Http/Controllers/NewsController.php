<?php

namespace App\Http\Controllers;

use App\Models\news;
use App\Models\campaign;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\StorenewsRequest;
use App\Http\Requests\UpdatenewsRequest;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('news', [
            "title" => "News",
            "news" => News::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createNews()
    {
        $campaigner = campaign::all();
        return view('admin.create-news',compact(['campaigner']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeNews(Request $request)
    {
        //dd($request->all());
        $validatedData = $request->validate([
            'title'=> 'required',
            'excerpt'=> 'required',
            'body'=> 'required',
            'slug'=> 'required',
            'category'=> 'required',
            'gambar1'=> 'required'
        ]);


        $gambar = $request->file('gambar1');
        $gambarFolder = 'gambar_folder';
        $gambarName = $gambar->getClientOriginalName();
        $gambar->move($gambarFolder, $gambarName);
        $data['gambar1'] = $gambarName;

        //$validatedData['ID_User'] = Auth::user()->id;
        news::create($validatedData);
        $request->session()->flash('success', 'Data user berhasil ditambahkan!');
        return redirect('/admin/master-news');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function show(news  $news)
    {
        return view('newsDetail', [
            "title" => "Single News",
            "news" => $news
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(news $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatenewsRequest  $request
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatenewsRequest $request, news $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(news $news)
    {
        //
    }
}
