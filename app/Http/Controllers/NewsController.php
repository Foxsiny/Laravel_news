<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Helper;
use Illuminate\Contracts\View\View;

final class NewsController extends Controller
{
    public function index(): View
    {
//        dd($this->getNews());
        $news = $this->getNews();

        return view('news.index', ['news' => $news]);
    }

    public function show(int $id): View
    {
        return view('news.show', ['newsItem' => $this->getNews($id)]);
    }
}
