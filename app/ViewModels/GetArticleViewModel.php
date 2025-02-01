<?php

namespace App\ViewModels;

use App\Models\Article;

class GetArticleViewModel extends ViewModel
{
    // public function allCount(): int
    // {
    //     return Snippet::count();
    // }

    // public function activeCount(): int
    // {
    //     return Snippet::where('active', true)->count();
    // }
    public function title(): string
    {
        return __('Buscadores-01');
    }

    public function introMessage(): string
    {
        return __('Resultado de implementar un buscador de forma básica.');
    }

    public function articles()
    {
        return Article::when(request()->query('status'), function ($query) {
                $query->where('status', request()->query('status'));
            })
            ->when(request()->query('sort'), function ($query) {
                $query->orderBy('id', request()->query('sort'));
            })
            ->paginate(5)
            // Para pasar las QUERY_STRINGs disponibles a lo largo de la paginación
            ->withQueryString();

        // return Article::latest()->where('active', true)->get()
        //     ->map(fn ($snippet) =>
        //         (object) [
        //             'id' => $snippet->id,
        //             'title' => $snippet->title,
        //             'slug' => $snippet->slug,
        //             'description' => $snippet->description,
        //             'code' => $snippet->code,
        //             'type' => $snippet->type,

        //             'language' => (object) [
        //                 'id' => $snippet->language->id,
        //                 'name' => $snippet->language->name,
        //             ],
        //             'category' => (object) [
        //                 'id' => $snippet->category->id,
        //                 'name' => $snippet->category->name,
        //             ],
        //             'user' => (object) [
        //                 'id' => $snippet->user->id,
        //                 'name' => $snippet->user->name,
        //                 'avatar_url' => $snippet->user->avatar_path
        //                     ? (is_null($snippet->user->provider_name)
        //                         ? Storage::url($snippet->user->avatar_path)
        //                         : $snippet->user->avatar_path)
        //                     : Utilities::$defaultAvatarImage,
        //             ],

        //             'views' => $snippet->views,
        //             'likes' => $snippet->likes,
        //             'dislikes' => $snippet->dislikes,

        //             'asset_url' => $snippet->asset_url
        //                 ? Storage::url($snippet->asset_url)
        //                 // : null,
        //                 : Utilities::$defaultSnippetCodeImage,


        //             'created_at' => $snippet->created_at,
        //         ]
        //     );
    }
}
