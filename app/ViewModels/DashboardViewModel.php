<?php

namespace App\ViewModels;

use Illuminate\Support\Facades\Auth;

final class DashboardViewModel extends ViewModel
{
    public function title(): string
    {
        return __('Dashboard');
    }

    public function welcomeMessage(): string
    {
        return __("Welcome to the dashboard :name!", [
            // 'name' => auth()->user()->name,
            'name' => Auth::user()->name,
        ]);
    }

    public function actions(): array
    {
        return [
            [
                'title' => __('Profile'),
                'description' => __('Edit your profile'),
                'url' => route('profile.edit'),
                'text' => __('Edit'),
            ],
            [
                'title' => __('Collections'),
                'description' => __('Manage your collections'),
                'url' => route('collections.index'),
                'text' => __('Manage'),
            ],
            [
                'title' => __('New Collection'),
                'description' => __('Create a new Collection'),
                'url' => route('collections.create'),
                'text' => __('Create'),
            ],
        ];
    }
}
