<?php

namespace App\Http\Controllers;

use App\NewsCategory;
use Illuminate\Http\Request;

class NewsCategoriesController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Validation\ValidationException
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

        if (!empty($categoryId)) {
            $newsCategories = $newsCategories->where('id', $categoryId);
        }

        if (!empty($categoryName)) {
            $newsCategories = $newsCategories->where('name', 'like', '%' . $categoryName . '%');
        }

        $newsCategories = $newsCategories->paginate(env('PAGINATE_AMOUNT'));

        return view('admin.news_category.index', compact('newsCategories'));
    }

    /**
     * @param int|null $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(int $id = null)
    {
        $newsCategory = null;

        if ($id) {
            $newsCategory = NewsCategory::where('id', $id)->first();
        }

        return view('admin.news_category.form', compact('newsCategory'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:500|min:4|unique:news_categories',
            'description' => 'nullable|string|max:1000|min:1',
            'icon_image' => 'nullable|string|max:500|min:1',
            'image_path' => 'nullable|file|mime:jpg,png,jpeg',
        ]);

        $request = $request->only(['name', 'description', 'icon_image', 'image_path']);

        $newsCategory = NewsCategory::create($request);

        return redirect('news-category')->with('messageSuccess', 'Categoria de notícia adicionada com sucesso');
    }

    public function show($id)
    {
        $newsCategory = NewsCategory::where('id', $id)->first();

        return view('admin.news_category.show', compact('newsCategory'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:500|min:4|unique:news_categories,name,' . $id,
            'description' => 'nullable|string|max:1000|min:1',
            'icon_image' => 'nullable|string|max:500|min:1',
            'image_path' => 'nullable|file|mime:jpg,png,jpeg',
        ]);

        $request = $request->only(['name', 'description', 'icon_image', 'image_path']);

        $newsCategory = NewsCategory::where('id', $id)->update($request);

        return redirect('news-category')->with('messageSuccess', 'Categoria de notícia editada com sucesso.');
    }

    public function destroy($id)
    {
        $newsCategory = NewsCategory::where('id', $id)->delete();

        return redirect('news-category')->with('messageWarning', 'Categoria de notícia deletada com sucesso.');
    }
}
