<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests\ArticleRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;

use Auth;

use Carbon\Carbon;

class ArticlesController extends Controller
{
    public function index()
    {

    	$articles = Article::latest('updated_at')->where('published_at', '<=',Carbon::now())->get();
    	return view('articles.index',compact('articles'));
    }

    public function show($id)
    {
    	$article = Article::findOrFail($id);
    	return view('articles.show',compact('article'));
    }

    public function create()
    {
    	return view('articles.create');
    }

    public function store(ArticleRequest $request)
    {

        $article = new Article($request->all());
        Auth::user()->articles()->save($article);

    	return redirect('articles');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    public function update($id, ArticleRequest $request)
    {
        $input = $request->all();
        $article = Article::findOrFail($id);
        $article->update($input);
        return redirect('articles');
    }
}
