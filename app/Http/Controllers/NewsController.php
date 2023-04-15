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
        $new = $news->where('created_at', '>=', Carbon::today());
        return view('news.news', compact("news", "new"));
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

    public function destroy(string $id)
    {
        $news = News::findOrFail($id);

        if ($news->isNotEmpty()) {
            return redirect()->route('news.index');
        } else {        
            $news->delete();
        }

        return redirect()->route('news.index');
    }
    public function show(string $id)
    {
        $this->destroy($id);
        return redirect()->route('news.index');
    }

    public function edit(string $id)
    {
        $statusId = News::findOrFail($id);
        return view('news.edit', compact('statusId'));
    }

    public function update(Request $request, string $id)
    {
        $news = News::findOrFail($id);
        $news->fill($request->all());
        $news->save();

        return redirect()->route('news.index');
    }
}
