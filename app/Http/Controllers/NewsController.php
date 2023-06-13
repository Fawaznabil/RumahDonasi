<?php

namespace App\Http\Controllers;

use App\Models\news;
use App\Models\campaign;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorenewsRequest;
use App\Http\Requests\UpdatenewsRequest;
use Cviebrock\EloquentSluggable\Services\SlugService;

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
        //($request->all());
        $data = [
            'id_user' =>Auth::user()->id,
            'title' => $request->title,
            'body' => $request->body,
            'slug' => $request->slug,
            'category' => $request->category,
            'gambar1' => $request->gambar1,
            'namaCampaigner' => $request->namaCampaigner,
        ];

        $gambar = $request->file('gambar1');
        $gambarFolder = 'gambar_folder';
        $gambarName = $gambar->getClientOriginalName();
        $gambar->move($gambarFolder, $gambarName);
        $data['gambar1'] = $gambarName;
        $data['excerpt'] = Str::limit(strip_tags($request->body), 200);

        news::create($data);
        $request->session()->flash('success', 'News berhasil ditambahkan!');
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
        $top = news::orderBy('created_at', 'desc')->take(3)->get();
        return view('newsDetail', [
            "title" => "Single News",
            "news" => $news,
            'top' => $top

        ]);
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(news::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
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
