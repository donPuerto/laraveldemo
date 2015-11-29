<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;

class ArticlesController extends Controller
{

    /**
     *Authentication Middleware
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){

        //return \Auth::User();
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

        $article = new Article($request->all());
        Auth::user()->articles()->save( $article);

        /*$request = new Article($request->all());
        $request['excerpt'] = '';
        $request->save();*/

        //flash messaging

        //  \Session::flash('flash_message', 'Your article has been created');
        // or
        //session()->flash('flash_message','Your article has been created');


       /* session()->flash('flash_message_important',true);*/

        Flash::success('flash_message_important');
        return redirect("articles");


        /*return redirect("articles")->with([
            'flash_message' => 'Your article has been created'


        ]);*/
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
