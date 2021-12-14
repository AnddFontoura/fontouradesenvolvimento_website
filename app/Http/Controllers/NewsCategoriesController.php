<?php

namespace App\Http\Controllers;

use App\NewsCategory;
use Illuminate\Http\Request;

class NewsCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->validate($request, [
            'categoryId' => 'nullable|int',
            'categoryName' => 'nullable|string|max:100|min:5'
        ]);

        $categoryId = $request->get('categoryId');
        $categoryName = $request->get('categoryName');

        $newsCategories = NewsCategory::select();
    
        if (!$categoryId) {
            $newsCategories = $newsCategories->where('id', $categoryId);
        }

        if (!$categoryName) {
            $newsCategories = $newsCategories->where('name', 'like', '%' . $categoryName . '%');
        }

        $newsCategories = $newsCategories->paginate(env('PAGINATE_AMOUNT'), 10);

        return view('admin.news_category.index', compact('newsCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(int $id = null)
    {
        $newsCategory = null;

        if ($id) {
            $newsCategory = NewsCategory::where('id', $id)->first();
        }

        return view('admin.news_category.index', compact('newsCategory'));
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
