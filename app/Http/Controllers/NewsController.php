<?php

namespace App\Http\Controllers;

use App\NewsCategory;
use Illuminate\Http\Request;
use App\News;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Validation\ValidationException
     */
    public function index(Request $request)
    {
        $this->validate($request, [
            'newsId' => 'nullable|int',
            'newsName' => 'nullable|string|max:100|min:5'
        ]);

        $newsId = $request->get('newsId');
        $newsName = $request->get('newsName');

        $news = News::select();

        if (!empty($newsId)) {
            $news = $news->where('id', $newsId);
        }

        if (!empty($newsName)) {
            $news = $news->where('name', 'like', '%' . $newsName . '%');
        }

        $news = $news->paginate(env('PAGINATE_AMOUNT'));

        return view('admin.news.index', compact('news'));
    }

    /**
     * @param int|null $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(int $id = null)
    {
        $news = null;

        if ($id) {
            $news = News::where('id', $id)->first();
        }

        $newsCategories = NewsCategory::orderBy('name', 'desc')->get();

        return view('admin.news.form', compact('news','newsCategories'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'news_category_id' => 'required|int',
            'name' => 'required|string|max:500|min:4|unique:news',
            'description' => 'nullable|string|min:1',
            'header_image' => 'nullable|string|mime:jpg,png,jpeg',
            'footer_image' => 'nullable|string|mime:jpg,png,jpeg',
        ]);

        $request = $request->only(['news_category_id','name', 'description', 'header_image', 'footer_image']);

        $news = News::create(array_merge(
                [
                    'user_id' => Auth::user()->id
                ],
                $request
            )
        );

        return redirect('news')->with('messageSuccess', 'Notícia adicionada com sucesso');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $news = News::where('id', $id)->first();

        return view('admin.news.view', compact('news'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'news_category_id' => 'required|int',
            'name' => 'required|string|max:500|min:4|unique:news,name,' . $id,
            'description' => 'nullable|string|min:1',
            'header_image' => 'nullable|string|mime:jpg,png,jpeg',
            'footer_image' => 'nullable|string|mime:jpg,png,jpeg',
        ]);

        $request = $request->only(['news_category_id','name', 'description', 'header_image', 'footer_image']);

        $news = News::where('id', $id)->update($request);

        return redirect('news')->with('messageSuccess', 'Notícia editada com sucesso.');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $news = News::where('id', $id)->delete();

        return redirect('news')->with('messageWarning', 'Notícia deletada com sucesso.');
    }
}
