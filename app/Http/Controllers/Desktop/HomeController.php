<?php

namespace App\Http\Controllers\Desktop;

use Illuminate\Http\Request;

use Crypt;
use Auth;
use App\Jobs\ChangeLocale;
use Douyasi\Models\Article;
use Douyasi\Models\Category;

class HomeController extends FrontController
{

    /**
     * 博客首页
     */
    public function getIndex()
    {
        $articles["example"] = Article::where('cid', '=', '2')->orderBy('created_at', 'desc')->simplePaginate(8);
        $articles["hot"] = Article::where('flag', 'like', '%h%')->orderBy('created_at', 'desc')->simplePaginate(12);
        return view('desktop.index', compact('articles'));
    }

    /**
     * 博客文章
     */
    public function getArticle($cslug, $slug)
    {
        $category = Category::where('slug', '=', $cslug)->first();
        if ($category) {
            $article = Article::where('cid', '=', $category->id)
                            ->where('slug', '=', $slug)
                            ->first();
            $article->newly = Article::where('cid', '=', '4')->orwhere('cid', '=', '5')->orderBy('created_at', 'desc')->simplePaginate(4);
            if ($article) {
                return view('desktop.article', compact('article', 'category', 'newly'));
            } else {
                return abort(404);
            }
        } else {
            return abort(404);
        }
    }


    public function showservice($select){
        $category=Category::where('slug', '=', 'service')->first();
        if ($category) {
            $articles = Article::where('cid', '=', $category->id)->orderBy('created_at', 'desc')->simplePaginate(12);
            if ($articles) {
                return view('desktop.showservice', compact('articles', 'category','select'));
            } else {
                return abort(404);
            }
        } else {
            return abort(404);
        }
    }

    /**
     * 博客分类
     */
    public function getCategory($slug)
    {
        $category = Category::where('slug', '=', $slug)->first();
        if ($category) {
            $query = Article::where('cid', '=', $category->id)
                            ->orderBy('created_at', 'desc');
            $count = $query->count();
            $articles = $query->simplePaginate(12);
            return view('desktop.'.$slug, compact('articles', 'category', 'count'));
        } else {
            return abort(404);
        }
    }

    /**
     * YASCMF landing page
     */
    public function getLandingPage()
    {
        return view('desktop.landing-page');
    }

    /**
     * Change Language
     */
    public function getLang(ChangeLocale $changeLocale)
    {
        $this->dispatch($changeLocale);

        return redirect()->back();
    }

}
