<?php

namespace App\Http\Controllers;


use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;


class ArticleController extends Controller implements HasMiddleware
{
    public static function middleware()
    {
        return [
            new Middleware('auth', only: ['create']),
        ];
    }

    public function create()
    {
        return view('article.create');
    }

    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->paginate(8);
        return view('article.index', compact('articles'));
    }

    public function show(Article $article)
    {
        $article->load('user');

        return view('article.show', compact('article'));
    }

    public function byCategory(Category $category)
    {
        $articles = $category->articles()->orderBy('created_at', 'desc')->paginate(10);
        return view('article.byCategory', compact('articles', 'category'));
    }
}
