<?php

namespace App\Http\Controllers;

use App\Article_Revision;
use Illuminate\Http\Request;

class ArticleRevisionController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article_Revision  $article_Revision
     * @return \Illuminate\Http\Response
     */
    public function show(Article_Revision $article_Revision)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article_Revision  $article_Revision
     * @return \Illuminate\Http\Response
     */
    public function edit(Article_Revision $article_Revision)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article_Revision  $article_Revision
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article_Revision $article_Revision)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article_Revision  $article_Revision
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article_Revision $article_Revision)
    {
        //
    }
}
