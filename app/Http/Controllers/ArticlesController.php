<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests\ArticleRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\Tag;

use Auth;

use Carbon\Carbon;

class ArticlesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['only' => 'create']);
    }


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
    	$tags = Tag::lists('name', 'id');
        return view('articles.create', compact('tags'));
    }

    public function store(ArticleRequest $request)
    {
        $this->createArticle($request);

    	return redirect('articles');
    }

    public function edit($id)
    {
        $tags = Tag::lists('name', 'id');
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article','tags'));
    }

    public function update($id, ArticleRequest $request)
    {
        $input = $request->all();
        $article = Article::findOrFail($id);
        $article->update($input);

        // OLD: $article->tags()->sync($request->input('tag_list'));
        $this->syncTags($article, $request->input('tag_list')); // NEW

        return redirect('articles');
    }

    private function syncTags(Article $article, array $tags)
    {
        $article->tags()->sync($tags);
    }

    private function createArticle(ArticleRequest $request)
    {
        $article = new Article($request->all());
        $article_id = Auth::user()->articles()->save($article); //returns id of article
        $this->syncTags($article_id, $request->input('tag_list'));

        return $article_id;
    }
}
