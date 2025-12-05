<?php

namespace App\Filament\Resources\Ledgers\Pages;

use App\Filament\Resources\Ledgers\LedgerResource;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateLedger extends CreateRecord
{
    protected static string $resource = LedgerResource::class;

      protected function getRedirectUrl(): string
    {
       return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
   {
       return Notification::make()
           ->success()
           ->title('Ledger Created')
           ->body('Ledger Created Successfully.');
   }
}
