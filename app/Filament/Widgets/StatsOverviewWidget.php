<?php

namespace App\Filament\Widgets;

use App\Models\Application;
use App\Models\BlogPost;
use App\Models\Consultation;
use App\Models\JobListing;
use App\Models\NewsletterSubscriber;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverviewWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Published Posts', BlogPost::where('is_published', true)->count())
                ->description('Total published blog posts')
                ->descriptionIcon('heroicon-o-newspaper')
                ->color('primary'),
            Stat::make('Active Jobs', JobListing::where('is_active', true)->count())
                ->description('Total active job listings')
                ->descriptionIcon('heroicon-o-document-text')
                ->color('success'),
            Stat::make('Total Applications', Application::count())
                ->description('Pending: ' . Application::where('status', 'pending')->count())
                ->descriptionIcon('heroicon-o-document-arrow-up')
                ->color('info'),
            Stat::make('Consultations', Consultation::count())
                ->description('Pending: ' . Consultation::where('status', 'pending')->count())
                ->descriptionIcon('heroicon-o-phone')
                ->color('warning'),
            Stat::make('Subscribers', NewsletterSubscriber::where('is_active', true)->count())
                ->description('Active newsletter subscribers')
                ->descriptionIcon('heroicon-o-envelope')
                ->color('gray'),
        ];
    }
}
