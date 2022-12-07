<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\CategoryNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (isset(auth()->user()->level)) {
            if (auth()->user()->level == 'administrator') {
                return view('administrator.data-master.news.index')->with([
                    'news' => News::all()
                ]);
            } elseif (auth()->user()->level == 'patient') {
                return view('patient.news.index')->with([
                    'news' => News::all()
                ]);
            }
        }

        return view('patient.news.index')->with([
            'news' => News::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrator.data-master.news.add')->with([
            'category' => CategoryNews::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|max:255|unique:news',
            'author' => 'required|max:225',
            'category_news_id' => 'required',
            'description' => 'required',
            'content' => 'required',
            'urlSource' => '',
            'urlToImage' => '',
            'file_path' => 'required|image|file|max:2048'
        ]);

        if ($request->file('file_path')) {
            $validateData['file_path'] = $request->file('file_path')->store('news-image');
        }

        $validateData['admin_id'] = auth()->user()->id;

        News::create($validateData);

        return redirect()->intended('/news/create')->with([
            'flash-type' => 'sweetalert',
            'case' => 'default',
            'position' => 'center',
            'type' => 'success',
            'message' => 'Add News Success!'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('administrator.data-master.news.edit')->with([
            'news' => $news,
            'category' => CategoryNews::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $new = [
            'author' => 'required|max:225',
            'category_news_id' => 'required',
            'description' => 'required',
            'content' => 'required',
            'urlSource' => '',
            'urlToImage' => '',
            'file_path' => 'image|file|max:2048'
        ];

        if ($request->title != $news->title) {
            $new['title'] = 'required|max:255|unique:news';
        }

        $validateData = $request->validate($new);

        if ($request->file('file_path')) {
            if ($news->file_path) {
                Storage::delete($news->file_path);
            }
            $validateData['file_path'] = $request->file('file_path')->store('news-image');
        }

        $validateData['admin_id'] = auth()->user()->id;

        News::whereId($news->id)->update($validateData);

        return redirect()->intended('/news')->with([
            'flash-type' => 'sweetalert',
            'case' => 'default',
            'position' => 'center',
            'type' => 'success',
            'message' => 'Update Success!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        News::destroy($news->id);

        return redirect()->intended('/news')->with([
            'flash-type' => 'sweetalert',
            'case' => 'default',
            'position' => 'center',
            'type' => 'success',
            'message' => 'Delete Success!'
        ]);
    }
}
