<?php


declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Contracts\View\View;

final class NewsController extends Controller
{
    public function index(): View
    {
//        dd($this->getNews());
        //$news = $this->getNews();
        $model = app(News::class);
        //dd($model->getNews());
        //return view('news.index', ['news' => $news]);
        return view('news.index', ['news' => $model->getNews()]);
    }

    public function show(int $id): View
    {
        //return view('news.show', ['newsItem' => $this->getNews($id)]);
        $model = app(News::class);

        return view('news.show', ['newsItem' => $model->getNewsById($id)]);

    }
}
