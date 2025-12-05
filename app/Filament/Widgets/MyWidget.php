<?php

namespace App\Filament\Widgets;

use App\Livewire\ExpReport;
use App\Models\Building;
use App\Models\Layout;
use App\Models\Ledger;
use App\Models\Transcation;
use App\Models\User;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class MyWidget extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            
             Stat::make('Building', Building::count())
            ->description('Total number of buildings added')
            ->descriptionIcon('heroicon-m-building-office-2', IconPosition::Before)
            ->chart([10000,4000 ,80000 , 100, 250000 , 4000])
            ->color('info')
            ->url('admin/buildings'),

             Stat::make('Layout', Layout::count())
            ->description('Total number of layouts added')
            ->descriptionIcon('heroicon-m-swatch', IconPosition::Before)
            ->chart([100,40 ,80 , 10, 250 , 40000])
            ->color('danger')
            ->url('admin/layouts'),

             Stat::make('Ledger', Ledger::count())
            ->description('Total number of ledgers added')
            ->descriptionIcon('heroicon-m-identification', IconPosition::Before)
            ->chart([90000,40000 ,800000 , 1500000, 1250000 , 1400000])
            ->color('warning')
            ->url('admin/ledgers'),

             Stat::make('Transcation', Transcation::count())
            ->description('Total number of Transcation added')
            ->descriptionIcon('heroicon-m-document-currency-dollar', IconPosition::Before)
            ->chart([100,40000 ,80000 , 100, 25000 , 400000])
            ->color('success')
            ->url('admin/transcations'),

            
             Stat::make('Users', User::count())
            ->description('Total number of Users added')
            ->descriptionIcon('heroicon-s-user-group', IconPosition::Before)
            ->chart([100,4000 ,80000 , 100, 25000 , 400000])
            ->color('gray')
            ->url('admin/users'),

        ];
    }
}
