<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Session;

class ArticlesController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $articles = Article::latest('published_at')->published()->get();
        return view('articles.index', compact('articles'));
    }

    public function show($id){
        $article = Article::findOrfail($id);
        //dd($article->published_at);
        return view('articles.show',compact('article'));
    }

    public function create(){

        return view('articles.create');
    }


    /**
     * @param ArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ArticleRequest $request){

        //validation
        $request = new Article($request->all());
        $request['excerpt'] = '';
        $request->save();

        //flash messaging
        Session::flash('flash_message', 'Your article has been created');

        return redirect("articles");
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id){
        $article = Article::findorfail($id);
        return view('articles.edit', compact('article'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(ArticleRequest $request, $id){
        $article = Article::findorfail($id);
        $article->update($request->all());

        return redirect('articles');
    }

}
