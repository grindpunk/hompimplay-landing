<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //list article
    public function index()
    {
        $articles = Article::where('is_published', true)->get();

        return response()->json([
            'data' => $articles
        ]);
    }
}
