<?php

namespace App\Filament\Widgets;

use App\Models\Interior;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Notification;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Users', User::query()->count()),
            Stat::make('Free Users', User::query()->where('is_paid', 0)->count()),
            Stat::make('Paid Users', User::query()->where('is_paid', 1)->count()),
            Stat::make('Interiors', Interior::query()->count()),
            Stat::make('Notifications', Notification::query()->count()),
            Stat::make('Templates', 5),
        ];
    }
}
