<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class PublicController extends Controller
{
    public function homepage()
    {

        $articles = Article::orderBy('created_at', 'desc')->paginate(6);
        return view('welcome', compact('articles'));
    }

    public function searchArticles(Request $request)
    {
        $query = $request->input('query');
        $articles = Article::search('%' . $query . '%')->where('is_accepted', true)->paginate(10);
        return view('article.searched', ['articles' => $articles, 'query' => $query]);
    }

    public function setLanguage($lang)
    {
        session()->put('locale', $lang);
        return redirect()->back();
    }
}
