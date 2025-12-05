<?php

namespace App\Filament\Resources\Ledgers\Pages;

use App\Filament\Resources\Ledgers\LedgerResource;
use Filament\Resources\Pages\Page;

class Customerreport extends Page
{
    protected static string $resource = LedgerResource::class;

    protected string $view = 'filament.resources.ledgers.pages.customerreport';
}
