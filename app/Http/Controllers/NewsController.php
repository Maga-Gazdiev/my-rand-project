<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {
        $news = new News();
        $news = News::paginate(5);
        return view('news.news', compact("news"));
    }

    public function create()
    {
        $news = new News();
        return view('news.create', compact('news'));
    }

    public function store(Request $request)
    {
        $news = new News();
        $news->name = $request->name;
        $news->description = $request->description;
        $news->save();

        return redirect()->route("news.index");
    }

    public function show(string $id)
    {
        $posts = News::findOrFail($id);
        return view('news.show', compact('posts'));
    }

    public function edit(string $id)
    {
        $statusId = News::findOrFail($id);
        return view('news.edit', compact('statusId'));
    }
}
