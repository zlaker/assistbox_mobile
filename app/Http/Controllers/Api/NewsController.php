<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Return all articles that are not yet read by the current custom_user.
     */
    public function index(Request $request)
    {
        /** @var \App\Models\User $user */
        $user = $request->attributes->get('custom_user');
        $deviceId = $request->headers->get('device_id')
            ?? $request->headers->get('Device-Id')
            ?? $request->headers->get('X-Device-Id');

        $articles = Article::query()
            ->whereDoesntHave('readArticles', function ($q) use ($user, $deviceId) {
                $q->where('user_id', $user->id)
                  ->where('device_id', $deviceId);
            })
            ->orderByDesc('id')
            ->get();

        $news = $articles->map(function (Article $article) {
            return [
                'id' => $article->id,
                'text' => $article->text,
                'created_at' => $article->created_at,
            ];
        });

        return response()->json([
            'data' => [
                'user_id' => $user->id,
                'news' => $news,
            ],
        ]);
    }
}
