<?php

namespace App\Http\Controllers\Api\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Transformers\ArticlesTransformer;
use Illuminate\Http\Request;
use Dingo\Api\Routing\Helpers;

class ArticleController extends Controller
{
    use Helpers;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tasks = Article::all();
        return $this->response->collection($tasks, new ArticlesTransformer());
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        /*$one = Article::all();
        $resource = new \League\Fractal\Resource\Collection($one, new ArticlesTransformer());
        $fractal = new \League\Fractal\Manager();
        return $fractal->parseIncludes('article_categories')->createData($resource)->toJson();*/
        /*$paginator = Article::query()->paginate();
        $tasks = $paginator->getCollection();
        $resource = new \League\Fractal\Resource\Collection($tasks, new \App\Transformers\ArticlesTransformer());
        $resource->setPaginator(new \League\Fractal\Pagination\IlluminatePaginatorAdapter($paginator));

        $fractal = new \League\Fractal\Manager();
        return $fractal->createData($resource)->toJson();*/
        $task = Article::findOrFail($id);
        return $this->response->item($task, new ArticlesTransformer());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
