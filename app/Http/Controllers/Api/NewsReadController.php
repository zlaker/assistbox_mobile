<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ReadArticle;
use Illuminate\Http\Request;
use App\Models\Article;

class NewsReadController extends Controller
{
    /**
     * Mark the given article as read by the current custom_user (per device).
     */
    public function store(Request $request, $article_id)
    {
        /** @var \App\Models\User $user */
        $user = $request->attributes->get('custom_user');

        // device_id is guaranteed by middleware
        $deviceId = $request->headers->get('device_id')
            ?? $request->headers->get('Device-Id')
            ?? $request->headers->get('X-Device-Id');

        // Ensure article exists (route parameter is {article_id})
        $article = Article::query()->findOrFail($article_id);

        $read = ReadArticle::firstOrCreate([
            'user_id' => $user->id,
            'device_id' => $deviceId,
            'article_id' => $article->id,
        ]);

        return response()->json([
            'status' => 'ok',
            'data' => [
                'read_article_id' => $read->id,
                'article_id' => $article->id,
                'user_id' => $user->id,
                'device_id' => $deviceId,
            ],
        ]);
    }
}
