<?php

namespace App\Http\Controllers;

use App\Article;
use App\ArticleRevision;
use App\Category;
use App\Http\Requests\ArticleCreateRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::with('revision')->paginate(20);

//        $articles = Article::with('revision_list')->paginate(20);
//        dd($articles);
        return view('backend.articles.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('backend.articles.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $article_revision_data = [
            'author_id' => Auth::user()->id,
            'content' => $request->get('content'),
            'featured_image_id' => 'unused',
            'article_id' => '0'
        ];


        if($request->get('published') == 'on'){
            $published_date = Carbon::now();
            $published = 1;
        }else{
            $published_date = null;
            $published = 0;
        }
        $revision = ArticleRevision::create($article_revision_data);

        $article_data = [
            'title' => $request->get('title'),
            'slug' => slugify($request->get('title')),
            'published' => $published,
            'published_date' => $published_date,
            'revision_id' => $revision->id
        ];
        $article = Article::create($article_data);

        $article->revision->article_id = $article->id;
        $article->revision->save();


        return redirect()->route('articles.index')->with('success','Article Created Succefully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {

        $article->delete();

        return redirect()->route('articles.index')
            ->with('success','Product deleted successfully');


        //
    }
}
