<?php

namespace App\Filament\Pages;

use BackedEnum;
use Filament\Pages\Page;
use Filament\Support\Icons\Heroicon;
use Filament\Widgets\StatsOverviewWidget;
use UnitEnum;

class Expreport extends Page
{
    protected string $view = 'filament.pages.expreport';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedArchiveBoxXMark;

    protected static ?string $navigationLabel = 'Expiry Reports';

    protected static string | UnitEnum | null $navigationGroup = 'Reports';

    protected static ?int $navigationSort = 1;

    public function getTitle(): string
{
    return 'Expiry Reports Details';
}


}


