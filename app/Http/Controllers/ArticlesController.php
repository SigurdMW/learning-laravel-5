<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;

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

    public function store()
    {

    	Article::create(Request::all());

    	return redirect('articles');
    }
}
