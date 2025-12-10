<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;

class LandingController extends Controller
{
    /**
     * Display the landing page with news articles.
     */
    public function index()
    {
        try {
            $articles = Article::query()
                ->orderByDesc('created_at')
                ->take(6)
                ->get()
                ->map(function (Article $article) {
                    return [
                        'id' => $article->id,
                        'title' => $article->title,
                        'text' => Str::markdown($article->text ?? ''),
                        'excerpt' => Str::limit(strip_tags($article->text ?? ''), 150),
                        'created_at' => $article->created_at,
                        'formatted_date' => $article->created_at?->format('M d, Y') ?? '',
                    ];
                });
        } catch (\Exception $e) {
            // If articles table doesn't exist or any other error, return empty collection
            $articles = collect();
        }

        return view('landing', [
            'articles' => $articles,
        ]);
    }
}

